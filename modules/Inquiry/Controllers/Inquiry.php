<?php

namespace Modules\Inquiry\Controllers;

use App\Controllers\BaseController;
use Modules\Inquiry\Models\InquiryModle;
use App\Libraries\Rolepermission;

class Inquiry extends BaseController
{
	protected $inquiryModel;
	public function __construct()
    {

		$this->Viewpath = "Modules\Inquiry\Views";
        $this->inquiryModel = new InquiryModle();
    }

	public function index()
	{
		$data['inquiry'] = $this->inquiryModel->orderBy('id', 'DESC')->findAll();

		$data['module'] =    lang("Localize.inquiry") ; 
		$data['title']  =    lang("Localize.inquiry_list") ;

		$data['pageheading'] = lang("Localize.inquiry_list");

		$rolepermissionLibrary = new Rolepermission();
       
        $list_data = "inquiry_list";

        $data['read_data'] = $rolepermissionLibrary->read($list_data); 
        
        $data['delete_data'] = $rolepermissionLibrary->delete($list_data);

		echo view($this->Viewpath.'\inquiry/index',$data);
	}

	public function show($id)
	{
		$data['inquiry'] = $this->inquiryModel->find($id);

		$data['module'] =    lang("Localize.inquiry") ; 
		$data['title']  =    lang("Localize.inquiry_list") ;

		$data['pageheading'] = lang("Localize.inquiry");

		echo view($this->Viewpath.'\inquiry/show',$data);
	}

	public function delete($id)
	{

		$this->inquiryModel->delete($id);
		return redirect()->route('index-inquiry')->with("fail","Data Deleted");
	
	}
}
