@extends('layouts.base')

@section('page_title', 'Visualizza')

@section('content')
  <div class="container mt-5">
    <h1>ciao {{ $product->id }}</h1>
  </div>
@endsection
