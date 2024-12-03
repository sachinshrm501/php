
<?php

$array = [1, 2, 3, 2, 1, 1, 3, 3, 4, 4, 5, 6];
//Find the max number
$duplicate = [];
foreach($array as $value){
    if(isset($duplicate[$value])){
        $duplicate[$value]++;
    }
    else{
        $duplicate[$value]=1;
    }
}
print_r($duplicate);
