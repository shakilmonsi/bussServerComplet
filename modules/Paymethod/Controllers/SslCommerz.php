<?php

namespace Modules\Paymethod\Controllers;

use App\Controllers\BaseController;
use Modules\Paymethod\Config\PaymethodValidation;
use Modules\Paymethod\Models\SslCommerzModel;

class SslCommerz extends BaseController
{
    protected $Viewpath;
    protected $sslModel;

    public function __construct()
    {
        // Init Paymethod validation
        $authValidationConfig = new PaymethodValidation();
        $this->validation = \Config\Services::validation($authValidationConfig);
        $this->validation->setRuleGroup('sslcommerz');

        // Init view path
        $this->Viewpath = "Modules\Paymethod\Views";

        // Init model
        $this->sslModel = new SslCommerzModel();
    }

    public function new()
    {
        $data['module'] = lang("Localize.payment_gateway");
        $data['title']  = "SSL Commerz";
        $data['pageheading'] = "SSL Commerz";

        $data['sslcommerz'] = $this->sslModel->first();

        if (!empty($data['sslcommerz'])) {
            return view($this->Viewpath . '\sslcommerz\edit', $data);
        }

        return view($this->Viewpath . '\sslcommerz\new', $data);
    }


    public function create()
    {
        $data = array(
            "ssl_store_id" => $this->request->getVar('store_id'),
            "ssl_store_password" => $this->request->getVar('store_password'),
            "environment" => $this->request->getVar('environment')
        );

        if ($this->validation->run($data, 'sslcommerz')) {
            $this->sslModel->insert($data);
            return redirect()->route('new-sslcommerz')->with("success", "Data Save");
        } else {
            $data['validation'] = $this->validation;

            $data['module'] = lang("Localize.payment_gateway");
            $data['title']  = "SSL Commerz";
            $data['pageheading'] = "SSL Commerz";
            echo view($this->Viewpath . '\sslcommerz\new', $data);
        }
    }

    public function update($id)
    {
        $data = array(
            "id" => $id,
            "ssl_store_id" => $this->request->getVar('store_id'),
            "ssl_store_password" => $this->request->getVar('store_password'),
            "environment" => $this->request->getVar('environment')
        );

        if ($this->validation->run($data, 'sslcommerz')) {
            $this->sslModel->save($data);
            return redirect()->route('new-sslcommerz')->with("success", "Data Update");
        } else {
            $data['module'] = lang("Localize.payment_gateway");

            $data['title']  = "SSL Commerz";
            $data['pageheading'] = "SSL Commerz";

            $data['validation'] = $this->validation;
            $data['sslcommerz'] = $this->sslModel->find($id);
            echo view($this->Viewpath . '\sslcommerz\edit', $data);
        }
    }
}
