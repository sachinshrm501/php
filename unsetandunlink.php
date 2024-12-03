<!DOCTYPE html>
<html>

<body>

    <?php
    //Unset : Used to destroy a variable or remove an element from an array , It does not delete files or affect the filesystem

    $var = "Hello World";
    unset($var); // $variable is now undefined and cannot be used.

    $array = ["a" => 1, "b" => 2];
    unset($array['a']);
    print_r($array); // Output: Array ( [b] => 2 )

    //Unlink :Used to delete a file from the filesystem. Does not affect variables or arrays.
    $file = 'example.txt';

    if (file_exists($file)) {
        unlink($file); // Deletes the file named 'example.txt'
        echo "File deleted.";
    } else {
        echo "File does not exist.";
    }
    //Returns true if the file is successfully deleted.Returns false or raises a warning if the file cannot be deleted (e.g., due to permissions or file not found    

    ?>

</body>

</html>