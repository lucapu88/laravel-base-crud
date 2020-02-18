@extends('layouts.main')
@section('title', 'show phones')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="card" style="width: 21rem;">
          <div class="card-body">
            <h2 class="card-title">{{$phone->name}}</h2>
            <h6 class="card-subtitle mb-2 text-muted">Phone ID: {{$phone->id}}</h6>
            <p class="card-text"><strong>Prezzo €: </strong> {{$phone->price}}</p>
            <p class="card-text"><strong>Colore: </strong> {{$phone->color}}</p>
            <p class="card-text"><strong>Creato il: </strong> {{$phone->created_at}}</p>
            <p class="card-text"><strong>Aggiornato il: </strong> {{$phone->updated_at}}</p>
            {{-- <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a> --}}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
