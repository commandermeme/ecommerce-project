<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\User;
use App\Product;
use App\Item;
use App\Stock;
use App\Denomination;
use Session;

class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        

        return view('cart.index')->with('stocks', $cart->items)->with('totalPrice', $cart->totalPrice);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function addToCart(Request $request, $id)
    {
        $stock = Stock::find($id);
        $product = Product::where('id', $stock->prod_id)->get();

        $prod_id = $product[0];
        
        // return $request;
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($stock, $stock->id);

        $request->session()->put('cart', $cart);
         
        return redirect('stores/' . $prod_id->id);
    }

    public function getReduceByOne($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);

        Session::put('cart', $cart);

        return redirect('/cart');
    }

    public function getRemove($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->remove($id);

        Session::put('cart', $cart);

        return redirect('/cart');
    }

    public function info()
    {
        if (!Session::get('cart')) {
            return redirect('/stores');
        }
        return view('cart.info');
    }

    public function checkout(Request $request) 
    {
        if (!Session::get('cart') || Session::get('cart')->totalQty == 0) {
            return redirect('/stores');
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        $cart_items = $cart->items;

        // return $cart_items;
        
        foreach ($cart_items as $item) {
            $item_stocks = $item['stock'];
            $items = $item['item']['id'];
            $stocks = Stock::find($items);
            
            
            // echo 'Stock ID: '. $stocks->id .' Quantity: '. $item_stocks .' Available: '. $stocks->stock .'<br>';

            $items = Item::where('stock_id', $stocks->id)->where('status', 1)->take($item_stocks)->update([
                'status' => 0
            ]);
            
            // echo $items .'<br>';
            
        }

        // echo  $request;

        Session::forget('cart');
        return redirect('/cart');
    }
}
