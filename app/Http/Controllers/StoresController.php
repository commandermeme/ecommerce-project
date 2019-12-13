<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;
use App\Stock;
use App\Item;
use App\Denomination;

class StoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $stocks = Stock::all();
        $items = Item::all();
        $denominiations = Denomination::all();

        // $user_id = auth()->user()->id;
        // $user = User::find($user_id);

        return view('stores.index')->with('products', $products)->with('stocks', $stocks)->with('items', $items)->with('denominations', $denominiations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('stores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        // $product =  Product::find($id);
        $product = Product::find($id);
        $stock = Stock::where('prod_id', $product->id)->get();
        $stocks = $stock->all();


        
        return view('stores.show')->with('product', $product)->with('stocks', $stocks);
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

    public function indexClient($username) 
    {
        $products = Product::all();
        $stocks = Stock::all();
        $items = Item::all();
        $denominiations = Denomination::all();

        $user = User::where('name', $username)->get();
        $user_info = $user[0];

        // return $user;
        return view('stores.indexClient')->with('products', $user_info->products)->with('stocks', $stocks)->with('items', $items)->with('denominations', $denominiations)->with('user_info', $user_info);
    }

    public function showClient($id) 
    {
        $product =  Product::find($id);
        $stocks = Stock::all();
        
        return view('stores.show')->with('product', $product)->with('stocks', $stocks);
    }
}
