@extends('layouts.base')

@section('page_title', 'crea')


@section('content')
  <div class="container mt-5">

    <h1>Inserisci un nuovo prodotto</h1>
    <form method="post" action="{{ route('products.update', $product->id) }}">
      {{-- per il file edit non posso utilizzare PUT come richiesto dalla route list
      perchè nel form posso passare solo post e get allora scrivo --}}
      @method ('PUT')
      {{-- per passare i dati devo inserire token che si aggiunge al form si mette anche nelle chiamate ajax--}}
      @csrf
    <div class="form-group">
      <label for="name">Nome prodotto</label>
      <input type="text" class="form-control" name="name" placeholder="Inserisci il nome" value="{{ $product->name }}">
    </div>
    <div class="form-group">
      <label for="description">Descrizione prodotto</label>
      <textarea name="description" class="form-control" placeholder="Inserisci la descrizione" rows="8" cols="80">{{ $product->description }}</textarea>
    </div>
    <div class="form-group">
      <label for="price">Prezzo prodotto</label>
      <input type="text" class="form-control" name="price" placeholder="Inserisci il prezzo" value="{{ $product->price }}">
    </div>
    <div class="form-group">
      <label for="sale_price">Prezzo scontato</label>
      <input type="text" class="form-control" name="sale_price" placeholder="Inserisci il prezzo scontato" value="{{ $product->sale_price }}">
    </div>
    <div class="form-group">
      <label for="sale_price">Categoria</label>
      <input type="text" class="form-control" name="category" placeholder="Inserisci la categoria" value="{{ $product->category }}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>

@endsection
