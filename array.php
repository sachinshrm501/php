<!DOCTYPE html>
<html>

<body>

    <?php
    //An array in PHP is a data structure that allows you to store multiple values in a single variable. PHP arrays are flexible, and they can hold values of different types, including integers, strings, and even other arrays.


    //1. Indexed Arrays : An indexed array stores values with numeric keys.
    $array = ["value1", "value2", "value3"]; // Implicit keys
    // OR
    $array = array("value1", "value2", "value3"); // Legacy syntax

    //2. Associative Arrays : An associative array uses named keys to store values.
    $array = [
        "key1" => "value1",
        "key2" => "value2",
        "key3" => "value3"
    ];

    //3. Multidimensional Arrays : A multidimensional array contains arrays as its elements.
    $array = [
        ["value1_1", "value1_2"],
        ["value2_1", "value2_2"]
    ];

    $users = [
        ["name" => "John", "age" => 25],
        ["name" => "Jane", "age" => 30]
    ];
    echo $users[0]["name"]; // Output: John
    echo $users[1]["age"];  // Output: 30

    //Array Functions in PHP
    //1. Add Elements
    $fruits = ['apple', 'banana'];
    array_push($fruits, 'orange');
    print_r($fruits);

    //2. Remove Elements
    //array_pop(): Removes and returns the last element.
    array_pop($fruits);
    print_r($fruits);
    //array_shift(): Removes and returns the first element.
    $first = array_shift($fruits);
    //array_splice(): Removes a portion of the array and optionally replaces it.
    array_splice($fruits, 1, 1); // Removes "banana"

    //3. Search
    //in_array(): Checks if a value exists in an array.
    if (in_array('apple', $fruits)) {
        echo "apple here";
        //array_search(): Returns the key of a value if it exists.
        $key = array_search('apple', $fruits);
    }

    //4. Sorting
    //sort(): Sorts an array in ascending order (for indexed arrays).
    sort($fruits);
    //asort(): Sorts an associative array by value.
    asort($user);
    //ksort(): Sorts an associative array by key.
    ksort($user);

    //5. Count and Check
    //count(): Returns the number of elements in an array.
    echo count($fruits); // Output: 3

    //empty(): Checks if an array is empty.
    if (empty($fruits)) {
        echo "No fruits available.";
    }

    //6. array_merge() : Combines the elements of one or more arrays into a single array.
    $array1 = [1, 2, 3];
    $array2 = [4, 5, 6];
    $result = array_merge($array1, $array2);
    print_r($result);

    //7. array_combine() : Combines two arrays by using one array for keys and the other for values. and The two arrays must have the same number of elements.
    $keys = ["a", "b", "c"];
    $values = [1, 2, 3];
    $result = array_combine($keys, $values);
    print_r($result);

    ?>

</body>

</html>