@extends('layouts.main')
@section('title', 'home phones')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h1>Smartphone</h1>
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Colore</th>
              <th>Prezzo €</th>
              <th>Azioni</th>
            </tr>
          </thead>
          @forelse ($phones as $phone)
            <tr>
              <td>{{$phone->id}}</td>
              <td>{{$phone->name}}</td>
              <td>{{$phone->color}}</td>
              <td>{{$phone->price}}</td>
            </tr>
          @empty
            <tr>
              <td colspan="5">Non ci sono smartphone.</td>
            </tr>
          @endforelse
        </table>
      </div>
    </div>
  </div>
@endsection
