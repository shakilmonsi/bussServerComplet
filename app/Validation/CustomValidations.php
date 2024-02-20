<?php

namespace App\Validation;

use Config\Database;

class CustomValidations
{
    public function is_unique_ignore_deleted(?string $str, string $field, array $data): bool
    {
        [$field, $ignoreField, $ignoreValue] = array_pad(explode(',', $field), 3, null);

        sscanf($field, '%[^.].%[^.]', $table, $field);

        $row = Database::connect($data['DBGroup'] ?? null)
            ->table($table)
            ->select('deleted_at')
            ->where($field, $str)
            ->limit(1);

        if (! empty($ignoreField) && ! empty($ignoreValue) && ! preg_match('/^\{(\w+)\}$/', $ignoreValue)) {
            $row = $row->where("{$ignoreField} !=", $ignoreValue);
        }
        
        $result = $row->get()->getRow();

        if ($result && $result->deleted_at) {
            $row->where($field, $str)->limit(1)->delete();
            return true;
        }
        
        return $result === null;
    }

    public function date_range_end_date(?string $str, string $field, array $data, &$error): bool
    {
        $error = 'Start date and end date is not valid';

        return strtotime($str) > strtotime($field);
    }
}
