<?php

namespace App\Commands;

use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;
use CodeIgniter\Config\DotEnv;
use CodeIgniter\Encryption\Encryption;

/**
 * Generates a new encryption key.
 */
class GenerateJwtToken extends BaseCommand
{
    /**
     * The Command's group.
     *
     * @var string
     */
    protected $group = 'Jwt';

    /**
     * The Command's name.
     *
     * @var string
     */
    protected $name = 'jwt:generate';

    /**
     * The Command's usage.
     *
     * @var string
     */
    protected $usage = 'jwt:generate [options]';

    /**
     * The Command's short description.
     *
     * @var string
     */
    protected $description = 'Generates a new jwt token and writes it in an `.env` file.';

    /**
     * The command's options
     *
     * @var array
     */
    protected $options = [
        '--force'  => 'Force overwrite existing token in `.env` file.',
        '--length' => 'The length of the random string that should be returned in bytes. Defaults to 32.',
        '--prefix' => 'Prefix to prepend to encoded token (either hex2bin or base64). Defaults to hex2bin.',
        '--show'   => 'Shows the generated token in the terminal instead of storing in the `.env` file.',
    ];

    /**
     * Actually execute the command.
     */
    public function run(array $params)
    {
        $prefix = $params['prefix'] ?? CLI::getOption('prefix');
        if (in_array($prefix, [null, true], true)) {
            $prefix = 'hex2bin';
        } elseif (!in_array($prefix, ['hex2bin', 'base64'], true)) {
            $prefix = CLI::prompt('Please provide a valid prefix to use.', ['hex2bin', 'base64'], 'required'); // @codeCoverageIgnore
        }

        $length = $params['length'] ?? CLI::getOption('length');
        if (in_array($length, [null, true], true)) {
            $length = 32;
        }

        $encodedKey = $this->generateRandomKey($prefix, $length);

        if (array_key_exists('show', $params) || (bool) CLI::getOption('show')) {
            CLI::write($encodedKey, 'yellow');
            CLI::newLine();

            return;
        }

        if (!$this->setNewEncryptionKey($encodedKey, $params)) {
            CLI::write('Error in setting new encryption key to .env file.', 'light_gray', 'red');
            CLI::newLine();

            return;
        }

        // force DotEnv to reload the new env vars
        putenv('TOKEN_SECRET');
        unset($_ENV['TOKEN_SECRET'], $_SERVER['TOKEN_SECRET']);
        $dotenv = new DotEnv(ROOTPATH);
        $dotenv->load();

        CLI::write('Application\'s new encryption key was successfully set.', 'green');
        CLI::newLine();
    }

    /**
     * Generates a key and encodes it.
     */
    protected function generateRandomKey(string $prefix, int $length): string
    {
        $key = Encryption::createKey($length);

        if ($prefix === 'hex2bin') {
            return 'bus365' . bin2hex($key);
        }

        return 'bus365' . base64_encode($key);
    }

    /**
     * Sets the new encryption key in your .env file.
     */
    protected function setNewEncryptionKey(string $key, array $params): bool
    {
        $currentKey = env('TOKEN_SECRET', '');

        if ($currentKey !== '' && !$this->confirmOverwrite($params)) {
            // Not yet testable since it requires keyboard input
            // @codeCoverageIgnoreStart
            return false;
            // @codeCoverageIgnoreEnd
        }

        return $this->writeNewEncryptionKeyToFile($currentKey, $key);
    }

    /**
     * Checks whether to overwrite existing encryption key.
     */
    protected function confirmOverwrite(array $params): bool
    {
        return (array_key_exists('force', $params) || CLI::getOption('force')) || CLI::prompt('Overwrite existing key?', ['n', 'y']) === 'y';
    }

    /**
     * Writes the new encryption key to .env file.
     */
    protected function writeNewEncryptionKeyToFile(string $oldKey, string $newKey): bool
    {
        $baseEnv = ROOTPATH . 'env';
        $envFile = ROOTPATH . '.env';

        if (!file_exists($envFile)) {
            if (!file_exists($baseEnv)) {
                CLI::write('Both default shipped `env` file and custom `.env` are missing.', 'yellow');
                CLI::write('Here\'s your new key instead: ' . CLI::color($newKey, 'yellow'));
                CLI::newLine();

                return false;
            }

            copy($baseEnv, $envFile);
        }

        $ret = file_put_contents($envFile, preg_replace(
            $this->keyPattern($oldKey),
            "\nTOKEN_SECRET = {$newKey}",
            file_get_contents($envFile)
        ));

        return $ret !== false;
    }

    /**
     * Get the regex of the current encryption key.
     */
    protected function keyPattern(string $oldKey): string
    {
        $escaped = preg_quote($oldKey, '/');

        if ($escaped !== '') {
            $escaped = "[{$escaped}]*";
        }

        return "/^[#\\s]*TOKEN_SECRET[=\\s]*{$escaped}$/m";
    }
}
