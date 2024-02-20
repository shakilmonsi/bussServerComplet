<?php

namespace Modules\Paymethod\Controllers;

use App\Controllers\BaseController;
use Modules\Paymethod\Models\PaymentGatewayModel;
use App\Libraries\Rolepermission;

class PaymentGateway extends BaseController
{
    protected $Viewpath;
    protected $paymentGatewayModel;

    public function __construct()
    {

        $this->Viewpath = "Modules\Paymethod\Views";
        $this->paymentGatewayModel = new PaymentGatewayModel();
    }


    public function new()
    {
        $data['module'] =    lang("Localize.payment_gateway");
        $data['title']  =    lang("Localize.add_payment_gateway");

        $data['pageheading'] = lang("Localize.add_payment_gateway");

        echo view($this->Viewpath . '\paymentgateway/new', $data);
    }

    public function create()
    {


        $data = array(

            "name" => $this->request->getVar('name'),
            "status" => $this->request->getVar('status'),
        );

        if ($this->validation->run($data, 'gateway')) {
            $this->paymentGatewayModel->insert($data);
            return redirect()->route('index-paymentgateway')->with("success", "Data Save");
        } else {
            $data['validation'] = $this->validation;

            $data['module'] =    lang("Localize.payment_gateway");
            $data['title']  =    lang("Localize.add_payment_gateway");

            $data['pageheading'] = lang("Localize.add_payment_gateway");

            echo view($this->Viewpath . '\paymentgateway/new', $data);
        }
    }

    public function index()
    {
        $data['paymentgateway'] = $this->paymentGatewayModel->findAll();

        $data['module'] =    lang("Localize.payment_gateway");
        $data['title']  =    lang("Localize.payment_gateway_list");
        $data['pageheading'] = lang("Localize.payment_gateway_list");

        $rolepermissionLibrary = new Rolepermission();

        $list_data = "payment_gateway_list";

        $data['read_data'] = $rolepermissionLibrary->read($list_data);
        $data['edit_data'] = $rolepermissionLibrary->edit($list_data);
        $data['delete_data'] = $rolepermissionLibrary->delete($list_data);

        echo view($this->Viewpath . '\paymentgateway\index', $data);
    }

    public function edit($id)
    {
        $data['paymentgateway'] = $this->paymentGatewayModel->find($id);

        $data['module'] = lang("Localize.payment_gateway");
        $data['title']  = lang("Localize.payment_gateway_list");

        $heading = lang("Localize.edit") . ' ' . lang("Localize.payment_gateway");
        $data['pageheading'] = $heading;

        echo view($this->Viewpath . '\paymentgateway/edit', $data);
    }

    public function update($id)
    {

        $validdata = array(
            "name" => $this->request->getVar('name'),
            "status" => $this->request->getVar('status'),
        );
        $data = array(
            "id" => $id,
            "name" => $this->request->getVar('name'),
            "status" => $this->request->getVar('status'),
        );

        if ($this->validation->run($validdata, 'gateway')) {
            $this->paymentGatewayModel->save($data);
            return redirect()->route('index-paymentgateway')->with("success", "Data Update");
        } else {
            $data['validation'] = $this->validation;
            $data['paymentgateway'] = $this->paymentGatewayModel->find($id);

            $data['module'] =    lang("Localize.payment_gateway");
            $data['title']  =    lang("Localize.payment_gateway_list");

            $heading = lang("Localize.edit") . ' ' . lang("Localize.payment_gateway");
            $data['pageheading'] = $heading;

            echo view($this->Viewpath . '\paymentgateway/edit', $data);
        }
    }
}
