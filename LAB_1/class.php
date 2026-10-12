<!DOCTYPE html>
<html>
<head>
    <title>Fruit Class</title>
</head>
<body>

<h2>Fruit Class Example</h2>

<?php

class Fruit
{
    public $fruit1 = "Apple";
    public $fruit2 = "Mango";
    public $fruit3 = "Banana";
    public $fruit4 = "Orange";

    public function displayFruits()
    {
        echo "Fruit 1: " . $this->fruit1 . "<br>";
        echo "Fruit 2: " . $this->fruit2 . "<br>";
        echo "Fruit 3: " . $this->fruit3 . "<br>";
        echo "Fruit 4: " . $this->fruit4 . "<br>";
    }
}

$fruits = new Fruit("Guava");
$fruits->displayFruits();

?>

</body>
</html>