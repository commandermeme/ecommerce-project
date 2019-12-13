<?php

namespace App;

class Cart
{
    public $items = null;
    public $totalPrice = 0;
    public $totalQty = 0;

    public function __construct($oldcart) 
    {
        if($oldcart) {
            $this->items = $oldcart->items;
            $this->totalQty = $oldcart->totalQty;
            $this->totalPrice = $oldcart->totalPrice;
        }
    }

    public function add($item, $id)
    {
        $storedItem = [
           'price' => $item->price,
           'deno_name' => $item->deno_name,
           'item' =>$item 
        ];

        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->price;
    }
}
