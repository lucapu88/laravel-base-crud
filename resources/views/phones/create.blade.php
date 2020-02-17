@extends('layouts.main')
@section('title', 'new phone')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h1>Inserisci un nuovo smartphone</h1>
        <form method="post" action="{{route('phones.store')}}">
          @csrf
          <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" name='name' id="name"  placeholder="nome*" required>
          </div>
          <div class="form-group">
            <label for="color">Colore</label>
            <input type="text" class="form-control" name='color' id="color" placeholder="colore">
          </div>
          <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="text" class="form-control" name='price' id="price" placeholder="prezzo*" required>
          </div>
          <button type="submit" class="btn btn-outline-success">Inserisci</button>
        </form>
      </div>
    </div>
  </div>
@endsection
