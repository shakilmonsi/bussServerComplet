<?php

namespace Modules\Page\Controllers;

use App\Controllers\BaseController;
use Modules\Page\Models\AboutModel;
use Modules\Page\Models\CookeModel;
use Modules\Page\Models\PrivacyModel;
use Modules\Page\Models\TermsModel;
use Modules\Page\Models\FaqModel;
use Modules\Page\Models\FaqQuestionModel;
use App\Libraries\Rolepermission;

class Page extends BaseController
{

	protected $Viewpath;
	protected $aboutModel;
	protected $cookeModel;
	protected $privacyModel;
	protected $termModel;
	protected $faqModel;
	protected $faqQuestionModel;
	protected $db;
	
	public function __construct()
    {

        $this->Viewpath = "Modules\Page\Views";
		$this->aboutModel = new AboutModel();
		$this->cookeModel = new CookeModel();
		$this->privacyModel = new PrivacyModel();
		$this->termModel = new TermsModel();
		$this->faqModel = new FaqModel();
		$this->faqQuestionModel = new FaqQuestionModel();
		$this->db      = \Config\Database::connect();
      
    }

	public function about()
	{
		$data['about'] = $this->aboutModel->first();

        $data['module'] =    lang("Localize.page") ; 
		$data['title']  =    lang("Localize.about") ;

        $heading = lang("Localize.about").' '.lang("Localize.page");
		$data['pageheading'] = $heading;

		if (empty($data['about'])) {
			echo view($this->Viewpath.'\page/aboutnew',$data);
		}
		else
		{
			echo view($this->Viewpath.'\page/aboutedit',$data);
		}
		
	}


	public function createAbout()
	{
        $data= array(
            
            "title"=> $this->request->getVar('title'),
            "description"=> $this->request->getVar('description'),
            "sub_title"=> $this->request->getVar('sub_title'),
         );
        

        if ($this->validation->run($data, 'about')) {
            $this->aboutModel->insert($data);
            return redirect()->route('new-about')->with("success", "Data Save");
        } else {
            $data['validation'] = $this->validation;
            $data['module'] =    lang("Localize.page") ; 
		    $data['title']  =    lang("Localize.about") ;
            $heading = lang("Localize.about").' '.lang("Localize.page");
		    $data['pageheading'] = $heading;
            echo view($this->Viewpath.'\page/aboutnew', $data);
        }
    }	

	public function updateAbout($id)
	{
        $validatedata= array(
            
            "title"=> $this->request->getVar('title'),
            "description"=> $this->request->getVar('description'),
            "sub_title"=> $this->request->getVar('sub_title'),
         );
        $data= array(
            "id"=> $id,
            "title"=> $this->request->getVar('title'),
            "description"=> $this->request->getVar('description'),
            "sub_title"=> $this->request->getVar('sub_title'),
         );
        

        if ($this->validation->run($validatedata, 'about'))
		 {
            $this->aboutModel->save($data);
            return redirect()->route('new-about')->with("success", "Data Update");
         }
		 else {
			$data['about'] = $this->aboutModel->first();
            $data['validation'] = $this->validation;
            $data['module'] =    lang("Localize.page") ; 
		    $data['title']  =    lang("Localize.about") ;
            $heading = lang("Localize.about").' '.lang("Localize.page");
		    $data['pageheading'] = $heading;
            echo view($this->Viewpath.'\page/aboutnew', $data);
        }
    }





	public function cooke()
	{
		$data['cooke'] = $this->cookeModel->first();

        $data['module'] =    lang("Localize.page") ; 
		$data['title']  =    lang("Localize.cookies") ;

        $heading = lang("Localize.cookies").' '.lang("Localize.page");
		$data['pageheading'] = $heading;


		if (empty($data['cooke'])) {
			echo view($this->Viewpath.'\page/cookenew',$data);
		}
		else
		{
			echo view($this->Viewpath.'\page/cookeedit',$data);
		}
		
	}


	public function createCooke()
	{
        $data= array(
            
            "title"=> $this->request->getVar('title'),
            "description"=> $this->request->getVar('description'),
            "sub_title"=> $this->request->getVar('sub_title'),
         );
        

        if ($this->validation->run($data, 'cooke')) {
            $this->cookeModel->insert($data);
            return redirect()->route('new-cooke')->with("success", "Data Save");
        } else {
            $data['validation'] = $this->validation;

            $data['module'] =    lang("Localize.page") ; 
		    $data['title']  =    lang("Localize.cookies") ;

            $heading = lang("Localize.cookies").' '.lang("Localize.page");
		    $data['pageheading'] = $heading;

            echo view($this->Viewpath.'\page/cookenew', $data);
        }
    }	

	public function updateCooke($id)
	{
        $validatedata= array(
            
            "title"=> $this->request->getVar('title'),
            "description"=> $this->request->getVar('description'),
            "sub_title"=> $this->request->getVar('sub_title'),
         );
        $data= array(
            "id"=> $id,
            "title"=> $this->request->getVar('title'),
            "description"=> $this->request->getVar('description'),
            "sub_title"=> $this->request->getVar('sub_title'),
         );
        

        if ($this->validation->run($validatedata, 'cooke'))
		 {
            $this->cookeModel->save($data);
            return redirect()->route('new-cooke')->with("success", "Data Update");
         }
		 else
		  {
            $data['validation'] = $this->validation;
			$data['cooke'] = $this->cookeModel->first();

            $heading = lang("Localize.cookies").' '.lang("Localize.page");
		    $data['pageheading'] = $heading;

            $data['module'] =    lang("Localize.page") ; 
		    $data['title']  =    lang("Localize.cookies") ;
            echo view($this->Viewpath.'\page/cookeedit', $data);
          }
    }



	public function privacy()
	{
		$data['privacy'] = $this->privacyModel->first();

        $data['module'] =    lang("Localize.page") ; 
        $data['title']  =    lang("Localize.privacy") ;

        $heading = lang("Localize.privacy").' '.lang("Localize.page");
		$data['pageheading'] = $heading;

		if (empty($data['privacy'])) {
			echo view($this->Viewpath.'\page/privacynew',$data);
		}
		else
		{
			echo view($this->Viewpath.'\page/privacyedit',$data);
		}
		
	}


	public function createPrivacy()
	{
        $data= array(
            
            "title"=> $this->request->getVar('title'),
            "description"=> $this->request->getVar('description'),
            "sub_title"=> $this->request->getVar('sub_title'),
         );
        

        if ($this->validation->run($data, 'privacy')) {
            $this->privacyModel->insert($data);
            return redirect()->route('new-privacy')->with("success", "Data Save");
        } else {
            $data['validation'] = $this->validation;

            $data['module'] =    lang("Localize.page") ; 
            $data['title']  =    lang("Localize.privacy") ;

            $heading = lang("Localize.privacy").' '.lang("Localize.page");
            $data['pageheading'] = $heading;

            echo view($this->Viewpath.'\page/privacynew', $data);
        }
    }	

	public function updatePrivacy($id)
	{
        $validatedata= array(
            
            "title"=> $this->request->getVar('title'),
            "description"=> $this->request->getVar('description'),
            "sub_title"=> $this->request->getVar('sub_title'),
         );
        $data= array(
            "id"=> $id,
            "title"=> $this->request->getVar('title'),
            "description"=> $this->request->getVar('description'),
            "sub_title"=> $this->request->getVar('sub_title'),
         );
        

        if ($this->validation->run($validatedata, 'privacy'))
		 {
            $this->privacyModel->save($data);
            return redirect()->route('new-privacy')->with("success", "Data Update");
         }
		 else
		  {
            $data['validation'] = $this->validation;
			$data['cooke'] = $this->privacyModel->first();

            $data['module'] =    lang("Localize.page") ; 
            $data['title']  =    lang("Localize.privacy") ;

            $heading = lang("Localize.privacy").' '.lang("Localize.page");
            $data['pageheading'] = $heading;


            echo view($this->Viewpath.'\page/privacyedit', $data);
          }
    }




	public function term()
	{
		$data['term'] = $this->termModel->first();

        $data['module'] =    lang("Localize.page") ; 
        $data['title']  =    lang("Localize.terms_conditions") ;

        $heading = lang("Localize.terms_conditions").' '.lang("Localize.page");
		$data['pageheading'] = $heading;

		if (empty($data['term'])) {
			echo view($this->Viewpath.'\page/termnew',$data);
		}
		else
		{
			echo view($this->Viewpath.'\page/termedit',$data);
		}
		
	}


	public function createTerm()
	{
        $data= array(
            
            "title"=> $this->request->getVar('title'),
            "description"=> $this->request->getVar('description'),
            "sub_title"=> $this->request->getVar('sub_title'),
         );
        

        if ($this->validation->run($data, 'terms')) {
            $this->termModel->insert($data);
            return redirect()->route('new-term')->with("success", "Data Save");
        } else {
            $data['validation'] = $this->validation;
            $data['module'] =    lang("Localize.page") ; 
            $data['title']  =    lang("Localize.terms_conditions") ;

            $heading = lang("Localize.terms_conditions").' '.lang("Localize.page");
		    $data['pageheading'] = $heading;

            echo view($this->Viewpath.'\page/termnew', $data);
        }
    }	

	public function updateTerm($id)
	{
        $validatedata= array(
            
            "title"=> $this->request->getVar('title'),
            "description"=> $this->request->getVar('description'),
            "sub_title"=> $this->request->getVar('sub_title'),
         );
        $data= array(
            "id"=> $id,
            "title"=> $this->request->getVar('title'),
            "description"=> $this->request->getVar('description'),
            "sub_title"=> $this->request->getVar('sub_title'),
         );
        

        if ($this->validation->run($validatedata, 'terms'))
		 {
            $this->termModel->save($data);
            return redirect()->route('new-term')->with("success", "Data Update");
         }
		 else
		  {
            $data['validation'] = $this->validation;
			$data['term'] = $this->termModel->first();

            $heading = lang("Localize.terms_conditions").' '.lang("Localize.page");
		    $data['pageheading'] = $heading;

            $data['module'] =    lang("Localize.page") ; 
            $data['title']  =    lang("Localize.terms_conditions") ;
            echo view($this->Viewpath.'\page/termedit', $data);
          }
    }



	public function faq()
	{
		$data['faq'] = $this->faqModel->first();

        $data['module'] =    lang("Localize.page") ; 
        $data['title']  =    lang("Localize.faq") ;

        $heading = lang("Localize.faq").' '.lang("Localize.page");
		$data['pageheading'] = $heading;

		if (empty($data['faq'])) {
			echo view($this->Viewpath.'\page/faqnew',$data);
		}
		else
		{
			echo view($this->Viewpath.'\page/faqedit',$data);
		}
		
	}


	public function createFaq()
	{
        $data= array(
            
            "title"=> $this->request->getVar('title'),
            "sub_title"=> $this->request->getVar('sub_title'),
         );
        

        if ($this->validation->run($data, 'faq')) {
            $this->faqModel->insert($data);
            return redirect()->route('new-faq')->with("success", "Data Save");
        } else {
            $data['validation'] = $this->validation;

            $data['module'] =    lang("Localize.page") ; 
            $data['title']  =    lang("Localize.faq") ;

            $heading = lang("Localize.faq").' '.lang("Localize.page");
		    $data['pageheading'] = $heading;

            echo view($this->Viewpath.'\page/faqnew', $data);
        }
    }	

	public function updateFaq($id)
	{
        $validatedata= array(
            
            "title"=> $this->request->getVar('title'),
           
            "sub_title"=> $this->request->getVar('sub_title'),
         );
        $data= array(
            "id"=> $id,
            "title"=> $this->request->getVar('title'),
           	"sub_title"=> $this->request->getVar('sub_title'),
         );
        

        if ($this->validation->run($validatedata, 'faq'))
		 {
            $this->faqModel->save($data);
            return redirect()->route('new-faq')->with("success", "Data Update");
         }
		 else
		  {
            $data['validation'] = $this->validation;
			$data['faq'] = $this->faqModel->first();

            $data['module'] =    lang("Localize.page") ; 
            $data['title']  =    lang("Localize.faq") ;

            $heading = lang("Localize.faq").' '.lang("Localize.page");
		    $data['pageheading'] = $heading;

            echo view($this->Viewpath.'\page/faqedit', $data);
          }
    }


	public function new()
	{
        $data['module'] =    lang("Localize.page") ; 
        $data['title']  =    lang("Localize.add_question") ;

        $heading = lang("Localize.add_question").' '.lang("Localize.page");
		$data['pageheading'] = $heading;

		echo view($this->Viewpath.'\page/new',$data);
	}


	public function create()
	{
        $data= array(
            
            "question"=> $this->request->getVar('question'),
            "description"=> $this->request->getVar('description'),
         );
        

        if ($this->validation->run($data, 'question')) {
            $this->faqQuestionModel->insert($data);
            return redirect()->route('index-question')->with("success", "Data Save");
        } else {
            $data['validation'] = $this->validation;

            $data['module'] =    lang("Localize.page") ; 
            $data['title']  =    lang("Localize.question_list") ;

            $heading = lang("Localize.add_question").' '.lang("Localize.page");
		    $data['pageheading'] = $heading;

            echo view($this->Viewpath.'\page/new', $data);
        }
    }


	public function index()
	{
		$data['question'] = $this->faqQuestionModel->findAll();
        $data['module'] =    lang("Localize.page") ; 
        $data['title']  =    lang("Localize.question_list") ;

        $data['pageheading'] = lang("Localize.question_list");

        $rolepermissionLibrary = new Rolepermission();
        $add_data = "add_question";
        $list_data = "question_list";

        $data['add_data'] = $rolepermissionLibrary->create($add_data); 
        $data['edit_data'] = $rolepermissionLibrary->edit($list_data); 
        $data['delete_data'] = $rolepermissionLibrary->delete($list_data);


		echo view($this->Viewpath.'\page/index', $data);
	}

	public function edit($id)
	{
		$data['question'] = $this->faqQuestionModel->find($id);
        $data['module'] =    lang("Localize.page") ; 
        $data['title']  =    lang("Localize.question_list") ;

        $heading = lang("Localize.edit").' '.lang("Localize.question_list");
		$data['pageheading'] = $heading;

		echo view($this->Viewpath.'\page/edit', $data);
	}


	public function update($id)
	{
        $validatedata= array(
            
            "question"=> $this->request->getVar('question'),
            "description"=> $this->request->getVar('description'),
         );
        $data= array(
            
            "id"=> $id,
            "question"=> $this->request->getVar('question'),
            "description"=> $this->request->getVar('description'),
         );
        

        if ($this->validation->run($validatedata, 'question')) {
            $this->faqQuestionModel->save($data);
            return redirect()->route('index-question')->with("success", "Data Save");
        }
		 else
		  {
            $data['validation'] = $this->validation;
			$data['question'] = $this->faqQuestionModel->find($id);

            $heading = lang("Localize.add_question").' '.lang("Localize.page");
		    $data['pageheading'] = $heading;

            $data['module'] =    lang("Localize.page") ; 
            $data['title']  =    lang("Localize.question_list") ;
            echo view($this->Viewpath.'\page/edit', $data);
        }
    }


	public function delete($id)
	{

		$this->faqQuestionModel->delete($id);
		return redirect()->route('index-question')->with("fail","Data Deleted");
	
	}
	
	

}
