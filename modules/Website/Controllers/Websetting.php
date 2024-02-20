<?php

namespace Modules\Website\Controllers;

use App\Controllers\BaseController;
use App\Controllers\DeleteSoftwareSettingsController;
use App\Libraries\DataBaseBackup;
use Modules\Website\Models\WebsettingModel;
use Modules\Localize\Models\LocalizeModel;

class Websetting extends BaseController
{
    protected $Viewpath;
    protected $webSettingModel;
    protected $localizeModel;
    protected $db;

    public function __construct()
    {

        $this->Viewpath = "Modules\Website\Views";
        $this->webSettingModel = new WebsettingModel();
        $this->localizeModel = new LocalizeModel();

        $this->db = \Config\Database::connect();
    }


    public function new()
    {
        $data['webseeting']    = $this->webSettingModel->first();

        $data['module'] =    lang("Localize.website_setting");
        $data['title']  =    lang("Localize.webconfig");

        $data['pageheading'] = lang("Localize.website_setting");

        if (empty($data['webseeting'])) {
            $builder = $this->db->table('fonts');
            $query = $builder->get();
            $data['font'] = $query->getResult();
            $data['localize'] = $this->localizeModel->findAll();

            $countrybuilder = $this->db->table('country');
            $cquery = $countrybuilder->get();
            $data['country'] = $cquery->getResult();

            $timezonebuilder = $this->db->table('timezone');
            $tquery = $timezonebuilder->get();
            $data['timezone'] = $tquery->getResult();

            $currencybuilder = $this->db->table('currencies');
            $curencyquery = $currencybuilder->get();
            $data['currency'] = $curencyquery->getResult();

            echo view($this->Viewpath . '\websetting/new', $data);
        } else {
            $builder = $this->db->table('fonts');
            $query = $builder->get();
            $data['font'] = $query->getResult();
            $data['localize'] = $this->localizeModel->findAll();

            $countrybuilder = $this->db->table('country');
            $cquery = $countrybuilder->get();
            $data['country'] = $cquery->getResult();

            $timezonebuilder = $this->db->table('timezone');
            $tquery = $timezonebuilder->get();
            $data['timezone'] = $tquery->getResult();


            $currencybuilder = $this->db->table('currencies');
            $curencyquery = $currencybuilder->get();
            $data['currency'] = $curencyquery->getResult();

            echo view($this->Viewpath . '\websetting/edit', $data);
        }
    }

    public function create()
    {

        $path = 'image/websetting';

        $headerlogo = '';
        $footerlogo = '';
        $favicone = '';

        $logoheader =  $this->request->getFile('headerlogo');
        $logofooter =  $this->request->getFile('footerlogo');
        $logofav =  $this->request->getFile('favicon');

        if ($logoheader->isValid() && !$logoheader->hasMoved()) {
            $headerlogo     = $this->imgaeCheck($logoheader, $path);
        }

        if ($logofooter->isValid() && !$logofooter->hasMoved()) {
            $footerlogo     = $this->imgaeCheck($logofooter, $path);
        }

        if ($logofav->isValid() && !$logofav->hasMoved()) {
            $favicone     = $this->imgaeCheck($logofav, $path);
        }


        $validatedata = array(
            "localize_name" => $this->request->getVar('localize_name'),
            "logotext" => $this->request->getVar('logotext'),
            "apptitle" => $this->request->getVar('apptitle'),
            "copyright" => $this->request->getVar('copyright'),
            "tax_type" => $this->request->getVar('tax_type'),
            "max_ticket" => $this->request->getVar('max_ticket'),
            "currency" => $this->request->getVar('currency'),
        );


        $data = array(
            "localize_name" => $this->request->getVar('localize_name'),
            "headerlogo" => $headerlogo,
            "favicon" => $favicone,
            "footerlogo" => $footerlogo,
            "logotext" => $this->request->getVar('logotext'),
            "apptitle" => $this->request->getVar('apptitle'),
            "copyright" => $this->request->getVar('copyright'),
            "headercolor" => $this->request->getVar('headercolor'),
            "footercolor" => $this->request->getVar('footercolor'),
            "bottomfootercolor" => $this->request->getVar('bottomfootercolor'),
            "buttoncolor" => $this->request->getVar('buttoncolor'),
            "buttoncolorhover" => $this->request->getVar('buttoncolorhover'),
            "buttontextcolor" => $this->request->getVar('buttontextcolor'),
            "fontfamely" => $this->request->getVar('fontfamely'),
            "tax_type" => $this->request->getVar('tax_type'),

            "timezone" => $this->request->getVar('timezone'),
            "country" => $this->request->getVar('country'),
            "max_ticket" => $this->request->getVar('max_ticket'),

            "currency" => $this->request->getVar('currency'),
        );


        if ($this->validation->run($validatedata, 'websetting')) {

            $this->webSettingModel->insert($data);
            return redirect()->route('new-websetting')->with("success", "Data Save");
        } else {
            $data['validation'] = $this->validation;
            $builder = $this->db->table('fonts');
            $query = $builder->get();
            $data['font'] = $query->getResult();
            $data['localize'] = $this->localizeModel->findAll();

            $countrybuilder = $this->db->table('country');
            $cquery = $countrybuilder->get();
            $data['country'] = $cquery->getResult();

            $timezonebuilder = $this->db->table('timezone');
            $tquery = $timezonebuilder->get();
            $data['timezone'] = $tquery->getResult();

            $data['module'] =    lang("Localize.website_setting");
            $data['title']  =    lang("Localize.webconfig");

            $data['pageheading'] = lang("Localize.website_setting");

            echo view($this->Viewpath . '\websetting/new', $data);
        }
    }

    public function index()
    {
        //
    }

    public function update($id)
    {


        $path = 'image/websetting';

        $headerlogo = '';
        $footerlogo = '';
        $favicone = '';

        $logoheader =  $this->request->getFile('headerlogo');
        $logofooter =  $this->request->getFile('footerlogo');
        $logofav =  $this->request->getFile('favicon');

        if ($logoheader->isValid() && !$logoheader->hasMoved()) {
            $headerlogo     = $this->imgaeCheck($logoheader, $path);
        } else {
            $headerlogo = $this->request->getVar('oldlogoheader');
        }

        if ($logofooter->isValid() && !$logofooter->hasMoved()) {
            $footerlogo     = $this->imgaeCheck($logofooter, $path);
        } else {
            $footerlogo = $this->request->getVar('oldlogofooter');
        }

        if ($logofav->isValid() && !$logofav->hasMoved()) {
            $favicone     = $this->imgaeCheck($logofav, $path);
        } else {
            $favicone = $this->request->getVar('oldlogofavicon');
        }

        $validatedata = array(
            "localize_name" => $this->request->getVar('localize_name'),
            "logotext" => $this->request->getVar('logotext'),
            "apptitle" => $this->request->getVar('apptitle'),
            "copyright" => $this->request->getVar('copyright'),
            "tax_type" => $this->request->getVar('tax_type'),
            "max_ticket" => $this->request->getVar('max_ticket'),
            "currency" => $this->request->getVar('currency'),
        );


        $data = array(

            "id" => $id,
            "localize_name" => $this->request->getVar('localize_name'),
            "headerlogo" => $headerlogo,
            "favicon" => $favicone,
            "footerlogo" => $footerlogo,
            "logotext" => $this->request->getVar('logotext'),
            "apptitle" => $this->request->getVar('apptitle'),
            "copyright" => $this->request->getVar('copyright'),
            "headercolor" => $this->request->getVar('headercolor'),
            "footercolor" => $this->request->getVar('footercolor'),
            "bottomfootercolor" => $this->request->getVar('bottomfootercolor'),
            "buttoncolor" => $this->request->getVar('buttoncolor'),
            "buttoncolorhover" => $this->request->getVar('buttoncolorhover'),
            "buttontextcolor" => $this->request->getVar('buttontextcolor'),
            "fontfamely" => $this->request->getVar('fontfamely'),
            "tax_type" => $this->request->getVar('tax_type'),

            "timezone" => $this->request->getVar('timezone'),
            "country" => $this->request->getVar('country'),
            "max_ticket" => $this->request->getVar('max_ticket'),
            "currency" => $this->request->getVar('currency'),
        );

        if ($this->validation->run($validatedata, 'websetting')) {


            $this->webSettingModel->save($data);

            $this->session->remove('fontfamily');

            $addsession['fontfamily'] = $this->request->getVar('fontfamely');
            $addsession['lang'] = $this->request->getVar('localize_name');

            $this->session->set($addsession);

            return redirect()->route('new-websetting')->with("success", "Data Update");
        } else {
            $data['webseeting']    = $this->webSettingModel->first();
            $builder = $this->db->table('fonts');
            $query = $builder->get();
            $data['font'] = $query->getResult();
            $data['localize'] = $this->localizeModel->findAll();

            $countrybuilder = $this->db->table('country');
            $cquery = $countrybuilder->get();
            $data['country'] = $cquery->getResult();

            $timezonebuilder = $this->db->table('timezone');
            $tquery = $timezonebuilder->get();
            $data['timezone'] = $tquery->getResult();

            $data['module'] =    lang("Localize.website_setting");
            $data['title']  =    lang("Localize.webconfig");

            $data['pageheading'] = lang("Localize.website_setting");

            echo view($this->Viewpath . '\websetting/edit', $data);
        }
    }

    public function imgaeCheck($image, $path)
    {
        $newName = $image->getRandomName();
        $path = $path;
        $image->move($path, $newName);
        return $path . '/' . $newName;
    }

    public function factoryReset()
    {
        $pageheading = lang('Localize.factory_reset');
        $session = \Config\Services::session();
        return view($this->Viewpath . '\factory-reset\index', compact('session', 'pageheading'));
    }

    public function processFactoryReset()
    {
        $password = $this->request->getVar('password');
        $modules = $this->request->getVar('modules');
        $delete = new DeleteSoftwareSettingsController;
        $conditionArray = array('user' => 'users.role_id != 1');

        if (password_verify($password, $this->session->get('password'))) {
            try {
                foreach ($modules as $module) {
                    $condition = $conditionArray[$module] ?? '1';
                    $delete->truncate($module, $condition);
                }
            } catch (\Throwable $e) {
                // Return error response
                return $this->response->setJSON([
                    'success' => false,
                    'code' => 500,
                    'message' => $e->getMessage()
                ]);
            }

            return $this->response->setJSON([
                'success' => true,
                'code' => 200,
                'message' => 'Successfully truncated'
            ]);
        }

        return $this->response->setJSON([
            'success' => false,
            'code' => 401,
            'message' => 'Incorrect password'
        ]);
    }

    public function dataBaseBackUp()
    {
        helper('filesystem');


        $dataBackup = new DataBaseBackup();

        $fileDownLoad =  $dataBackup->dataBackup();
        $filename =  $fileDownLoad;

        $fileDownLoad =  base_url() . "/public/DB/" . $fileDownLoad;

        $data = file_get_contents($fileDownLoad);

        return    $this->response->download($fileDownLoad, $data)->setFileName($filename);
    }
}
