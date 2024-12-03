<!DOCTYPE html>
<html>

<body>

    <?php
    //A callback function in PHP is a function that is passed as an argument to another function and is invoked later during the execution of the parent function. Callback functions allow for dynamic and flexible programming, enabling you to specify custom behavior in functions or methods.


    //1. Simple Function Callback


    function greet($name)
    {
        echo "Hello, $name \n";
    }
    function callgrett(callable $callback, $name)
    {
        $callback($name);
    }
    callgrett('greet', 'sachin');
    ?>

</body>

</html>