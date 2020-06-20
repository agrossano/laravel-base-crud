@extends('layouts.main_layout')
@section('main')

  @if(session('success'))
    <h2>{{ session('success') }}</h2>
  @endif

  NAME: {{ $omino['first_name']}} <br>
  LAST NAME: {{ $omino['last_name']}} <br>
  CODE: {{ $omino['code']}} <br>
  STATE: {{ $omino['state']}} <br>
  PHONE NUMBER: {{ $omino['phone_number']}} <br>
  ROLE: {{ $omino['role']}} <br>
  <br>
  <br>

<a href="{{ route('destroy', $omino['id'])}} ">DELETE ME</a>
<a href="{{ route('edit', $omino['id'])}}">EDIT ME</a>
    
@endsection