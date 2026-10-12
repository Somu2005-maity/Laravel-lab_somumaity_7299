<!DOCTYPE html>
<html>
<head>
    <title>Fruit Inheritance</title>
</head>
<body>

<h2>Fruit Inheritance Example</h2>

<?php

class Fruit
{
    public string $name;
    public string $color;

    function display()
    {
        echo "Fruit Name: " . $this->name . "<br>";
        echo "Fruit Color: " . $this->color . "<br>";
    }
}

class Apple extends Fruit
{
    function appleInfo()
    {
        echo "This is an Apple.<br>";
    }
}

class Mango extends Fruit
{
    function mangoInfo()
    {
        echo "This is a Mango.<br>";
    }
}

// Apple Object
$apple = new Apple("Apple","Red");

$apple->name = "Apple";
$apple->color = "Red";

$apple->appleInfo();
$apple->display();

echo "<br>";

// Mango Object
$mango = new Mango("Mango","Yellow");

$mango->name = "Mango";
$mango->color = "Yellow";

$mango->mangoInfo();
$mango->display();

?>

</body>
</html>