<?php

namespace App\Libraries\DeleteData;

use CodeIgniter\Database\RawSql;
use CodeIgniter\Model;

abstract class AbstractDeleteData
{
    protected $model;
    protected $title = '';
    protected $foreignKey;
    protected $localKey = 'id';
    protected $prevJoins = array();
    protected $relatives = array();

    protected static $baseIndex;
    protected static $baseValue;
    protected static $baseCondition;
    protected static $output = array();
    protected $treeOutput = array();

    abstract public function init(): array;
    abstract public function drawCallback(string $table, array $deleteData = []);
    abstract public function deleteCallback(string $table, array $deleteData = []);

    public function buildDeleteIndex(): AbstractDeleteData
    {
        static::$baseIndex = sprintf("`%s`.`id`", $this->model->gettable());
        return $this;
    }

    public function setDeleteId(int $id): AbstractDeleteData
    {
        static::$baseValue = $id;
        return $this;
    }

    public function setDeleteCondition(string $sql): AbstractDeleteData
    {
        static::$baseCondition = new RawSql($sql);
        return $this;
    }

    public function model(): Model
    {
        return $this->model;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getTree(): array
    {
        return $this->treeOutput;
    }

    public function reset(): AbstractDeleteData
    {
        static::$baseIndex = null;
        static::$baseValue = null;
        static::$baseCondition = null;
        static::$output = array();
        return $this;
    }
}
