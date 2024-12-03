<?php
function findMaxOccuring($array)
{

    $frequency = [];
    foreach ($array as $value) {
        if (isset($frequency[$value])) {
            $frequency[$value]++;
        } else {
            $frequency[$value] = 1;
        }
    }
    $maxCount = 0;
    $maxValue = null;

    foreach ($frequency as $key => $count) {
        if ($count > $maxCount) {
            $maxCount = $count;
            $maxValue = $key;
        }
    }
    return $maxValue;
}


$array = [1, 2, 3, 2, 1, 1, 3, 3, 4, 4, 5, 6];
$result = findMaxOccuring($array);
echo "The maximum occurring value is: " . $result;
