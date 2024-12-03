<?php

class Animal {
    public function eat() {
        echo "Eating...\n";
    }
}

class Dog extends Animal {
    public function bark() {
        echo "Barking...\n";
    }
}

$dog = new Dog();
$dog->eat();  // Output: Eating...
$dog->bark(); // Output: Barking..
?>