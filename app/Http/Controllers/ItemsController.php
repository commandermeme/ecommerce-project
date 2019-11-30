<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Product;
use App\Stock;
use App\User;
use App\Denomination;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();
        $products = Product::all();
        $stocks = Stock::all();

        return view('items.index')->with('items', $items)->with('products', $products)->with('stocks', $stocks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'price' => 'required',
            'code' => 'required',
            'code.*' => 'required',
        ]);

        $item_code = $request->input('code');
        $prod_id = $request->input('prod_id');
        $product = Product::find($prod_id);
        $prod_name = $product->title;
        $price = $request->price;
        $currency  =$request->currency;
        $deno_name = $prod_name .' '. $price . $currency;
        
        foreach ($request->code as $key => $value) {
            $item = new Item;
            $item->prod_id = $prod_id;
            $item->code = $item_code[$key];
            $item->deno_name = $deno_name;
            $item->save();
        }

        if ($item->save()) {
            $items = $item->where('deno_name', $deno_name)->count();
        
            $stock = new Stock;
            $stock->prod_id = $prod_id;
            $stock->stock = $items;
            $stock->price = $request->input('price');
            $stock->currency = $request->input('currency');
            $stock->deno_name = $deno_name;
            $stock->save();
        }

        if($stock->save()) {
            $deno = $stock->where('prod_id', $prod_id)->count();

            $denomination = Denomination::where('prod_id', $prod_id)->update([
                'prod_id' => $prod_id,
                'denomination' => $deno
            ]);
        }

        return redirect('products/'. $prod_id);
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
        $item = Item::find($id);

        return view('items.edit')->with('item', $item);
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
        $item = Item::find($id);

        $item->code = $request->code;
        $item->save();

        return redirect('products/' .$item->prod_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Item::find($id);

        if($item->delete()) {
            $items = $item->where('deno_name', $item->deno_name)->count();

            $stock = Stock::where('deno_name', $item->deno_name)->update([
                'stock' => $items
            ]);
        }

        return redirect('products/' .$item->prod_id);
    }

    public function createItem($id)
    {
        $stock = Stock::find($id);
        $items = Item::all();

        return view('items.createItem')->with('item', $items)->with('stock', $stock);
    }

    public function storeItem(Request $request)
    {
        
        $request->validate([
            'code' => 'required',
            'code.*' => 'required',
        ]);

        $item_code = $request->input('code');
        $prod_id = $request->prod_id;
        $deno_name = $request->deno_name;
        // $price = $request->price;
        // $currency = $request->currency;
        $stock_id = $request->stock_id;
        
        foreach ($request->code as $key => $value) {
            $item = new Item;
            $item->prod_id = $prod_id;
            $item->code = $item_code[$key];
            $item->deno_name = $deno_name;
            $item->save();
        }

        if ($item->save()) {
            $items = $item->where('deno_name', $deno_name)->count();

            $stock = Stock::where('deno_name', $deno_name)->update([
                // 'prod_id' => $prod_id,
                'stock' => $items,
                // 'price' => $price,
                // 'deno_name' => $deno_name
            ]);
        }

        return redirect('showStocks/'. $stock_id);
    }
}
