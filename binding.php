<?php

class parentClass
{
    public static function who()
    {
        echo "I am parent class";
    }
    public static function callWho()
    {
        static::who();
    }
}

class ChildClass extends parentClass{
    public static function who(){
        echo "I am child class";
    }
}
ChildClass::callWho();