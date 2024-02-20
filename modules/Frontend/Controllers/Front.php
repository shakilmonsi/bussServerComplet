<?php

namespace Modules\Frontend\Controllers;

use App\Controllers\BaseController;
use App\Libraries\Rolepermission;

class Front extends BaseController
{

	protected $db;
	private $Viewpath;
    public function __construct()
    {
        $this->db = \Config\Database::connect();
		$this->Viewpath = "Modules\Frontend\Views";
    }


// Section One

	public function editSecOne()
	{
		$builder =$this->db->table('section_one_home');
		$query   = $builder->get(); 
		$data['secOne'] = $query->getRow();

		$data['module'] =    lang("Localize.frontend") ; 
		$data['title']  =    lang("Localize.sectionone") ;

		$data['pageheading'] = lang("Localize.sectionone");

		echo view($this->Viewpath.'\sectionone/edit',$data);
		
	}

	public function createSecOne()
	{

		$path = 'image/frontend';
		$seconeimage = $this->request->getFile('image');
		
		$image = null;
			if ($seconeimage->isValid() && ! $seconeimage->hasMoved() ) {
				$image	 = $this->imgaeCheck($seconeimage,$path);
			}
			else
			{
				$image = $this->request->getVar('seconeimagpath');
			}

			$data= array(

				"title"=> $this->request->getVar('title'),
				"sub_title"=> $this->request->getVar('sub_title'),
				"image"=> $image,
				"button_text"=> $this->request->getVar('button_text'),

			);

		if($this->validation->run($data, 'secone'))
		{
			
			$builder =$this->db->table('section_one_home');
			$query   = $builder->get(); 
			$testData = $query->getRow();
		
				if ($testData == null) {
					$data= array(

						"title"=> $this->request->getVar('title'),
						"sub_title"=> $this->request->getVar('sub_title'),
						"image"=> $image,
						"button_text"=> $this->request->getVar('button_text'),

					);

				} else {

					$data= array(

						"id"=> $testData->id,
						"title"=> $this->request->getVar('title'),
						"sub_title"=> $this->request->getVar('sub_title'),
						"image"=> $image,
						"button_text"=> $this->request->getVar('button_text'),
						
					);
					
				}
				
				$builder->replace($data);
				return redirect()->route('edit-section-one')->with("success","Data Update");

		}
		
		
		else
		{
			$builder =$this->db->table('section_one_home');
			$query   = $builder->get(); 
			$data['secOne'] = $query->getRow();
			$data['validation'] = $this->validation;

			$data['module'] =    lang("Localize.frontend") ; 
			$data['title']  =    lang("Localize.sectionone") ;
			$data['pageheading'] = lang("Localize.sectionone");
			echo view($this->Viewpath.'\sectionone/edit',$data);

		}

		
	}

// Section One

// Section Two

	public function editSecTwo()
	{
		$builder =$this->db->table('section_two_work_flow');
		$query   = $builder->get(); 
		$data['secTwo'] = $query->getRow();

	
		$data['module'] =    lang("Localize.frontend") ; 
		$data['title']  =    lang("Localize.sectiontwo_two") ;

		$data['pageheading'] = lang("Localize.sectiontwo");

		echo view($this->Viewpath.'\sectiontwo/edit',$data);
		
	}

	public function createSecTwo()
	{
		$data= array(

			"title"=> $this->request->getVar('title'),
			"sub_title"=> $this->request->getVar('sub_title'),
		);

		if($this->validation->run($data, 'sectwo'))
		{
			$builder =$this->db->table('section_two_work_flow');
			$query   = $builder->get(); 
			$testData = $query->getRow();
		
				if ($testData == null) {
					$data= array(

						"title"=> $this->request->getVar('title'),
						"sub_title"=> $this->request->getVar('sub_title'),
					
					);

				} else {

					$data= array(

						"id"=> $testData->id,
						"title"=> $this->request->getVar('title'),
						"sub_title"=> $this->request->getVar('sub_title'),
						
					);
					
				}
				
				$builder->replace($data);
				return redirect()->route('edit-section-two')->with("success","Data Update");

		}

		else
		{

			$builder =$this->db->table('section_two_work_flow');
			$query   = $builder->get(); 
			$data['secTwo'] = $query->getRow();
			$data['validation'] = $this->validation;

			$data['module'] =    lang("Localize.frontend") ; 
			$data['title']  =    lang("Localize.how_works_list") ;
			$data['pageheading'] = lang("Localize.sectiontwo");

			echo view($this->Viewpath.'\sectiontwo/edit',$data);

		}

		
		
	}



	public function editSecTwoDetailCreate()
	{
		$howitworkimg = $this->request->getFile('image');
		$path = 'image/frontend';
		
		
			if ($howitworkimg->isValid() && ! $howitworkimg->hasMoved() ) {
				$image	 = $this->imgaeCheck($howitworkimg,$path);
			}
			else{
				return redirect()->route('index-section-two-deatil')->with("fail","Image Required");
			}
		
			$data= array(

				"title"=> $this->request->getVar('title'),
				"description"=> $this->request->getVar('description'),
				"image"=> $image,
				"button_text"=> $this->request->getVar('button_text'),

			);

			if($this->validation->run($data, 'sectwodetail'))
			{
				
				$builder =$this->db->table('section_two_detail');
				$builder->insert($data);
				return redirect()->route('index-section-two-deatil')->with("success","Data Update");
			}


			else
			{
				$data['validation'] = $this->validation;

				$data['module'] =    lang("Localize.frontend") ; 
				$data['title']  =    lang("Localize.how_works_list") ;
				$data['pageheading'] = lang("Localize.sectiontwo");
				
				echo view($this->Viewpath.'\sectiontwo/howitwork/new',$data);
			}

		
	}


	public function editSecTwodetailnew()
	{	
		$data['module'] =    lang("Localize.frontend") ; 
		$data['title']  =    lang("Localize.how_works_list") ;

		$heading = lang("Localize.sectiontwo").' '.lang("Localize.how_works_list");
		$data['pageheading'] = $heading;

		echo view($this->Viewpath.'\sectiontwo/howitwork/new',$data);
	}


	public function editSecTwoDetailIndex()
	{
		$builder =$this->db->table('section_two_detail');
		$query   = $builder->get(); 
		$data['secTwoWork'] = $query->getResult();

		$data['module'] =    lang("Localize.frontend") ; 
		$data['title']  =    lang("Localize.how_works_list") ;

		$heading = lang("Localize.sectiontwo").' '.lang("Localize.how_works_list");
		$data['pageheading'] = $heading;

		$rolepermissionLibrary = new Rolepermission();
        $add_data = "how_works_add";
        $list_data = "how_works_list";

        $data['add_data'] = $rolepermissionLibrary->create($add_data); 
        $data['edit_data'] = $rolepermissionLibrary->edit($list_data); 
        $data['delete_data'] = $rolepermissionLibrary->delete($list_data);


		echo view($this->Viewpath.'\sectiontwo/howitwork/index',$data);
		
	}



	public function editSecTwoDetailDelete($id)
	{


		$builder =$this->db->table('section_two_detail');
		$query   = $builder->where('id',$id)->get(); 
		$imgpath = $query->getRow();

		$builder->where('id', $id)->delete();
		if (file_exists($imgpath->image)) {
			unlink($imgpath->image);
		}
		
		return redirect()->route('index-section-two-deatil')->with("fail","Data Deleted");
		
	}



	public function editSecTwoDetailEdit($id)
	{
		$builder =$this->db->table('section_two_detail');
		$query   = $builder->where('id',$id)->get(); 
		$data['secTwoWorkdetail'] = $query->getRow();

		$data['module'] =    lang("Localize.frontend") ; 
		$data['title']  =    lang("Localize.how_works_list") ;

		$heading = lang("Localize.sectiontwo").' '.lang("Localize.how_works_list");
		$data['pageheading'] = $heading;


		echo view($this->Viewpath.'\sectiontwo/howitwork/edit',$data);
		
	}



	public function editSecTwoDetailUpdate($id)
	{

		$howitworkimg = $this->request->getFile('image');
		$path = 'image/frontend';
		
		
			if ($howitworkimg->isValid() && ! $howitworkimg->hasMoved() ) {
				$image	 = $this->imgaeCheck($howitworkimg,$path);
			}
			else{
				$image	 = $this->request->getVar('sectewhowitimg');
			}

			$data= array(

				"title"=> $this->request->getVar('title'),
				"description"=> $this->request->getVar('description'),
				"image"=> $image,
				"button_text"=> $this->request->getVar('button_text'),

			);

			$updata= array(
				"id"=> $id,
				"title"=> $this->request->getVar('title'),
				"description"=> $this->request->getVar('description'),
				"image"=> $image,
				"button_text"=> $this->request->getVar('button_text'),

			);



			if($this->validation->run($data, 'sectwodetail'))
			{

				
				$builder =$this->db->table('section_two_detail');
				$builder->replace($updata);
				return redirect()->route('index-section-two-deatil')->with("success","Data Update");
			}


			else
			{
				$data['validation'] = $this->validation;
				
				$builder =$this->db->table('section_two_detail');
				$query   = $builder->where('id',$id)->get(); 
				$data['secTwoWorkdetail'] = $query->getRow();

				$data['module'] =    lang("Localize.frontend") ; 
				$data['title']  =    lang("Localize.how_works_list") ;

				$heading = lang("Localize.sectiontwo").' '.lang("Localize.how_works_list");
				$data['pageheading'] = $heading;

				echo view($this->Viewpath.'\sectiontwo/howitwork/edit',$data);
			}


	}

// Section Two

// Section Three

public function editSecThree()
{
	$builder =$this->db->table('section_three_heading');
	$query   = $builder->get(); 
	$data['secThree'] = $query->getRow();

	$data['module'] =    lang("Localize.frontend") ; 
	$data['title']  =    lang("Localize.sectionthree") ;

	$data['pageheading'] = lang("Localize.sectionthree");

	echo view($this->Viewpath.'\sectionthree/edit',$data);
	
}


public function createSecThree()
	{
		$data= array(

			"title"=> $this->request->getVar('title'),
			"sub_title"=> $this->request->getVar('sub_title'),
		);

		if($this->validation->run($data, 'secthree'))
		{
			$builder =$this->db->table('section_three_heading');
			$query   = $builder->get(); 
			$testData = $query->getRow();
		
				if ($testData == null) {
					$data= array(

						"title"=> $this->request->getVar('title'),
						"sub_title"=> $this->request->getVar('sub_title'),
					
					);

				} else {

					$data= array(

						"id"=> $testData->id,
						"title"=> $this->request->getVar('title'),
						"sub_title"=> $this->request->getVar('sub_title'),
						
					);
					
				}
				
				$builder->replace($data);
				return redirect()->route('edit-section-three')->with("success","Data Update");

		}

		else
		{

			$builder =$this->db->table('section_three_heading');
			$query   = $builder->get(); 
			$data['secThree'] = $query->getRow();
			$data['validation'] = $this->validation;

			$data['module'] =    lang("Localize.frontend") ; 
			$data['title']  =    lang("Localize.sectionthree") ;

			$data['pageheading'] = lang("Localize.sectionthree");

			echo view($this->Viewpath.'\sectionthree/edit',$data);

		}

		
		
	}

// Section Three


// Section Four
	public function editsecFour()
	{
		$builder =$this->db->table('section_four_comment');
		
		$query   = $builder->get(); 
		$data['secFour'] = $query->getRow();

		$data['module'] =    lang("Localize.frontend") ; 
		$data['title']  =    lang("Localize.sectionfour_four") ;

		$data['pageheading'] = lang("Localize.sectionfour_four");

		echo view($this->Viewpath.'\sectionfour/edit',$data);
		
	}

	public function createSecFour()
	{
		$data= array(

			"title"=> $this->request->getVar('title'),
			"sub_title"=> $this->request->getVar('sub_title'),
		);


		if($this->validation->run($data, 'secfour'))
		{
			$builder =$this->db->table('section_four_comment');
			$query   = $builder->get(); 
			$testData = $query->getRow();
		
				if ($testData == null) {
					$insertdata= array(

						"title"=> $this->request->getVar('title'),
						"sub_title"=> $this->request->getVar('sub_title'),
					
					);

				} else {

					$insertdata= array(

						"id"=> $testData->id,
						"title"=> $this->request->getVar('title'),
						"sub_title"=> $this->request->getVar('sub_title'),
						
					);
					
				}
				
				$builder->replace($insertdata);
				return redirect()->route('edit-section-four')->with("success","Data Update");

		}


		else
		{

			$builder =$this->db->table('section_four_comment');
			$query   = $builder->get(); 
			$data['secFour'] = $query->getRow();
			$data['validation'] = $this->validation;

			$data['pageheading'] = lang("Localize.sectionfour_four");

			$data['module'] =    lang("Localize.frontend") ; 
			$data['title']  =    lang("Localize.sectionfour_four") ;

			echo view($this->Viewpath.'\sectionfour/edit',$data);

		}
	}

// Section Four

// section four comment
public function editSecFourCommentnew()
{	
	$data['module'] =    lang("Localize.frontend") ; 
	$data['title']  =    lang("Localize.add_comment") ;

	$heading = lang("Localize.sectionfour_four").' '.lang("Localize.add_comment");
	$data['pageheading'] = $heading;

	echo view($this->Viewpath.'\sectionfour/comment/new',$data);
}

public function editSecFourCommentCreate()
	{
		$commentimg = $this->request->getFile('image');
		$path = 'image/frontend';
		
		
			if ($commentimg->isValid() && ! $commentimg->hasMoved() ) {
				$image	 = $this->imgaeCheck($commentimg,$path);
			}
			else{
				return redirect()->route('index-section-four-comment')->with("fail","Image Required");
			}
		
			$data= array(

				"person_name"=> $this->request->getVar('person_name'),
				"person_detail"=> $this->request->getVar('person_detail'),
				"description"=> $this->request->getVar('description'),
				"image"=> $image,
				"serial"=> $this->request->getVar('serial'),

			);

			if($this->validation->run($data, 'secfourcomment'))
			{
				
				$builder =$this->db->table('section_four_detail');
				$builder->insert($data);
				return redirect()->route('index-section-four-comment')->with("success","Data Update");
			}


			else
			{
				$data['validation'] = $this->validation;

				$data['module'] =    lang("Localize.frontend") ; 
				$data['title']  =    lang("Localize.comment_list") ;

				$heading = lang("Localize.sectionfour_four").' '.lang("Localize.add_comment");
				$data['pageheading'] = $heading;
				
				echo view($this->Viewpath.'\sectionfour/comment/new',$data);
			}

		
	}



	public function editSecFourCommentIndex()
	{
		$builder =$this->db->table('section_four_detail');
		$query   = $builder->get(); 
		$data['secFourComment'] = $query->getResult();

		$data['module'] =    lang("Localize.frontend") ; 
		$data['title']  =    lang("Localize.comment_list") ;

		$heading = lang("Localize.sectionfour_four").' '.lang("Localize.add_comment");
		$data['pageheading'] = $heading;

		$rolepermissionLibrary = new Rolepermission();
        $add_data = "add_comment";
        $list_data = "comment_list";

        $data['add_data'] = $rolepermissionLibrary->create($add_data); 
        $data['edit_data'] = $rolepermissionLibrary->edit($list_data); 
        $data['delete_data'] = $rolepermissionLibrary->delete($list_data);
		
		echo view($this->Viewpath.'\sectionfour/comment/index',$data);
		
	}




	public function editSecFourCommentDelete($id)
	{


		$builder =$this->db->table('section_four_detail');
		$query   = $builder->where('id',$id)->get(); 
		$imgpath = $query->getRow();

		$builder->where('id', $id)->delete();
		if (file_exists($imgpath->image)) {
			unlink($imgpath->image);
		}
		
		return redirect()->route('index-section-four-comment')->with("fail","Data Deleted");
		
	}


	public function editSecFourCommentEdit($id)
	{
		$builder =$this->db->table('section_four_detail');
		$query   = $builder->where('id',$id)->get(); 
		$data['secFourComment'] = $query->getRow();

		$data['module'] =    lang("Localize.frontend") ; 
		$data['title']  =    lang("Localize.comment_list") ;

		$heading = lang("Localize.sectionfour_four").' '.lang("Localize.add_comment");
		$data['pageheading'] = $heading;

		echo view($this->Viewpath.'\sectionfour/comment/edit',$data);
		
	}



	public function editSecFourCommentUpdate($id)
	{

		$commentimg = $this->request->getFile('image');
		$path = 'image/frontend';
		
		
			if ($commentimg->isValid() && ! $commentimg->hasMoved() ) {
				$image	 = $this->imgaeCheck($commentimg,$path);
			}
			else{
				$image	 = $this->request->getVar('secfouroldimg');
			}

			$data= array(

				"person_name"=> $this->request->getVar('person_name'),
				"person_detail"=> $this->request->getVar('person_detail'),
				"description"=> $this->request->getVar('description'),
				"image"=> $image,
				"serial"=> $this->request->getVar('serial'),

			);

			$updata= array(
				"id"=> $id,
				"person_name"=> $this->request->getVar('person_name'),
				"person_detail"=> $this->request->getVar('person_detail'),
				"description"=> $this->request->getVar('description'),
				"image"=> $image,
				"serial"=> $this->request->getVar('serial'),

			);



			if($this->validation->run($data, 'secfourcomment'))
			{

				
				$builder =$this->db->table('section_four_detail');
				$builder->replace($updata);
				return redirect()->route('index-section-four-comment')->with("success","Data Update");
			}


			else
			{
				$data['validation'] = $this->validation;
				
				$builder =$this->db->table('section_four_detail');
				$query   = $builder->where('id',$id)->get(); 
				$data['secFourComment'] = $query->getRow();

				$data['module'] =    lang("Localize.frontend") ; 
				$data['title']  =    lang("Localize.comment_list") ;

				$heading = lang("Localize.sectionfour_four").' '.lang("Localize.add_comment");
				$data['pageheading'] = $heading;

				echo view($this->Viewpath.'\sectionfour/comment/edit',$data);
			}


	}

// section four comment


// Section five

public function editSecFive()
{
	$builder =$this->db->table('section_five_app');
	$query   = $builder->get(); 
	$data['secFive'] = $query->getRow();

	$data['module'] =    lang("Localize.frontend") ; 
	$data['title']  =    lang("Localize.sectionfive") ;

	$data['pageheading'] = lang("Localize.sectionfive");

	echo view($this->Viewpath.'\sectionfive/edit',$data);
	
}


public function createSecFive()
	{
		$path = 'image/frontend';
		$secfiveimage = $this->request->getFile('image');
		
		$image = null;
			if ($secfiveimage->isValid() && ! $secfiveimage->hasMoved() ) {
				$image	 = $this->imgaeCheck($secfiveimage,$path);
			}
			else
			{
				$image = $this->request->getVar('secfiveimgpath');
			}
				

		$data= array(

			"title"=> $this->request->getVar('title'),
			"sub_title"=> $this->request->getVar('sub_title'),
			"image"=> $image,
			"button_one_status"=> $this->request->getVar('button_one_status'),
			"button_two_status"=> $this->request->getVar('button_two_status'),
			"button_one_link"=> $this->request->getVar('button_one_link'),
			"button_two_link"=> $this->request->getVar('button_two_link'),
		);

		if($this->validation->run($data, 'secfiveapp'))
		{
			$builder =$this->db->table('section_five_app');
			$query   = $builder->get(); 
			$testData = $query->getRow();
		
				if ($testData == null) {
					$data= array(

						"title"=> $this->request->getVar('title'),
						"sub_title"=> $this->request->getVar('sub_title'),
						"image"=> $image,
						"button_one_status"=> $this->request->getVar('button_one_status'),
						"button_two_status"=> $this->request->getVar('button_two_status'),
						"button_one_link"=> $this->request->getVar('button_one_link'),
						"button_two_link"=> $this->request->getVar('button_two_link'),
					
					);

				} else {

					$data= array(

						"id"=> $testData->id,
						"title"=> $this->request->getVar('title'),
						"sub_title"=> $this->request->getVar('sub_title'),
						"image"=> $image,
						"button_one_status"=> $this->request->getVar('button_one_status'),
						"button_two_status"=> $this->request->getVar('button_two_status'),
						"button_one_link"=> $this->request->getVar('button_one_link'),
						"button_two_link"=> $this->request->getVar('button_two_link'),
						
					);
					
				}
				
				$builder->replace($data);
				return redirect()->route('edit-section-five')->with("success","Data Update");

		}

		else
		{

			$builder =$this->db->table('section_five_app');
			$query   = $builder->get(); 
			$data['secFive'] = $query->getRow();
			$data['validation'] = $this->validation;

			$data['module'] =    lang("Localize.frontend") ; 
			$data['title']  =    lang("Localize.sectionfive") ;
			$data['pageheading'] = lang("Localize.sectionfive");

			echo view($this->Viewpath.'\sectionfive/edit',$data);

		}

		
		
	}

// Section five



// Section Six

public function editSecSix()

	{
	$builder =$this->db->table('section_six_blog');
	$query   = $builder->get(); 
	$data['secSix'] = $query->getRow();


	$data['module'] =    lang("Localize.frontend") ; 
	$data['title']  =    lang("Localize.sectionsix") ;

	$data['pageheading'] = lang("Localize.sectionsix");

	echo view($this->Viewpath.'\sectionsix/edit',$data);
	
	}


public function createSecSix()
	{
		$data= array(

			"title"=> $this->request->getVar('title'),
			"sub_title"=> $this->request->getVar('sub_title'),
		);

		if($this->validation->run($data, 'secsix'))
		{
			$builder =$this->db->table('section_six_blog');
			$query   = $builder->get(); 
			$testData = $query->getRow();
		
				if ($testData == null) {
					$data= array(

						"title"=> $this->request->getVar('title'),
						"sub_title"=> $this->request->getVar('sub_title'),
					
					);

				} else {

					$data= array(

						"id"=> $testData->id,
						"title"=> $this->request->getVar('title'),
						"sub_title"=> $this->request->getVar('sub_title'),
						
					);
					
				}
				
				$builder->replace($data);
				return redirect()->route('edit-section-six')->with("success","Data Update");

		}

		else
		{

			$builder =$this->db->table('section_six_blog');
			$query   = $builder->get(); 
			$data['secSix'] = $query->getRow();
			$data['validation'] = $this->validation;

			$data['module'] =    lang("Localize.frontend") ; 
			$data['title']  =    lang("Localize.sectionsix") ;

			$data['pageheading'] = lang("Localize.sectionsix");

			echo view($this->Viewpath.'\sectionsix/edit',$data);

		}

		
		
	}

// Section Six


// Section Seven

public function editSecSeven()
	{
		$builder =$this->db->table('section_seven_subscrib');
		$query   = $builder->get(); 
		$data['secSeven'] = $query->getRow();

		$data['module'] =    lang("Localize.frontend") ; 
		$data['title']  =    lang("Localize.sectionseven") ;

		$data['pageheading'] = lang("Localize.sectionseven");

		echo view($this->Viewpath.'\sectionseven/edit',$data);
		
	}

	public function createSecSeven()
	{

		$path = 'image/frontend';
		$secSevenimage = $this->request->getFile('image');
		
		$image = null;
			if ($secSevenimage->isValid() && ! $secSevenimage->hasMoved() ) {
				$image	 = $this->imgaeCheck($secSevenimage,$path);
			}
			else
			{
				$image = $this->request->getVar('secSevenimgpath');
			}

			$data= array(

				"title"=> $this->request->getVar('title'),
				"sub_title"=> $this->request->getVar('sub_title'),
				"image"=> $image,
				

			);

		if($this->validation->run($data, 'secseven'))
		{
			
			$builder =$this->db->table('section_seven_subscrib');
			$query   = $builder->get(); 
			$testData = $query->getRow();
		
				if ($testData == null) {
					$data= array(

						"title"=> $this->request->getVar('title'),
						"sub_title"=> $this->request->getVar('sub_title'),
						"image"=> $image,
						

					);

				} else {

					$data= array(

						"id"=> $testData->id,
						"title"=> $this->request->getVar('title'),
						"sub_title"=> $this->request->getVar('sub_title'),
						"image"=> $image,
						
					);
					
				}
				
				$builder->replace($data);
				return redirect()->route('edit-section-seven')->with("success","Data Update");

		}
		
		
		else
		{
			$builder =$this->db->table('section_seven_subscrib');
			$query   = $builder->get(); 
			$data['secSeven'] = $query->getRow();
			$data['validation'] = $this->validation;

			$data['module'] =    lang("Localize.frontend") ; 
			$data['title']  =    lang("Localize.sectionseven") ;

			$data['pageheading'] = lang("Localize.sectionseven");

			echo view($this->Viewpath.'\sectionseven/edit',$data);

		}

		
	}
// Section Seven

	public function imgaeCheck($image,$path)
	{
		$newName = $image->getRandomName();
		$path = $path;
		$image->move($path, $newName);
		return $path.'/'.$newName;
	}
}
