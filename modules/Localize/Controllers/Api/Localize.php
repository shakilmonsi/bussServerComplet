<?php

namespace Modules\Localize\Controllers\Api;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use Modules\Localize\Models\LangstringModel;
use Modules\Localize\Models\LanguageModel;
use Modules\Localize\Models\LngstngvalueModel;
use Modules\Localize\Models\LocalizeModel;

class Localize extends BaseController
{
    use ResponseTrait;

    /**
     * Language model
     *
     * @var LanguageModel
     */
    protected $localizeModel;

    /**
     * Lang string model
     *
     * @var LangstringModel
     */
    protected $langStringModel;

    /**
     * Lanugage string value model
     *
     * @var LngstngvalueModel
     */
    protected $langStringValueModel;

    public function __construct()
    {
        $this->localizeModel = new LocalizeModel;
        $this->langStringModel = new LangstringModel;
        $this->langStringValueModel = new LngstngvalueModel;
    }

    public function index()
    {
        $langs = $this->localizeModel->where('deleted_at IS NULL')->findAll();

        if (!empty($langs)) {
            return $this->response->setJSON([
                'status' => "success",
                'response' => 200,
                'data' => $langs,
            ]);
        }


        return $this->response->setJSON([
            'message' => "Empty localize",
            'status' => "failed",
            'response' => 204,
        ]);
    }

    public function viewAllLocalize()
    {
        $allLangStringValues = array();
        $appFormatRequest = $this->request->getVar('app');
        $langStrings = $this->langStringModel->findAll();

        if (!empty($langStrings)) {
            foreach ($langStrings as $singleLangString) {
                $langStringId = $singleLangString->id;
                $langStringName = $singleLangString->name;

                $singleLangStringValues = $this->langStringValueModel
                    // select columns
                    ->select('localizes.language_code, lngstngvalues.value')

                    /// join with language table
                    ->join('localizes', 'lngstngvalues.localize_id = localizes.id', 'left')

                    // joins with langstring table
                    ->join('langstrings', 'langstrings.id = lngstngvalues.string_id', 'left')

                    // set condition
                    ->where('lngstngvalues.string_id', $langStringId)

                    // get rows
                    ->findAll();

                array_walk($singleLangStringValues, function (&$val, $key) use (&$allLangStringValues, $langStringName, $appFormatRequest) {
                    // get language code and string value
                    $languageCode = $val->language_code;
                    $languageStringValue = $val->value;

                    // assigns code and value to all language strings
                    if (!$appFormatRequest) {
                        $allLangStringValues[$langStringName][$languageCode] = $languageStringValue;
                    } else {
                        $allLangStringValues[$languageCode][$langStringName] = $languageStringValue;
                    }
                });
            }
        }

        if (!empty($langStrings)) {
            return $this->response->setJSON([
                'status' => "success",
                'response' => 200,
                'data' => $allLangStringValues,
            ]);
        }
        
        return $this->response->setJSON([
            'message' => "No localize string found",
            'status' => "failed",
            'response' => 204,
        ]);
    }

    public function viewSingleLocalize(string $langCode)
    {
        $langStringValues = $this->langStringValueModel
            // select columns
            ->select('langstrings.name, lngstngvalues.value')

            // join with language table
            ->join('localizes', 'lngstngvalues.localize_id = localizes.id', 'left')

            // joins with langstring table
            ->join('langstrings', 'langstrings.id = lngstngvalues.string_id', 'left')

            // set condition to get specific localize
            ->where('localizes.language_code', $langCode)

            // set order
            ->orderBy('langstrings.id', 'DESC')

            // get all tows
            ->findAll();

        if (!empty($langStringValues)) {
            return $this->response->setJSON([
                'status' => "success",
                'response' => 200,
                'data' => $langStringValues,
            ]);
        }


        return $this->response->setJSON([
            'message' => "No localize string found",
            'status' => "failed",
            'response' => 204,
        ]);
    }
}
