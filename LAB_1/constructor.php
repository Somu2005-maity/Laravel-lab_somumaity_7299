<!DOCTYPE html>
<html>
<head>
    <title>Fruit Constructor</title>
</head>
<body>

<h2>Fruit Constructor Example</h2>

<?php

class Fruit
{
    public string $name;
    public string $color;

    function __construct(string $name, string $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
}

$fruit1 = new Fruit("Apple", "Red");
$fruit2 = new Fruit("Mango", "Yellow");
$fruit3 = new Fruit("Banana", "Yellow");

echo "Fruit Name: " . $fruit1->name . "<br>";
echo "Fruit Color: " . $fruit1->color . "<br><br>";

echo "Fruit Name: " . $fruit2->name . "<br>";
echo "Fruit Color: " . $fruit2->color . "<br><br>";

echo "Fruit Name: " . $fruit3->name . "<br>";
echo "Fruit Color: " . $fruit3->color . "<br>";

?>

</body>
</html>