@extends('layouts.app')

@section('content')
@section('content')
@if (Session::has('mensaje'))
<div class="alert alert-primary alert-dismissible" role="alert">
    {{  Session::get('mensaje') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif 
<div class="container">
    <form action="{{route('game.store2')}}" method="post">
        @csrf 
        <div class="form-group">
          <label for="id">Ingrese el codigo para empezar a juego</label>
          <input type="text" name="id" id="id" class="form-control" placeholder="H53DY" aria-describedby="helpId" required>
          <small id="helpId" class="text-muted">Help text</small>
        </div>

        <button type="submit" class="btn btn-secondary">Enviar</button>
    </form>
    <a href="{{ route('home') }}">Regresar</a>
</div>
@endsection