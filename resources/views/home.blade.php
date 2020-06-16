@extends('layout')

@section('main')

  <div class="main">   
    @foreach ($cagnoliniDB as $cagnolino)
      <a href="{{route('toCane', $cagnolino['id'])}}">
        {{$cagnolino['nome']}}
      </a>
      <br>
        
    @endforeach


  </div>
    
@endsection