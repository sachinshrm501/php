1. isset() : The isset() function checks if a variable is set (i.e., initialized) and is not NULL.
<?php
$var1 = "Hello";
$var2 = NULL;

echo isset($var1); // Output: 1 (true)
echo isset($var2); // Output:   (false)
echo isset($var3); // Output:   (false) - $var3 is not defined
?>
isset() does not throw an error if the variable does not exist.

2. empty(): The empty() function checks if a variable is empty, meaning it evaluates to false in a boolean context.
<?php
$var1 = "";
$var2 = 0;
$var3 = NULL;
$var4 = "Hello";

echo empty($var1); // Output: 1 (true)
echo empty($var2); // Output: 1 (true)
echo empty($var3); // Output: 1 (true)
echo empty($var4); // Output:   (false)
?>
<?php
$var = NULL;

echo isset($var); // Output: false
echo empty($var); // Output: true
?>