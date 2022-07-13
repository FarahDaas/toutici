<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::all();
        //dd($products);
        return view('admin.product.list',compact('products'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { if($request->Image){
        $file = $request->file('Image');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->move('products/', $fileName);
    }else{
        $fileName= " ";
    }
    $product=[
        'Nom'=>$request->Nom,
        'Description'=>$request->Description,
        'Prix'=>$request->Prix,
        'Image' =>$fileName,

    ];
        //$product=$request->all();
        Product::create($product);
        return back();
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
        $product= Product::find($id);
        return view('admin.product.details');
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
        $product=Product::find($id);
        return view('admin.product.edit', compact('product'));
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
        $product = Product::find($id);
        $data=$request->all();
        // dd($data);
        $product->update($data);
        return back(); 
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
        
        $product->delete($id);

             return back();
        
            
        
        
        //
    }
}
