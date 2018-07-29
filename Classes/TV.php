<?php
namespace Classes;

class Tv extends Product
{

    public $model, $diagonal;

public function __construct($name, $model, $diagonal, $price)
{
$this->name = $name;
$this->model = $model;
$this->diagonal = $diagonal;
$this->price = $price;
}

public function toSell()
{
    return 'Продажа';
}
}
?>