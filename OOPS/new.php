<?php


class Person
{
    public $name = "Megha";

    public function __toString()
    {
        return $this->name;
    }

    public function __clone()
    {
        echo "<br>Object has been cloned";
    }
}

$p1 = new Person();

echo $p1;

$p2 = clone $p1;

echo "<br>$p2->name";

$p2->name = "xyz";

echo "<br>$p2->name";

echo "<br>p1 of name = $p1->name";

?>

