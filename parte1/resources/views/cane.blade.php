@extends('layout')

@section('main')

<div class="main">
  <div class="box">
    Nome: {{$cagnolino['nome']}} <br>
    Razza: {{$cagnolino['tipo']}} <br>
    Altezza: {{$cagnolino['altezza']}} cm <br>
    Peso: {{$cagnolino['peso']}} kg <br>
  </div>

</div>

@endsection