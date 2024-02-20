<?php

namespace Modules\Paymethod\Controllers;

use App\Controllers\BaseController;
use Modules\Paymethod\Config\PaymethodValidation;
use Modules\Paymethod\Models\FlutterWave as ModelsFlutterWave;

class FlutterWave extends BaseController
{
    protected $Viewpath;
    protected $flutterWaveModel;

    public function __construct()
    {
        // Init Paymethod validation
        $authValidationConfig = new PaymethodValidation();
        $this->validation = \Config\Services::validation($authValidationConfig);
        $this->validation->setRuleGroup('flutterwaves');

        // Init view path
        $this->Viewpath = "Modules\Paymethod\Views";

        // Init model
        $this->flutterWaveModel = new ModelsFlutterWave();
    }

    public function new()
    {
        $data['module'] = lang("Localize.payment_gateway");
        $data['title']  = lang("Localize.flutterwavepay");
        $data['pageheading'] = lang("Localize.flutterwavepay");

        $data['flutterwave'] = $this->flutterWaveModel->first();

        if (!empty($data['flutterwave'])) {
            return view($this->Viewpath . '\flutterwave\edit', $data);
        }

        return view($this->Viewpath . '\flutterwave\new', $data);
    }


    public function create()
    {
        $data = array(
            "live_public_key" => $this->request->getVar('live_public_key'),
            "live_secret_key" => $this->request->getVar('live_secret_key'),
            "live_encryption_key" => $this->request->getVar('live_encryption_key'),
            "test_public_key" => $this->request->getVar('test_public_key'),
            "test_secret_key" => $this->request->getVar('test_secret_key'),
            "test_encryption_key" => $this->request->getVar('test_encryption_key'),
            "environment" => $this->request->getVar('environment'),
        );

        if ($this->validation->run($data, 'flutterwaves')) {
            $this->flutterWaveModel->insert($data);
            return redirect()->route('new-flutterwave')->with("success", "Data Save");
        }


        $data['module'] =    lang("Localize.payment_gateway");
        $data['title']  =    lang("Localize.flutterwavepay");
        $data['pageheading'] = lang("Localize.flutterwavepay");

        $data['validation'] = $this->validation;
        return view($this->Viewpath . '\flutterwave\new', $data);
    }

    public function update($id)
    {

        $data = array(
            "id" => $id,
            "live_public_key" => $this->request->getVar('live_public_key'),
            "live_secret_key" => $this->request->getVar('live_secret_key'),
            "live_encryption_key" => $this->request->getVar('live_encryption_key'),
            "test_public_key" => $this->request->getVar('test_public_key'),
            "test_secret_key" => $this->request->getVar('test_secret_key'),
            "test_encryption_key" => $this->request->getVar('test_encryption_key'),
            "environment" => $this->request->getVar('environment'),
        );

        if ($this->validation->run($data, 'flutterwaves')) {
            $this->flutterWaveModel->save($data);
            return redirect()->route('new-flutterwave')->with("success", "Data Update");
        }

        $data['module'] =    lang("Localize.payment_gateway");
        $data['title']  =    lang("Localize.flutterwavepay");
        $data['pageheading'] = lang("Localize.flutterwavepay");
        $data['validation'] = $this->validation;
        $data['flutterwave'] = $this->flutterWaveModel->find($id);

        return view($this->Viewpath . '\flutterwave\edit', $data);
    }
}
