<?php
namespace Classes;

class Order extends Cart
{
    public function getOrder()
    {
        foreach ($this->items as $i => $v) {
            echo "Вы заказали " . $this->items[$i]['item'];
            echo " в количестве " . $this->items[$i]['amount'] . " единиц.<br>";
        }
    }
}
?>