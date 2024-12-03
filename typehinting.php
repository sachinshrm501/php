<!DOCTYPE html>
<html>

<body>

    <?php
    //Type hinting in PHP specifies the expected data types for function arguments, return values, and class properties. It helps catch errors during development by enforcing the types of values that can be passed to or returned from functions, ensuring more predictable and robust code.
    //1. Parameter Type Hinting

    function addNumber(int $a, int $b)
    {
        return $a + $b;
    }

    echo addNumber(2, 3);

    //2. Return Type Declaration
    function adNumber(int $a, int $b): int
    {
        return $a + $b;
    }

    echo addNumber(2, 3.5); //5
    echo addNumber(2, 3); //5

    //6. Nullable Types
    function age(?int $age)
    {
        return $age ?? 'No age';
    }

    echo age(null);
    echo age(25);
    ?>

</body>

</html>