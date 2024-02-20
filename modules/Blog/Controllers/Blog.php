<?php

namespace Modules\Blog\Controllers;

use App\Controllers\BaseController;
use Modules\Blog\Models\BlogModel;
use App\Libraries\Rolepermission;

class Blog extends BaseController
{

    protected $Viewpath;
    protected $blogModel;
    protected $employeeTypeModel;
    protected $db;

    public function __construct()
    {

        $this->Viewpath = "Modules\Blog\Views";
        $this->blogModel = new BlogModel();
    }

    public function index()
    {
        $data['blog'] = $this->blogModel->orderBy('id', 'DESC')->findAll();

        $data['module'] =    lang("Localize.blog");
        $data['title']  =    lang("Localize.blog_list");

        $data['pageheading'] = lang("Localize.blog_list");

        $rolepermissionLibrary = new Rolepermission();
        $add_data = "add_blog";
        $list_data = "blog_list";

        $data['add_data'] = $rolepermissionLibrary->create($add_data);
        $data['edit_data'] = $rolepermissionLibrary->edit($list_data);
        $data['delete_data'] = $rolepermissionLibrary->delete($list_data);


        echo view($this->Viewpath . '\blog/index', $data);
    }

    public function new()
    {
        $data['module'] =    lang("Localize.blog");
        $data['title']  =    lang("Localize.add_blog");

        $data['pageheading'] = lang("Localize.add_blog");

        echo view($this->Viewpath . '\blog/new', $data);
    }



    public function create()
    {
        $path = 'image/blog';
        $imageblog =  $this->request->getFile('image');
        $currentuserid = session()->get('user_id');

        if (!$imageblog->isValid() || $imageblog->hasMoved()) {
            return redirect()->back()->withInput()->with('fail', 'Image field is empty');
        }

        $image = $this->imgaeCheck($imageblog, $path);

        $validdata = array(
            "title" => $this->request->getVar('title'),
            "description" => $this->request->getVar('description'),
            "serial" => $this->request->getVar('serial'),
            "image" => $image,
        );

        $data = array(
            "user_id" => $currentuserid,
            "title" => $this->request->getVar('title'),
            "description" => $this->request->getVar('description'),
            "serial" => $this->request->getVar('serial'),
            "image" => $image,
        );

        if ($this->validation->run($validdata, 'blog')) {
            $this->blogModel->insert($data);
            return redirect()->route('index-blog')->with("success", "Data Save");
        }

        return redirect()->back()->withInput()->with('fail', $this->validation->listErrors());
    }


    public function edit($id)
    {

        $data['blog'] = $this->blogModel->find($id);

        $heading = lang("Localize.edit") . ' ' . lang("Localize.blog");
        $data['pageheading'] = $heading;

        echo view($this->Viewpath . '\blog/edit', $data);
    }

    public function update($id)
    {

        $path = 'image/blog';
        $imageblog =  $this->request->getFile('image');
        $currentuserid = session()->get('user_id');

        if ($imageblog->isValid() && !$imageblog->hasMoved()) {
            $image     = $this->imgaeCheck($imageblog, $path);

            $imgpath = $this->request->getVar('oldblogimg');
            if (file_exists($imgpath)) {
                unlink($imgpath);
            }
        } else {

            $image = $this->request->getVar('oldblogimg');
        }


        $data = array(
            "id" => $id,
            "user_id" => $currentuserid,
            "title" => $this->request->getVar('title'),
            "description" => $this->request->getVar('description'),
            "serial" => $this->request->getVar('serial'),
            "image" => $image,
        );
        $validdata = array(
            "title" => $this->request->getVar('title'),
            "description" => $this->request->getVar('description'),
            "serial" => $this->request->getVar('serial'),
            "image" => $image,

        );



        if ($this->validation->run($validdata, 'blog')) {
            $this->blogModel->save($data);
            return redirect()->route('index-blog')->with("success", "Data Save");
        } else {
            $data['module'] =    lang("Localize.blog");
            $data['title']  =    lang("Localize.blog_list");

            $heading = lang("Localize.edit") . ' ' . lang("Localize.blog");
            $data['pageheading'] = $heading;

            $data['blog'] = $this->blogModel->find($id);
            echo view($this->Viewpath . '\blog/edit', $data);
        }
    }


    public function delete($id)
    {
        $imgpath = $this->blogModel->find($id);
        $imgpath = $imgpath->image;

        if (file_exists($imgpath)) {
            unlink($imgpath);
        }
        $this->blogModel->delete($id);
        return redirect()->route('index-blog')->with("fail", "Data Deleted");
    }


    public function imgaeCheck($image, $path)
    {
        $newName = $image->getRandomName();
        $path = $path;
        $image->move($path, $newName);
        return $path . '/' . $newName;
    }
}
