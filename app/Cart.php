<?php

namespace App;

class Cart
{
    public $items = null;
    public $totalPrice = 0;
    public $totalQty = 0;
    public $currency = null;
    public $prod_id = null;

    public function __construct($oldcart) 
    {
        if($oldcart) {
            $this->items = $oldcart->items;
            $this->totalQty = $oldcart->totalQty;
            $this->totalPrice = $oldcart->totalPrice;
            $this->currency = $oldcart->currency;
            $this->prod_id = $oldcart->prod_id;
        }
    }

    public function add($item, $id)
    {
        $storedItem = [
            'stock' => 0,
           'price' => $item->price,
           'currency' => $item->currency,
           'deno_name' => $item->deno_name,
           'prod_id' => $item->prod_id,
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
        $this->currency = $item->currency;
        $this->prod_id = $item->prod_id;
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
