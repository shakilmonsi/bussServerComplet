<?php

namespace Modules\Localize\Controllers;

use App\Controllers\BaseController;
use App\Libraries\Language;
use CodeIgniter\Database\RawSql;
use CodeIgniter\HTTP\ResponseTrait;
use Modules\Localize\Models\LangstringModel;
use Modules\Localize\Models\LocalizeModel;
use Modules\Localize\Models\LngstngvalueModel;

class Langstring extends BaseController
{
    use ResponseTrait;

    /**
     * @var \CodeIgniter\Database\BaseConnection
     */
    private $db;

    /**
     * @var string
     */
    protected $Viewpath;
    protected $lngStringModel;

    protected $localizeModel;
    protected $langstringvalueModel;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->Viewpath = "Modules\Localize\Views";

        $this->localizeModel = new LocalizeModel();
        $this->lngStringModel = new LangstringModel();
        $this->langstringvalueModel = new LngstngvalueModel();
    }

    public function new()
    {
        $data['languagestr'] = $this->lngStringModel->orderBy('id', 'DESC')->findAll();

        $data['module'] =    lang("Localize.language");
        $data['title']  =    lang("Localize.language_string_list");

        $data['pageheading'] = lang("Localize.language_string_list");

        echo view($this->Viewpath . '\lngstring\new', $data);
    }

    public function bulkNew()
    {
        $data['module'] = lang("Localize.language");
        $data['title']  = lang("Localize.bulk_upload");
        $data['pageheading'] = lang("Localize.bulk_upload");

        return view($this->Viewpath . '\lngstring\new-bulk', $data);
    }

    public function bulkDownloadSample()
    {
        $stringValueChart = array();

        // get all langstrings with values
        $lngStringValues = $this->langstringvalueModel
            ->select('langstrings.name AS `name`')
            ->select(new RawSql('GROUP_CONCAT(lngstngvalues.value SEPARATOR "_-_") AS `value`'))
            ->select(new RawSql('GROUP_CONCAT(localizes.name SEPARATOR "_-_") AS `code`'))
            ->join('langstrings', 'lngstngvalues.string_id = langstrings.id', 'left')
            ->join('localizes', 'lngstngvalues.localize_id = localizes.id')
            ->groupBy('lngstngvalues.string_id')
            ->orderBy('langstrings.id')
            ->findAll();

        foreach ($lngStringValues as $string) {
            $newChartValue = array('name' => '', 'l' => []);

            // set id and name string
            $newChartValue['name'] = $string->name;

            // explode joined values
            $codeArr = explode('_-_', $string->code);
            $valueArr = explode('_-_', $string->value);

            foreach ($codeArr as $ckey => $code) {
                $newChartValue['l'][$code] = $valueArr[$ckey] ?? '';
            }

            if (!isset($langKeys)) {
                $langKeys = array_keys($newChartValue['l']);
            }

            // sort langstrings
            $itemAllLangs = array_pop($newChartValue);
            $langKeyFS = array_fill_keys($langKeys, '');
            $itemFilteredLangs = array_intersect_key($itemAllLangs, $langKeyFS);
            $itemSortedLangs = array_merge($langKeyFS, $itemFilteredLangs);

            $stringValueChart[] = array_merge($newChartValue, $itemSortedLangs);
        }

        // create csv template
        $fileHeader = implode(',', array_keys(current($stringValueChart)));
        $fileBody = implode(PHP_EOL, array_map(fn ($v) => implode(',', $v), $stringValueChart));
        $file = sprintf("%s%s%s", $fileHeader, PHP_EOL, $fileBody);

        // download csv file
        return $this->response
            ->setHeader('Content-Type', 'text/csv')
            ->setHeader('Content-Disposition', 'attachment; filename="langstrings.csv"')
            ->setBody($file);
    }

    public function create()
    {

        $getdata = $this->request->getVar('name');

        $getdata = preg_replace('/[^A-Za-z0-9\-]/', ' ', $getdata);
        $getdata = preg_replace('/[\/\&%#\$]/', ' ', $getdata);
        $getdata = str_replace(' ', '_', $getdata);
        $getdata = strtolower($getdata);

        $data = array(
            "name" => $getdata,
        );


        if ($this->validation->run($data, 'lanstr')) {

            $lanStrId = $this->lngStringModel->insert($data);

            $localize =    $this->localizeModel->orderBy('id', 'DESC')->findAll();
            $inserData = array();
            foreach ($localize as $key => $value) {
                $inserData[$key] = array(
                    "string_id" => $lanStrId,
                    "localize_id" => $value->id,
                );
            }

            $this->langstringvalueModel->insertBatch($inserData);
            return redirect()->route('new-langstring')->with("success", "Data Save");
        } else {
            $data['validation'] = $this->validation;
            $data['languagestr'] = $this->lngStringModel->orderBy('id', 'DESC')->findAll();

            $data['module'] =    lang("Localize.language");
            $data['title']  =    lang("Localize.language_string_list");

            $data['pageheading'] = lang("Localize.language_string_list");

            echo view($this->Viewpath . '\lngstring/new', $data);
        }
        // 
    }

    public function bulkCreate()
    {
        $uploadedFile = $this->request->getFile('lngstringFile');

        if ($uploadedFile->isValid()) {
            $tempFilePath = $uploadedFile->getTempName();
            $csvContent = file_get_contents($tempFilePath);

            if (($csvLines = explode("\n", $csvContent)) && count($csvLines) > 1) {
                // parsed csv lines
                // get header
                $csvHeader = array_shift($csvLines);
                $headerArr = str_getcsv($csvHeader);

                $localizeIdArr = array();
                array_shift($headerArr);

                foreach ($headerArr as $langKey) {
                    $localizeInfo = $this->localizeModel->where('name', $langKey)->first();
                    $localizeIdArr[] = $localizeInfo->id ?? '';
                }

                // get body from csv
                $bodyArr = array_filter(array_map('str_getcsv', $csvLines), 'array_filter');
                $this->db->transStart();

                foreach ($bodyArr as $body) {
                    $stringName = array_shift($body);

                    if (empty($stringName)) {
                        continue;
                    }

                    try {
                        $stringInfo = $this->lngStringModel->where('name', $stringName)->first();
                        $stringId = $stringInfo->id ?? $this->lngStringModel->insert(['name' => $stringName]);

                        foreach ($body as $bk => $value) {
                            // insert/update new value

                            if (($localizeId = $localizeIdArr[$bk]) === '') {
                                // value is not set with any localize
                                // or localize name is invalid
                                continue;
                            }

                            $this->langstringvalueModel->upsertLangStringVal($stringId, $localizeId, $value);
                        }
                    } catch (\Throwable $e) {
                        $this->db->transRollback();
                        return redirect()->back()->with('fail', $e->getMessage());
                    }
                }

                $this->db->transCommit();

                // update new php array file
                // by new langstring values
                $langLibrary = new Language();

                foreach ($headerArr as $haKey => $langName) {
                    // create langstring file if not exits
                    $filepath = APPPATH . "Language/$langName";
                    !is_dir($filepath) && mkdir($filepath, 0777, true);

                    // write lang strings to file
                    $languageid = $localizeIdArr[$haKey];
                    $data = $langLibrary->writeLanguage($languageid);
                    write_file($filepath . "/Localize.php", $data, "w+");
                }

                return redirect()->back()->with('success', 'Data saved !');
            }
        }
    }
}
