<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Product;
use App\Item;
use App\Stock;
use App\Denomination;

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
        $denominations = Denomination::all();
        // $denomination = Denomination::where('prod_id', $prod_id)->latest()->first();
        

        $user_id = auth()->user()->id;
        $user = User::find($user_id);

        return view('products.index')->with('products', $products)->with('denominations', $denominations)->with('products', $user->products);
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
        // return $request;
        $request->validate([
            'title' => 'required',
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
        $product->description = $request->input('description');
        $product->notetocustomer = $request->input('notetocustomer');
        $product->prod_image = $fileNameToStore;
        
        if($product->save()) {
            $item_code = $request->input('code');
            if($request->separator == 'comma'){
                $coded = explode(',', preg_replace('/(\r|\n)/', '', $item_code));
            }
            elseif($request->separator == 'line') {
                $coded = explode(PHP_EOL, $item_code);
            }

            $prod_name = $request->title;
            $price = $request->price;
            $currency  =$request->currency;
            $deno_name = $prod_name .' '. $price . $currency;
        
            foreach ($coded as $key => $value) {
                $item = new Item;
                $item->prod_id = $product->id;
                $item->code = $coded[$key];
                $item->deno_name = $deno_name;
                $item->save();
            }
            
        }
        
        if ($item->save()) {
            $items = $item->where('deno_name', $deno_name)->where('status', 1)->count();
        
            $stock = new Stock;
            $stock->prod_id = $product->id;
            $stock->stock = $items;
            $stock->price = $request->input('price');
            $stock->currency = $request->input('currency');
            $stock->original_price = $request->input('original_price');
            $stock->original_currency = $request->input('original_currency');
            $stock->deno_name = $deno_name;
            $stock->save();  

            $item_stock_id = Item::where('deno_name', $stock->deno_name)->update(['stock_id' => $stock->id]);

        }

        if($stock->save()) {
            $deno = $stock->where('prod_id', $product->id)->count();

            $denomination = new Denomination;
            $denomination->prod_id = $product->id;
            $denomination->denomination = $deno;
            $denomination->save();
        }
        
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
        $product = Product::find($id);
        $stocks = Stock::all();
        $items = Item::all();

        return view('products.show')->with('product', $product)->with('stocks', $stocks)->with('items', $items);
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

        //Update products
        $product = Product::find($id);
        $product->title = $request->input('title');
        $product->description = $request->input('description');
        $product->notetocustomer = $request->input('notetocustomer');
        $product->prod_image = $fileNameToStore;
        $product->save();

        return redirect('products/'. $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        if($product->delete()) {
            Item::where('prod_id', $product->id)->delete();
            Stock::where('prod_id', $product->id)->delete();
            Denomination::where('prod_id', $product->id)->delete();
        }

        return redirect('/products');
    }
}
