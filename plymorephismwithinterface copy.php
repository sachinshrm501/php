<?php
//Square = $n*$n
//$rectange = 3.17*n*n



interface shape
{
    public function calculateArea();
}
class Square implements shape
{
    private $length;
    private $width;

    public function __construct($length, $width)
    {
        $this->length = $length;
        $this->width = $width;
    }
    public function calculateArea()
    {
        return $this->length * $this->width;
    }
}
class Rectange implements shape
{

    private $radius;
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    public function calculateArea()
    {
        return pi() * $this->radius * $this->radius;
    }
}
$square = new Square(5, 4);
echo $square->calculateArea();
echo "<br>";

$rect = new Rectange(5);
echo $rect->calculateArea();


//Compile-time Polymorphism (Method Overloading):Compile-time polymorphism, also known as method overloading, allows the definition of multiple methods with the same name but different parameters in a class. The PHP interpreter determines which method to invoke based on the number and types of arguments passed during the function call.


class Math {
    public function add($a, $b) {
        return $a + $b;
    }

    public function add($a, $b, $c) {
        return $a + $b + $c;
    }
}

$math = new Math();
echo $math->add(2, 3);        // Output: 5
echo $math->add(2, 3, 4); 
