<?php
// $name = "sachin kumar sharma";
// echo str_replace("sachin","myname",$name);

// $name = "sachin kumar sharma";
// echo trim($name,"sac");
// print_r(explode(" ",$name));

// $date = "09/10/2024" ;//Want to change 09-10-2024

// $timestamp = strtotime($date);
// $formatdat = date('y-m-d',$timestamp);
// echo $formattedDate;

// error_reporting(E_ALL);
// error_reporting(E_NOTICE);

//Function with default arg
// function defaultarg($name="sachin",$mob="9720"){
//     return "My name is $name and mobile is $mob";
// }
// echo defaultarg();
// echo defaultarg("akkk");
// echo defaultarg("vijay","9999");

//Array splice
// $originalArray = [1, 2, 3, 4, 5, 6];
// echo "Original array :";
// foreach ($originalArray as $value) {
//     echo $value;
//     echo "\n";
// }
// array_splice($originalArray, 2, 0, 11);
// echo "After inserting the value:";
// foreach ($originalArray as $value) {
//     echo $value;
// }


//Array merge
// $arr1 = array("Geeks", "g4g"); 
// $arr2 = array("GeeksforGeeks", "Computer science portal"); 
// // $finalArray = array_merge($arr1,$arr2);
// print_r($finalArray);


//remove by array search
// $arr = array(
//     0 => 'GeeksForGeeks',
//     1 => 'Python',
//     2 => 'Java',
//     3 => 'Physics'
// );
// $key = array_search("Python",$arr);
// // by Array key
// $value = array_keys($arr,2);

// if(($kry)!==false){
//     unset($arr[$key]);
// }

//Remove element by array
// $array = array('apple', 'banana', 'cherry', 'date');
// $valueToDelete = 'banana';

// foreach($array as $key=>$value){
//     if($value==$valueToDelete){
//         unset($array[$key]);
//     }
// }
// // Reindex the array to maintain numerical indexing
// $array = array_values($array);
// print_r($array);


//Find max and min value in array
// $array = [1, 3, 4, 5, 6, 2];

// function findmax($array)
// {
//     $n = count($array);
//     $maxvalue = $array[0];
//     for ($i = 0; $i < $n; $i++) {
//         if ($maxvalue < $array[$i]) {
//             $maxvalue = $array[$i];
//         }
//     }
//     return $maxvalue;
// }

// echo findmax($array);

//Find most occur number
// function firstMostFrequentElement($array)
// {
//     $repeat = [];
//     foreach ($array as $value) {
//         if (isset($repeat[$value])) {
//             $repeat[$value]++;
//         } else {
//             $repeat[$value] = 1;
//         }
//     }
//     $maxvalue = max($repeat);

//     foreach ($array as $value) {
//         if ($repeat[$value] === $maxvalue) {
//             return $value;
//         }
//     }
// }

// $array = [3, 1, 4, 4, 5, 2, 6, 4, 1, 1];
// $result = firstMostFrequentElement($array);

// echo "The first most frequent element is: $result";

//Sum of array values
// $array=[5,6,7,8];
// $sum = 0;
// foreach($array as $value){
//     $sum = $sum+$value;
// }
// echo $sum;
//Write a program to find the largest and smallest element in an array

// function findmaxmin($array)
// {
//     $max = $array[0];
//     $min = $array[0];
//     foreach ($array as $value) {
//         if ($value > $max) {
//             $max = $value;
//         }
//         if ($value < $min) {
//             $min = $value;
//         }
//     }
//     return ["max" => $max, "min" => $min];
// }

// $array = [3, 5, 7, 2];
// $result =  findmaxmin($array);
// echo  "Value of max is " . $result['max'] . "\n";
// echo  "Value of min is " . $result['min'] . "\n";

//Reverse an array without using built-in functions.

// $array = [3, 5, 7, 2];

// $reserved = [];
// for ($i = count($array) - 1; $i >= 0; $i--) {
//     $reserved[] = $array[$i];
// }
// print_r($reserved);

//Write a program to count the frequency of each element in an array.
// $arr = [1, 2, 2, 3, 3, 3];
// $repeat = [];
// foreach ($arr as $value) {
//     if (isset($repeat[$value])) {
//         $repeat[$value]++;
//     } else {
//         $repeat[$value] = 1;
//     }
// }
// print_r($repeat);
