@extends('layouts.base')

@section('content')
  <div class="container mt-5">
    <h1>Tutti i prodotti</h1>
    <a href="{{ route('create') }}" class="btn btn-success">Aggiungi un nuovo prodotto</a>
    <table class="table mt-3">
  <thead>
    <tr>
      <th >id</th>
      <th >Nome</th>
      <th >Descrizione</th>
      <th >Prezzo</th>
      <th >Prezzo scontato</th>
      <th >Categoria</th>
      <th >Azioni</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($products as $product)
      <tr>
        <th >{{ $product->id}}</th>
        <td>{{ $product->name}}</td>
        <td>{{ $product->description}}</td>
        <td>{{ $product->price}}</td>
        <td>{{ $product->sale_price}}</td>
        <td>{{ $product->category}}</td>
        <td><a href="{{ route('show', $product->id) }}" class="btn btn-primary">Visualizza</a></td>
      </tr>

    @empty
      <p>Non ci sono prodotti</p>
    @endforelse

  </tbody>
</table>

  </div>
@endsection
