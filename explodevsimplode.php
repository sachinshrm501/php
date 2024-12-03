<!DOCTYPE html>
<html>

<body>

    <?php
    //In PHP, explode() and implode() are functions used to manipulate strings and arrays. While they serve opposite purposes, they are often used together in data processing.

    //1. explode() : The explode() function splits a string into an array based on a specified delimiter.
    $string = "apple,banana,orange";
    $array = explode(',', $string); //$array = explode(',', $string,3);With limit
    print_r($array);

    //2. implode(): The implode() function joins elements of an array into a single string using a specified glue.

    $array=['banana','apple','orange'];
    $string = implode(',',$array);
    print_r($string);


    ?>

</body>

</html>