<?php

namespace App\Libraries;

use Modules\Localize\Models\LocalizeModel;
use Modules\Localize\Models\LangstringModel;
use Modules\Localize\Models\LngstngvalueModel;

class Language
{
    public $localizeModel;
    protected $lngStringModel;
    protected $langstringvalueModel;

    public function __construct()
    {
        $this->localizeModel = new LocalizeModel();
        $this->lngStringModel = new LangstringModel();
        $this->langstringvalueModel = new LngstngvalueModel();
    }

    public static function boot()
    {
        $currentLang = session('lang');
        $langFile = sprintf("%s/Language/%s/Localize.php", rtrim(APPPATH, '/'), $currentLang);

        if (!file_exists($langFile)) {
            try {
                !is_dir(dirname($langFile)) && mkdir(dirname($langFile), 0777, true);
                copy(sprintf("%s/Language/default/Localize.php", rtrim(APPPATH, '/')), $langFile);
            } catch (\Throwable $e) {
                die('System couldn\'t find language file! exited.');
            }
        }
    }

    public function getAllLanguage()
    {
        $this->localizeModel = new LocalizeModel();
        $data['languagelist']  =  $this->localizeModel->orderBy('id', 'DESC')->findAll();
        return view('common/getLanguage', $data);
    }

    public function testdata()
    {
        $kye =  "'apples dfdfd'";
        $sam = "=>";
        $value =  'I have';

        $return = 'return [';
        $return .= $kye;
        $return .= $sam;
        $return .= $value;
        $return .= '];';

        return $return;
    }

    public function writeLanguage($lngid)
    {
        // get language data
        $lngStrDtail = $this->langstringvalueModel
            ->select('lngstngvalues.id,lngstngvalues.value,langstrings.name')
            ->join('langstrings', 'langstrings.id = lngstngvalues.string_id', 'left')
            ->where('localize_id', $lngid)
            ->orderBy('langstrings.id', 'ASC')
            ->asArray()
            ->findAll();

        // build language data array
        $lgnStrArray = array_combine(array_column($lngStrDtail, 'name'), array_column($lngStrDtail, 'value'));

        // build php array
        // returns php script
        $lgnStrOutArray = var_export($lgnStrArray, true);
        return sprintf("<?php\n\nreturn %s;", $lgnStrOutArray);
    }
}
