<!DOCTYPE html>
<html>

<body>

    <?php
    //Can have both abstract method(No body) and concrete method interface Can have only method signature (no body)
    //Abstract support single inheritance interface support multiple inheritance
    //Abstract use public private and protected method interface support only puublic methods
    //Interface class have't properties

    
    // Abstract class definition
    abstract class Animal
    {
        // Abstract method (must be implemented in derived classes)
        abstract public function makeSound();

        // Concrete method
        public function sleep()
        {
            echo "Sleeping...\n";
        }
    }

    // Derived class that implements the abstract method
    class Dog extends Animal
    {
        public function makeSound()
        {
            echo "Woof!\n";
        }
    }

    class Cat extends Animal
    {
        public function makeSound()
        {
            echo "Meow!\n";
        }
    }

    // You cannot create an instance of an abstract class
    // $animal = new Animal(); // Error: Cannot instantiate abstract class Animal

    $dog = new Dog();
    $dog->makeSound(); // Outputs: Woof!
    $dog->sleep();     // Outputs: Sleeping...

    $cat = new Cat();
    $cat->makeSound(); // Outputs: Meow!
    $cat->sleep();     // Outputs: Sleeping...



    //Interface
    interface Swimmer
    {
        public function swim();
    }

    interface Runner
    {
        public function run();
    }

    class Athlete implements Swimmer, Runner
    {
        public function swim()
        {
            echo "Swimming\n";
        }

        public function run()
        {
            echo "Running\n";
        }
    }

    $athlete = new Athlete();
    $athlete->swim(); // Outputs: Swimming
    $athlete->run();  // Outputs: Running

    ?>

</body>

</html>