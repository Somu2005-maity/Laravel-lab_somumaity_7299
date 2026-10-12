<!DOCTYPE html>
<html>
<head>
    <title>Fruit Destructor</title>
</head>
<body>

<h2>Fruit Destructor Example</h2>

<?php

class Fruit
{
    public string $name;

    function __construct(string $name)
    {
        $this->name = $name;
        echo "Constructor called.<br>";
    }

    function display()
    {
        echo "Fruit Name: " . $this->name . "<br>";
    }

    function __destruct()
    {
        echo "Destructor called for " . $this->name . ".<br>";
    }
}

$fruit = new Fruit("Apple");

$fruit->display();

?>

</body>
</html>