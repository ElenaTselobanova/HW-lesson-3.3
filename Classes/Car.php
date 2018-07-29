<?php
namespace Classes;

class Car extends Product
{
    public $model;
    public $type;

    public function __construct($name, $model, $type, $price)
    {
        $this->name = $name;
        $this->model = $model;
        $this->type = $type;
        $this->price = $price;
        echo "$this->name, $this->model, $this->type, $this->price<br>";
    }

    public function toSell()
    {
        return 'Продажа';
    }
}
?>
