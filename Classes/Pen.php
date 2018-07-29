<?php
namespace Classes;

class Pen extends Product
{
public $model, $color;

public function __construct($name, $model, $color, $price)
{
    $this->name= $name;
    $this->model = $model;
    $this->color = $color;
    $this->price = $price;
}

public function getPrice()
{
echo "$this->price<br>";
}

public function toSell()
{
    return 'Продажа';
}
}
?>
