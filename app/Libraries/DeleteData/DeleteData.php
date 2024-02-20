<?php

namespace App\Libraries\DeleteData;

use CodeIgniter\Database\RawSql;

class DeleteData extends AbstractDeleteData
{
    public function init(): array
    {
        foreach ($this->relatives as $relative) {
            /** 
             * @var DeleteData $deleteObj
             * @var string|null $f_key
             * @var string|null $l_key
             * @var array $relative
             */
            list($deleteObj, $f_key, $l_key) = array_pad($relative, 3, null);

            $deleteObj->foreignKey = $f_key;
            $l_key && $deleteObj->localKey = $l_key;

            $this->buildRelativeModel($deleteObj);
            $deleteObj->init();
            $this->treeOutput[] = $deleteObj->treeOutput;
        }

        if (static::$baseCondition instanceof RawSql) {
            $this->model->where(static::$baseCondition);
        } else {
            $this->model->where(static::$baseIndex, static::$baseValue);
        }

        static::$output[] = $this;
        $this->treeOutput[] = $this->model->gettable();
        return static::$output;
    }

    private function buildRelativeModel(DeleteData $obj)
    {
        // bind new join
        $localTable = $this->model->gettable();
        $foreignTable = $obj->model->gettable();
        $this->buildJoin($obj, $localTable, sprintf("%s.%s = %s.%s", $localTable, $obj->localKey, $foreignTable, $obj->foreignKey), "inner");

        // bind previous joins
        foreach ($this->prevJoins as $join) {
            list($currentPrevJoinTable, $currentPrevJoinType, $currentPrevJoinCond) = $join;
            $this->buildJoin($obj, $currentPrevJoinTable, $currentPrevJoinType, $currentPrevJoinCond);
        }
    }

    private function buildJoin(DeleteData $obj, string $table, string $cond, string $type)
    {
        $obj->model->join($table, $cond, $type);
        $obj->prevJoins[] = [$table, $cond, $type];
    }

    public function drawCallback(string $table, array $deleteData = [])
    {
    }

    public function deleteCallback(string $table, array $deleteData = [])
    {
    }
}
