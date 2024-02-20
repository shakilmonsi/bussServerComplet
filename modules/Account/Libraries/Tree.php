<?php

namespace Modules\Account\Libraries;

class Tree
{
    public $db;
    protected $Viewpath;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->Viewpath = "Modules\Account\Views";
    }

    public function getTree($parent)
    {
        $builder = $this->db->table('accounthead');
        $query   = $builder->where('parentid', $parent)->get();
        $data['accounthead'] = $query->getResult();

        return view($this->Viewpath . '\treeview/tree', $data);
    }

    public function getsubtree($nparent)
    {
        $builder = $this->db->table('accounthead');
        $query   = $builder->where('parentid', $nparent)->get();
        $data['subaccounthead'] = $query->getResult();

        return view($this->Viewpath . '\treeview/subtree', $data);
    }
}
