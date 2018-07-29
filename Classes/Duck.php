<?php
namespace Classes;

class Duck extends Product
{
public $breed;
public $dwelling;

public function __construct ($name, $breed, $dwelling, $price)
{
    $this->name = $name;
    $this->breed = $breed;
    $this->dwelling = $dwelling;
    $this->price = $price;
}

public function getDuck()
{
echo "$this->breed:  Среда обитания - $this->dwelling<br>";
}
public function toSell()
{
    return 'Продажа';
}
}
?>