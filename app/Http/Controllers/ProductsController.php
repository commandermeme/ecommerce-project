<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
use App\Item;
use App\Stock;

class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $stocks = Stock::all();

        $user_id = auth()->user()->id;
        $user = User::find($user_id);

        return view('products.index')->with('products', $products)->with('stocks', $stocks)->with('products', $user->products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
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
            'title' => 'required',
            'price' => 'required',
            'description' => 'required',
            'prod_image' => 'image|nullable|max:1999',
        ]);
            
        //Handle file upload
        if ($request->hasFile('prod_image')) {
            $filenameWithExt = $request->file('prod_image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extention = $request->file('prod_image')->getClientOriginalExtension();
            $fileNameToStore = $filename. '_' .time(). '.' .$extention;
            $path = $request->file('prod_image')->storeAs('public/prod_images', $fileNameToStore);
            
        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        

        //Create products
        $product = new Product;
        $product->user_id = auth()->user()->id;
        $product->title = $request->input('title');
        $product->price = $request->input('price');
        $product->currency = $request->input('currency');
        $product->description = $request->input('description');
        $product->notetocustomer = $request->input('notetocustomer');
        $product->prod_image = $fileNameToStore;
        
        if($product->save()) {
            $item_code = $request->input('code');
        
            foreach ($request->code as $key => $value) {
                $item = new Item;
                $item->prod_id = $product->id;
                $item->code = $item_code[$key];
                $item->save();
            }
            
        }
        
        $items = $item->where('prod_id', $product->id)->count();
        
        $stock = new Stock;
        $stock->prod_id = $product->id;
        $stock->stock = $items;
        $stock->save();
        
        return redirect('/products');
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
        $product = Product::find($id);
        return view('products.edit')->with('product', $product);
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
        //Update products

        $product = Product::find($id);
        $product->user_id = auth()->user()->id;
        $product->title = $request->input('title');
        $product->price = $request->input('price');
        $product->currency = $request->input('currency');
        $product->description = $request->input('description');
        $product->notetocustomer = $request->input('notetocustomer');
        
        if($product->save()) {
            $item_code = $request->input('code');
        
            foreach ($request->code as $key => $value) {
                $item = Item::find($product->id);
                $item->prod_id = $product->id;
                $item->code = $item_code[$key];
                $item->save();
            }
            
        }
        
        $items = $item->where('prod_id', $product->id)->count();
        
        $stock = new Stock;
        $stock->prod_id = $product->id;
        $stock->stock = $items;
        $stock->save();
        
        return redirect('/products');
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
}
