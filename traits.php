<!DOCTYPE html>
<html>

<body>

    <?php
    //Traits are a mechanism for code reuse in single inheritance languages like PHP. They allow developers to reuse sets of methods freely in several independent classes living in different class hierarchies.

    trait firstname1
    {
        public function firstname()
        {

            echo "sachin";
        }
    }

    trait lastname1
    {
        public function lastname()
        {

            echo "last name";
        }
    }

    class fullname
    {
        use firstname1, lastname1;
    }


    $fullna = new fullname();
    $fullna->firstname();
    $fullna->lastname();

    ?>

</body>

</html>