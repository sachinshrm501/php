<?php
//Refers to the class where it is defined.
class ParentClassone
{

    public static function who()
    {
        echo "i am a parent class";
    }

    public static function selfclass()
    {
        self::who();
    }
}

class ChildClassone extends ParentClassone
{
    public static function who()
    {
        echo "i am a child class";
    }
}

ChildClassone::selfclass();

//3. parent Keyword
class ParentClass
{
    public function greet()
    {
        echo "Hello from ParentClass\n";
    }
}

class ChildClass extends ParentClass
{
    public function greet()
    {
        echo "Hello from ChildClass\n";
        parent::greet();
    }
}

$child = new ChildClass();
$child->greet();
// Output:
// Hello from ChildClass
// Hello from ParentClass
