<?php
function removeDuplicates($array)
{
    $uniqueArray = [];
    foreach ($array as $value) {
        $isDuplicate = false;
        foreach ($uniqueArray as $uniqueValue) {
            if ($value === $uniqueValue) {
                $isDuplicate = true;
                break;
            }
        }
        if (!$isDuplicate) {
            $uniqueArray[] = $value;
        }
    }
    return $uniqueArray;
   
}


$array = [1, 2, 3, 2, 1, 1, 3, 3, 4, 4, 5, 6];
$result = removeDuplicates($array);
print_r($result);
