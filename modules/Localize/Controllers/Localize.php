<?php

namespace Modules\Localize\Controllers;

use App\Controllers\BaseController;
use App\Libraries\Folder;
use Modules\Localize\Models\LocalizeModel;
use Modules\Localize\Models\LangstringModel;
use Modules\Localize\Models\LngstngvalueModel;

use Modules\Localize\Models\LanguageModel;

use App\Libraries\Rolepermission;

class Localize extends BaseController
{

	protected $Viewpath;
	protected $localizeModel;
	
	protected $langstringModel;
	protected $langstringvalueModel;

	protected $languageModel;

	
	public function __construct()
    {

        $this->Viewpath = "Modules\Localize\Views";
		$this->localizeModel = new LocalizeModel();

		$this->langstringModel = new LangstringModel();
		$this->langstringvalueModel = new LngstngvalueModel();

		$this->languageModel = new LanguageModel();
      
    }

	public function new()
	{
		$data['language'] = $this->languageModel->findAll();

		$data['module'] =    lang("Localize.language") ; 
		$data['title']  =    lang("Localize.language_add") ;

		$data['pageheading'] = lang("Localize.language_add");
		
		echo view($this->Viewpath.'\localize/new',$data);
	}

	public function index()
	{
		$data['language'] = $this->localizeModel->findAll();

		$data['module'] =    lang("Localize.language") ; 
		$data['title']  =    lang("Localize.language_list") ;

		$data['pageheading'] = lang("Localize.language_list");

		$rolepermissionLibrary = new Rolepermission();
		
        $add_data = "language_add";
        $list_data = "language_list";

        $data['add_data'] = $rolepermissionLibrary->create($add_data); 
        $data['edit_data'] = $rolepermissionLibrary->edit($list_data); 
        $data['delete_data'] = $rolepermissionLibrary->delete($list_data);

		
		echo view($this->Viewpath.'\localize/index',$data);
	}

	public function create()
	{
		
		$languageFolder = $this->request->getVar('language_code');

		$checkLanguage = $this->localizeModel->where('language_code',$languageFolder)->findAll();

		if (!empty($checkLanguage)) {

			return redirect()->back()->with("fail","This Language is already added");
		}


		$folder = new Folder();
		

		$data= array(
			
			"display_name"=> $this->request->getVar('name'),
			"language_code"=> $this->request->getVar('language_code'),
		);

		if($this->validation->run($data, 'language'))
		{
			$lngStrValue = array();
			$localizeStringList = $this->langstringModel->orderBy('id', 'DESC')->findAll();

			if (empty($localizeStringList)) {
				return redirect()->back()->with("fail","Please Add String First");
			}
			$storedata= array(
				"name"=> $languageFolder,
				"display_name"=> $this->request->getVar('name'),
				"language_code"=> $this->request->getVar('language_code'),
			);
			
			$LangFolder = $folder->folderCheck($languageFolder);

			if ($LangFolder) {

				$localizeDetail = $this->localizeModel->insert($storedata);

				foreach ($localizeStringList as $key => $value) {
					
					$lngStrValue[$key] = array(
						"string_id"=> $value->id,
						"localize_id"=> $localizeDetail,
						
					);
				}

				$this->langstringvalueModel->insertBatch($lngStrValue);

			}			

			


			return redirect()->route('index-language')->with("success","Data Save");
			
		}
		
		
		else
		{
			$data['validation'] = $this->validation;
			$data['language'] = $this->languageModel->findAll();

			$data['module'] =    lang("Localize.language") ; 
			$data['title']  =    lang("Localize.language_list") ;

			$data['pageheading'] = lang("Localize.language_add");

			echo view($this->Viewpath.'\localize/new',$data);

		}
		
	}


	public function edit($id)
	{
		$data['language'] = $this->localizeModel->find($id);
		$data['languagedata'] = $this->languageModel->findAll();

		$data['module'] =    lang("Localize.language") ; 
		$data['title']  =    lang("Localize.language_list") ;

		$heading = lang("Localize.edit").' '.lang("Localize.language");
		$data['pageheading'] = $heading;

		echo view($this->Viewpath.'\localize/edit',$data);
	}



	public function update($id)
	{
		$oldFolder = $this->localizeModel->find($id);
		$oldFolderName = $oldFolder->language_code;
		$NewFolderName = $this->request->getVar('language_code');
		$folder = new Folder();

		$checkLanguage = $this->localizeModel->where('language_code',$NewFolderName)->findAll();

		if (!empty($checkLanguage)) {

			return redirect()->back()->with("fail","This Language is already added");
		}
		

		$validdata= array(
			"display_name"=> $this->request->getVar('name'),
			"language_code"=> $this->request->getVar('language_code'),
		);

		$data= array(
			"id"=> $id,
			"name"=> $this->request->getVar('language_code'),
			"display_name"=> $this->request->getVar('name'),
			"language_code"=> $this->request->getVar('language_code'),
			);

		if($this->validation->run($validdata, 'language'))
		{

			$this->localizeModel->save($data);
			$folder->folderNameEdit($oldFolderName,$NewFolderName);

			return redirect()->route('index-language')->with("success","Data Update");
		}
		
		else
		{
			$data['validation'] = $this->validation;
			$data['language'] = $this->localizeModel->find($id);
			$data['languagedata'] = $this->languageModel->findAll();

			$data['module'] =    lang("Localize.language") ; 
			$data['title']  =    lang("Localize.language_list") ;

			$heading = lang("Localize.edit").' '.lang("Localize.language");
			$data['pageheading'] = $heading;

			echo view($this->Viewpath.'\localize/edit',$data);

		}
	}


	public function delete($id)
	{

		$this->localizeModel->delete($id);
		return redirect()->route('index-language')->with("fail","Data Deleted");
	
	}
}
