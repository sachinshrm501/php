<!DOCTYPE html>
<html>

<body>

    <?php
    //Overriding occurs when a subclass provides a specific implementation for a method that is already defined in its parent class. This allows a subclass to modify or completely replace the behavior of a parent class's method.

    class ParentClass
    {
        function displayMessage()
        {
            echo "This is parent class";
        }
    }

    class ChildClass extends ParentClass{

        function displayMessage()
        {
            echo "This is child class";
        }
    }

    $parent = new ParentClass();
    $parent->displayMessage();
    $child = new ChildClass();
    $child->displayMessage();

    ?>

</body>

</html>