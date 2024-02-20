<?php

namespace Modules\Coupon\Controllers;

use App\Controllers\BaseController;
use Modules\Coupon\Models\CouponModel;
use Modules\Trip\Models\SubtripModel;
use Modules\Location\Models\LocationModel;
use App\Libraries\Rolepermission;

class Coupon extends BaseController
{
    protected $Viewpath;
    protected $couponModel;
    protected $subtripModel;
    protected $locationModel;

    public function __construct()
    {
        $this->Viewpath = "Modules\Coupon\Views";
        $this->couponModel = new CouponModel();
        $this->subtripModel = new SubtripModel();
        $this->locationModel = new LocationModel();
    }

    public function new()
    {
        $data['tripGroups'] = $this->subtripModel
            ->select('subtrips.id')
            ->withLocations()
            ->active()
            ->getGroup();

        $data['module'] =    lang("Localize.coupon");
        $data['title']  =    lang("Localize.add_coupon");
        $data['pageheading'] = lang("Localize.add_coupon");

        echo view($this->Viewpath . '\coupon\new', $data);
    }

    public function create()
    {
        $subtrip = $this->subtripModel->where('status', 1)->findAll();
        $locationname = $this->locationModel->findAll();

        foreach ($subtrip as $skey => $subtripvalue) {
            foreach ($locationname as $lkey => $locationvalue) {

                if ($subtripvalue->pick_location_id == $locationvalue->id) {
                    $subtrip[$skey]->picklocation = $locationvalue->name;
                }

                if ($subtripvalue->drop_location_id == $locationvalue->id) {
                    $subtrip[$skey]->droplocation = $locationvalue->name;
                }
            }
        }

        $couponData = array(
            "code" => $this->request->getVar('code'),
            "subtrip_id" => $this->request->getVar('subtrip_id'),
            "start_date" => $this->request->getVar('start_date'),
            "end_date" => $this->request->getVar('end_date'),
            "discount" => $this->request->getVar('discount'),
            "condition" => $this->request->getVar('condition'),
        );

        if ($this->validation->run($couponData, 'coupon')) {   
            $this->couponModel->insert($couponData);
            return redirect()->route('index-coupon')->with("success", "Data Save");
        }

        return redirect()->back()->withInput()->with('fail', $this->validation->listErrors());
    }

    public function index()
    {
        $subtrip = $this->subtripModel->withDeleted()->where('status', 1)->findAll();
        $locationname = $this->locationModel->withDeleted()->findAll();

        foreach ($subtrip as $skey => $subtripvalue) {
            foreach ($locationname as $lkey => $locationvalue) {

                if ($subtripvalue->pick_location_id == $locationvalue->id) {

                    $subtrip[$skey]->picklocation = $locationvalue->name;
                }
                if ($subtripvalue->drop_location_id == $locationvalue->id) {
                    $subtrip[$skey]->droplocation = $locationvalue->name;
                }
            }
        }

        $subtirpName = $subtrip;
        $coupon_detail = $this->couponModel->findAll();

        foreach ($coupon_detail as $ckey => $cvalue) {

            foreach ($subtirpName as $skey => $svalue) {

                if ($cvalue->subtrip_id == $svalue->id) {

                    $coupon_detail[$ckey]->subtrip_name = $svalue->picklocation . '--' . $svalue->droplocation;
                }
            }
        }

        $data['module'] =    lang("Localize.coupon");
        $data['title']  =    lang("Localize.coupon_list");
        $data['coupon'] = $coupon_detail;
        $data['pageheading'] = lang("Localize.coupon_list");

        $rolepermissionLibrary = new Rolepermission();
        $add_data = "add_coupon";
        $list_data = "coupon_list";

        $data['add_data'] = $rolepermissionLibrary->create($add_data);
        $data['edit_data'] = $rolepermissionLibrary->edit($list_data);
        $data['delete_data'] = $rolepermissionLibrary->delete($list_data);

        return view($this->Viewpath . '\coupon/index', $data);
    }

    public function edit($id)
    {
        $subtrip = $this->subtripModel
            ->select('subtrips.id, l1.name AS picklocation, l2.name AS droplocation')
            ->join('locations l1', 'subtrips.pick_location_id = l1.id')
            ->join('locations l2', 'subtrips.drop_location_id = l2.id')
            ->where('l1.deleted_at IS NULL')
            ->where('l2.deleted_at IS NULL')
            ->where('status', 1)
            ->findAll();

        $data['subtrip'] = $subtrip;
        $data['coupon'] = $this->couponModel->find($id);

        $data['module'] =    lang("Localize.coupon");
        $data['title']  =    lang("Localize.coupon_list");

        $heading = lang("Localize.edit") . ' ' . lang("Localize.coupon");
        $data['pageheading'] = $heading;

        return view($this->Viewpath . '\coupon/edit', $data);
    }

    public function update($id)
    {
        $couponData = array(
            "id" => $id,
            "code" => $this->request->getVar('code'),
            "subtrip_id" => $this->request->getVar('subtrip_id'),
            "start_date" => $this->request->getVar('start_date'),
            "end_date" => $this->request->getVar('end_date'),
            "discount" => $this->request->getVar('discount'),
            "condition" => $this->request->getVar('condition'),
        );

        if ($this->validation->run($couponData, 'coupon')) {
            $this->couponModel->save($couponData);
            return redirect()->route('index-coupon')->with("success", "Data Update");
        }

        return redirect()->back()->withInput()->with('fail', $this->validation->listErrors());
    }

    public function delete($id)
    {
        $this->couponModel->delete($id);
        return redirect()->route('index-coupon')->with("fail", "Data Deleted");
    }
}
