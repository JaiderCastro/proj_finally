<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
//use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* $products = Product::all();
        return view('products.index', compact('products')); */

        $categories = Category::all();

        $products = Product::select('products.*','categories.name as nameCategory')->join('categories','products.category_id', '=', 'categories.id')->get();
              
        return view('products.index',compact('categories','products')); 
     /*   
        $products = DB::table('products')
        ->join('categories','products.category_id', '=', 'categories.id')
        ->select('products.*', 'categories.name AS nameCategories')
        ->orderBy('products.name')
        ->paginate(18);

        return view('products.index',compact($products)); */  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rows = Category::all();
        return view('products.create',compact('rows'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $row        =  new Product();
        $row->name  =  $request->name;
        $row->price =  $request->price;
        $row->category_id  = $request->category_id;
        $row->save();
         
        return redirect('user/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /* $category   = Category::all();
        $product    = Product::find($id);
        return view('products.edit', compact('category', 'product'));  */
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product, $id)
    {
        $request->validate([
            'name'          => 'required',
            'price'         => 'required',
            'id_category'   => 'required',
            
        ]);



        $product = Product::findOrFail($id);
        $product->fill($request->all());

        $rows = DB::table('products')
                ->where('id', $request->id)
                ->update([
                    'name'          => $request->name,
                    'price'         => $request->price,
                    'id_category'   => $request->id_category,
                    
                ]);
          /* $row = DB::table('products')
        ->where('id',$request->id)
        ->update(['name' => $request->name, 'price' => $request->price, 'category_id' => $request->category_id]);
        return redirect()->route('products.index'); */
       //return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
