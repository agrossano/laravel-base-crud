@extends('layouts.main_layout')
@section('main')

<h1>OMINI</h1>


<a href=""><h2>CREATE NEW</h2></a>

<ul>
  @foreach ($omini as $omino)

    <a href="{{ route('show', $omino['id']) }}">
      <li> {{ $omino['first name']}} {{ $omino['last name']}} </li>
    </a>
    
  @endforeach
</ul> 
    
@endsection