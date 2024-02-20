<?php

namespace App\Libraries;

use Modules\Account\Libraries\Tree;

class Folder

{
    public function folderCheck($lan_code)
    {
        helper('filesystem');

        $map = directory_map(APPPATH . 'Language', 1);


        $valTest = 0;
        foreach ($map as $key => $value) {

            $res = preg_replace('#[^\w()/.%\-&]#', "", $value);


            if ($res == $lan_code) {
                $valTest = 1;
            }
        }


        if ($valTest == 0) {
            // ----------------For local server
            // mkdir(APPPATH.'Language//'.$lan_code,0777,TRUE);
            // $sourceDirectory = APPPATH.'Language//default//';
            // directory_mirror($sourceDirectory, APPPATH.'Language\\'.$lan_code.'\\');
            // ----------------For local server

            $sourceDirectory = APPPATH . "Language/default/";
            $newLangDirectory = APPPATH . "Language/" . $lan_code . "/";

            if (!is_dir($newLangDirectory)) {
                directory_mirror($sourceDirectory, $newLangDirectory);
            }
        }

        return true;
    }

    public function folderNameEdit($folderName, $newName)
    {
        // ----------------For local server
        //   rename (APPPATH.'Language\\'.$folderName, APPPATH.'Language\\'.$newName);
        // ----------------For local server

        // ----------------For Live server
        rename(APPPATH . 'Language/' . $folderName, APPPATH . 'Language/' . $newName);
        // ----------------For Live server
        return $newName;
    }
}
