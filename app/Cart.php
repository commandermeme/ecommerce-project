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
            'stock' => 0,
           'price' => $item->price,
           'deno_name' => $item->deno_name,
           'item' =>$item 
        ];
        if($this->items) {
            if(array_key_exists($id, $this->items)) {
                $storedItem = $this->items[$id];
            }
        }

        $storedItem['stock']++;
        $storedItem['price'] = $item->price * $storedItem['stock'];
        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->price;
    }

    public function reduceByOne($id)
    {
        $this->items[$id]['stock']--;
        $this->items[$id]['price'] -= $this->items[$id]['item']['price'];
        $this->totalQty--;
        $this->totalPrice -= $this->items[$id]['item']['price'];

        if($this->items[$id]['stock'] <= 0) {
            unset($this->items[$id]);
        }
    }

    public function remove($id)
    {
        $this->totalQty -= $this->items[$id]['stock'];
        $this->totalPrice -= $this->items[$id]['price'];
        unset($this->items[$id]);
    }
}
