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
      $data = [
        'products'=> $products
      ];

      return view('products.index', $data);
      //oppure
      //return view('index', compact('products'));
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
      //dd($request->all());

      //prendo dati dal form
      $dati = $request->all();

      //dd($dati);
      //creo nuovo oggetto
      $nuovo_prodotto = new Product();
      //oppure
      //$nuovo_prodotto->name = $dati['name'];
      //etc.. con tutti
      //compila l'ggeto con questi dati
      $nuovo_prodotto->fill($dati);
      $nuovo_prodotto->save();

      //se inserisco il file store.blade.php allora
      //retur view('store');
      //ma è meglio non inserirlo
      return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      //dd($id);
      // in show(Product $variabile)
      //se cancello Product

      //recupero id prodotto che sta arrivando
      $product = Product::find($id);
      if (empty($product)) {
        abort(404);
      }
      // $data =[
      //   'product'=> $product
      // ];
      return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //uguale a Show
        //recupero id
        $product = Product::find($id);
        if (empty($product)) {
          abort(404);
        }
        $data =[
          'product'=> $product
        ];
        return view('products.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request->all());
        //prendo i dati dal form
        $dati = $request->all();
        //recupero id dal model
        $prodotto = Product::find($id);
        //salvo
        $prodotto->update($dati);

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //recupero id
        $prodotto = Product::find($id);
        $prodotto->delete();

        return redirect()->route('products.index');

    }
}
