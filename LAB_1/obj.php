<!DOCTYPE html>
<html>
<head>
    <title>Fruit Object</title>
</head>
<body>

<h2>Fruit Object Example</h2>

<?php

class Fruit
{
    public string $name;
    public string $color;
    public int $price;

    function display()
    {
        echo "Fruit Name: " . $this->name . "<br>";
        echo "Fruit Color: " . $this->color . "<br>";
        echo "Fruit Price: ₹" . $this->price . "<br>";
    }
}

// Object 1
$apple = new Fruit("Apple","Red");

$apple->name = "Apple";
$apple->color = "Red";
$apple->price = 120;

$apple->display();

echo "<br>";

// Object 2
$mango = new Fruit("Mango","Yellow");

$mango->name = "Mango";
$mango->color = "Yellow";
$mango->price = 100;

$mango->display();

echo "<br>";

// Object 3
$banana = new Fruit("Banana","Yellow");

$banana->name = "Banana";
$banana->color = "Yellow";
$banana->price = 60;

$banana->display();

?>

</body>
</html>