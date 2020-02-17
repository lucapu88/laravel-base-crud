@extends('layouts.main')
@section('title', 'index phones')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h1>Smartphone:</h1>
        @forelse ($phones as $phone)

        @empty
          <p>Non ci sono smartphone.</p>
        @endforelse
      </div>
    </div>
  </div>
@endsection
