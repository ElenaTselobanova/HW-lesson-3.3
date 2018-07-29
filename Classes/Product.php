<?php
namespace Classes;

interface SellInterface
{
    public function toSell();
}

abstract class Product implements SellInterface
{
    public $name;
    public $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
        echo $this->$name;
        echo $this->price;

    }

    public function getPrice()
    {
        return $this->price;
    }
}
?>
