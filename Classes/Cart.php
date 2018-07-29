<?php

namespace Classes;

Class Cart
{

    public $items = [];
    public $name;
    public $price = 0;
    public $amount = 1;
    public $sumTotal = 0;


    public function addCartItem($item, $val, $i)
    {
        $this->items[$i]['item'] = $item;
        $this->items[$i]['amount'] = $val;
    }

    public function sumTotal()
    {
        foreach ($this->items as $i => $v) {
            $this->sumTotal = $this->items[$i]['price'] * $this->items[$i]['amount'];

            echo "Общая сумма заказа " . $this->sumTotal . " рублей.";
        }
    }

    function delete($item)
    {
        unset($this->items[$item]);
    }

}
    ?>



