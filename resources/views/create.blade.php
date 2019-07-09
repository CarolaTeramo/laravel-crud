@extends('layouts.base')

@section('page_title', 'crea')


@section('content')
  <div class="container mt-5">

    <h1>Inserisci un nuovo prodotto</h1>
    <form method="post" action="{{ route('store') }}">
    <div class="form-group">
      <label for="name">Nome prodotto</label>
      <input type="text" class="form-control" placeholder="Inserisci il nome">
    </div>
    <div class="form-group">
      <label for="description">Descrizione prodotto</label>
      <textarea name="description" class="form-control" placeholder="Inserisci la descrizione" rows="8" cols="80"></textarea>
    </div>
    <div class="form-group">
      <label for="price">Prezzo prodotto</label>
      <input type="text" class="form-control" placeholder="Inserisci il nome">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>

@endsection
