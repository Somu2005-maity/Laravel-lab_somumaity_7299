<!DOCTYPE html>
<html>
<head>
    <title>Fruit Polymorphism</title>
</head>
<body>

<h2>Fruit Polymorphism Example</h2>

<?php

class Fruit
{
    public function taste()
    {
        echo "Fruit has different tastes.<br>";
    }
}

class Apple extends Fruit
{
    public function taste()
    {
        echo "Apple tastes sweet and slightly sour.<br>";
    }
}

class Mango extends Fruit
{
    public function taste()
    {
        echo "Mango tastes sweet and juicy.<br>";
    }
}

class Lemon extends Fruit
{
    public function taste()
    {
        echo "Lemon tastes sour.<br>";
    }
}

$fruit1 = new Apple("Apple");
$fruit2 = new Mango("Mango");
$fruit3 = new Lemon("Lemon");

$fruit1->taste();
$fruit2->taste();
$fruit3->taste();

?>

</body>
</html>