<?php

// Original array
$inputArray = array(
    array(
        array('value31', 'value32'),
        array('value33', 'value34'),
        'value21'
    ),
    array('value22'),
    'value11'
);

function convertArray($inputArray) {
    if (count($inputArray) == count($inputArray, COUNT_RECURSIVE)) {
        return $inputArray;
    }

    // if(!checkIfAllArraysExceptLast($inputArray)) return $inputArray;
    
    $value = array_pop($inputArray);
    $result = [];
    
    foreach($inputArray as $v){
        $result[] = is_array($v) ? convertArray($v) : $v;
    }
    
    return [ $value => $result];
}

function checkIfAllArraysExceptLast($array){
    $v = array_pop($array);
    return !is_array($v) && count(array_filter($array, fn($v) => is_array($v))) == count($array);
}

function convertArrayBackup(array $inputArray, $old_key = null)
{
    $outputArray = [];
    $isMultiDimensional = count($inputArray) != count($inputArray, COUNT_RECURSIVE);
    $array_key = $isMultiDimensional ? array_pop($inputArray) : $old_key;

    foreach ($inputArray as $value) {
        $itemIsMultiDimensional = count($value) != count($value, COUNT_RECURSIVE);

        if (is_array($value) && $itemIsMultiDimensional) {
            $outputArray[$array_key] = convertArray($value, $array_key);
        } else {
            $outputArray[$array_key] = $value;
        }
    }

    return $outputArray;
}

$outputArray = convertArray($inputArray);
print_r($outputArray);
