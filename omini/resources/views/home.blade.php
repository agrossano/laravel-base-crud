@extends('layouts.main_layout')
@section('main')

<h1>OMINI</h1>

@if(session('success'))
    <h2>{{ session('success') }}</h2>
@endif

<a href=" {{ route('create') }}"><h2>CREATE NEW</h2></a>

<ul>
  @foreach ($omini as $omino)

    <a href="{{ route('show', $omino['id']) }}">
      <li> {{ $omino['first_name']}} {{ $omino['last_name']}} </li>
    </a>
    
  @endforeach
</ul> 
    
@endsection