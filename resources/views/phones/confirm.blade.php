@extends('layouts.main')
@section('title', 'delete phone')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <h3 class="card-header">Conferma Eliminazione</h3>
          <div class="card-body">
            <h5 class="card-title">Sei sicuro di voler eliminare questo elemento?</h5>
            <p class="card-text">Una volta cliccato i dati saranno elminati definitivamente.</p>
            <form class="delete" action="{{route('phones.destroy', ['phone' => $phone->id])}}" method="post">
              @csrf
              @method('DELETE')
              <input type="submit" class="btn btn-outline-secondary" value="SI">
            </form>
            <a class="btn btn-outline-dark" href="{{route('phones.index')}}">NO</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
