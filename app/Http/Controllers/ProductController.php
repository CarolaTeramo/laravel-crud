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
      $products = Product::all();
      // $data = [
      //   'products'=> $products
      // ]

      //return view('index', $data);
      //oppure
      return view('index', compact('products'));
      //non ho creato la cartella products
      //se lo avessi fatto sarebbe stato products.index
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //dd($request->all());
      $dati = $request->all();
      //dd($dati);
      $nuovo_prodotto = new Product();
      //oppure
      //$nuovo_prodotto->name = $dati['name'];
      //etc.. con tutti
      $nuovo_prodotto->fill($dati);
      $nuovo_prodotto->save();

      //se inserisco il file store.blade.php allora
      //retur view('store');
      //ma è meglio non inserirlo
      return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
      //dd($product_id);
      //se cancello Product
      //$product = Product::find($product_id);
      if (empty($product)) {
        abort(404);
      }
      // $data =[
      //   'product'=> $product
      // ];
      return view('show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
