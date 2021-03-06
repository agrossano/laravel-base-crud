@extends('layouts.main_layout')
@section('main')


@if ($errors->any())
<div>
  <ul>
    @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

<form action="{{ route('update', $omino['id']) }}" method="post">
  @csrf
  @method('POST')
  
  <label for="first_name">NAME</label>
  <input type="text" name="first_name" value="{{ $omino['first_name']}}">
  <br>

  <label for="last_name">LAST NAME</label>
  <input type="text" name="last_name" value="{{ $omino['last_name']}}">
  <br>

  <label for="code">CODE</label>
  <input type="text" name="code" value="{{ $omino['code']}}">
  <br>

  <label for="state">STATE</label>
  <input type="text" name="state" value="{{ $omino['state']}}">
  <br>

  <label for="phone number">PHONE NUMBER</label>
  <input type="text" name="phone_number" value="{{ $omino['phone_number']}}">
  <br>

  <label for="role">ROLE</label>
  <input type="text" name="role" value="{{ $omino['role']}}">
  <br>
  <br>
  <input type="submit" name="submit" value="UPDATE">

</form>
  
    
@endsection