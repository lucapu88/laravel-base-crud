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
              <td>
                <a class="btn btn-outline-primary" href="{{route('phones.show', ['phone' => $phone->id])}}">Visualizza Dettagli</a>
                <a class="btn btn-outline-warning" href="{{route('phones.edit', ['phone' => $phone->id])}}">Modifica</a>
                <form class="delete" action="{{route('phones.destroy', ['phone' => $phone->id])}}" method="post">
                  @csrf
                  @method('DELETE')
                  <input type="submit" class="btn btn-outline-danger" value="Elimina">
                </form>
              </td>
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
