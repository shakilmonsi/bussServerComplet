<?php

namespace Modules\Localize\Controllers;

use App\Controllers\BaseController;
use App\Libraries\Language;
use Modules\Localize\Models\LangstringModel;
use Modules\Localize\Models\LocalizeModel;
use Modules\Localize\Models\LngstngvalueModel;
class Lngstngvalue extends BaseController
{
    protected $Viewpath;
    protected $lngStringModel;
    protected $localizeModel;
    protected $langstringvalueModel;

    public function __construct()
    {
        $this->Viewpath = "Modules\Localize\Views";
        $this->lngStringModel = new LangstringModel();
        $this->localizeModel = new LocalizeModel();
        $this->langstringvalueModel = new LngstngvalueModel();
    }


    public function index($lanId)
    {
        $languageDetail = $this->localizeModel->find($lanId);
        $this->langstringvalueModel->select('lngstngvalues.id,lngstngvalues.value,langstrings.name')->join('langstrings', 'langstrings.id = lngstngvalues.string_id', 'left');
        $data['lanStrValue'] = $this->langstringvalueModel->where('localize_id', $lanId)->orderBy('langstrings.id', 'DESC')->findAll();

        $data['disname'] = $languageDetail->display_name;
        $data['lngid'] = $languageDetail->id;

        $data['module'] =    lang("Localize.language");
        $data['title']  =    lang("Localize.add_language_string");

        $heading = lang("Localize.add_language_string") . ' ' . lang("Localize.value");
        $data['pageheading'] = $heading;

        echo view($this->Viewpath . '\lngstringvalue/index', $data);
    }

    public function update()
    {
        $langLibrary = new Language();
        $lanstrvalue = $this->request->getVar('strvalue');
        $id = $this->request->getVar('strid');
        $languageid = $this->request->getVar('langid');
        $languageDetail = $this->localizeModel->find($languageid);
        $langFolder = $languageDetail->name;

        foreach ($lanstrvalue as $key => $lanvalue) {
            $arrayUpdate[$key] = array(
                "id" => $id[$key],
                "value" => $lanvalue,
            );
        }

        $this->langstringvalueModel->updateBatch($arrayUpdate, 'id');

        // language file path
        // create langstring file if not exits
        $filepath = APPPATH . "Language/$langFolder/";
        !is_dir($filepath) && mkdir($filepath, 0777, true);

        // write lang strings to file
        $data = $langLibrary->writeLanguage($languageid);
        $t = write_file($filepath . "/Localize.php", $data, "w+");

        return redirect()->route('index-lngstngvalue', [$languageid])->with("success", "Data Save");
    }
}
