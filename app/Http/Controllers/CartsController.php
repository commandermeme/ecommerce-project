<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\User;
use App\Product;
use App\Item;
use App\Stock;
use App\Denomination;
use App\Order;
use App\OrderItem;
use App\OrderProduct;
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
        
        return view('cart.index')->with('stocks', $cart->items)->with('totalPrice', $cart->totalPrice)->with('currency', $cart->currency);
    }

    public function indexClient()
    {
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        
        $products = Product::all();
        $users = User::all();

        // return $cart->items;
        return view('cart.indexClient')->with('stocks', $cart->items)->with('totalPrice', $cart->totalPrice)->with('currency', $cart->currency)->with('prod_id', $cart->prod_id)->with('products', $products)->with('users', $users);
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

    public function addToCartUser(Request $request, $id)
    {
        $stock = Stock::find($id);
        $product = Product::where('id', $stock->prod_id)->get();

        $prod_id = $product[0];

        $user = User::where('id', $prod_id->user_id)->get();
        $user_info = $user[0];
        
        // return $request;
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($stock, $stock->id);

        $request->session()->put('cart', $cart);
         
        return redirect('user/'. $prod_id->id .'/'. $user_info->name);
    }

    public function getReduceByOne($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);

        Session::put('cart', $cart);

        if($cart->totalQty == 0) {
            Session::forget('cart');
        }

        return redirect('/cart');
    }

    public function getReduceByOneUser($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);

        Session::put('cart', $cart);

        if($cart->totalQty == 0) {
            Session::forget('cart');
        }

        return redirect('/user-cart');
    }

    public function getRemove($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->remove($id);

        Session::put('cart', $cart);

        if($cart->totalQty == 0) {
            Session::forget('cart');
        }

        return redirect('/cart');
    }

    public function getRemoveUser($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->remove($id);

        Session::put('cart', $cart);

        if($cart->totalQty == 0) {
            Session::forget('cart');
        }

        return redirect('/user-cart');
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

        $total_price = $cart->totalPrice;

        $orders = new Order;
        $orders->email = $request->email;
        $orders->total_price = $total_price;
        $orders->currency = $cart->currency;
        $orders->payment_method = 'Paypal (trial)';
        $orders->save();

        $cart_items = $cart->items;
        
        foreach ($cart_items as $item) {
            $item_stocks = $item['stock'];
            $items = $item['item']['id'];
            $stocks = Stock::find($items);

            $order_products = new OrderProduct;
            $order_products->order_id = $orders->id;
            $order_products->product_name = $stocks->deno_name;
            $order_products->original_price = $stocks->original_price;
            $order_products->original_currency = $stocks->original_currency;
            $order_products->price = $stocks->price;
            $order_products->currency = $stocks->currency;
            $order_products->quantity = $item_stocks;
            $order_products->total_price = $stocks->price * $item_stocks;
            $order_products->save();

            $items = Item::where('stock_id', $stocks->id)->where('status', 1)->take($item_stocks)->pluck('code');
            
            // echo $items->get() .'<br>';
            foreach ($items as $key => $value) {
                $order_items = new OrderItem;
                $order_items->order_id = $orders->id;
                $order_items->order_product_id = $order_products->id;
                
                $order_items->code = $items[$key];
                
                $order_items->save();
            }
            if($order_items->save()) {
                $items = Item::where('stock_id', $stocks->id)->where('status', 1)->take($item_stocks)->update([
                    'status' => 0
                ]);
            }
            
            $items = Item::where('stock_id', $stocks->id)->where('status', 1)->take($item_stocks)->count();

            $stocks->update([
                'stock' => $items
            ]);

        }
        
        Session::forget('cart');
        return redirect('/cart');
    }
}
