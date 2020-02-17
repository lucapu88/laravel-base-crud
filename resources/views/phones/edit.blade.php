@extends('layouts.main')
@section('title', 'edit phone')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h1>Modifica smartphone</h1>
        <form method="post" action="{{route('phones.update', ['phone' => $phone->id])}}">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" name='name' id="name" placeholder="nome*" value="{{$phone->name}}" required>
          </div>
          <div class="form-group">
            <label for="color">Colore</label>
            <input type="text" class="form-control" name='color' id="color" placeholder="colore" value="{{$phone->color}}">
          </div>
          <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="text" class="form-control" name='price' id="price" placeholder="prezzo*" value="{{$phone->price}}" required>
          </div>
          <button type="submit" class="btn btn-outline-success">Salva Modifiche</button>
        </form>
      </div>
    </div>
  </div>
@endsection
