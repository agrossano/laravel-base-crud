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

<form action="{{ route('store') }}" method="get">
  @csrf
  @method('POST')
  
  <label for="first_name">NAME</label>
  <input type="text" name="first_name" value="">
  <br>

  <label for="last_name">LAST NAME</label>
  <input type="text" name="last_name" value="">
  <br>

  <label for="code">CODE</label>
  <input type="text" name="code" value="">
  <br>

  <label for="state">STATE</label>
  <input type="text" name="state" value="">
  <br>

  <label for="phone number">PHONE NUMBER</label>
  <input type="text" name="phone_number" value="">
  <br>

  <label for="role">ROLE</label>
  <input type="text" name="role" value="">
  <br>
  <br>
  <input type="submit" name="submit" value="CREATE">

</form>
  
    
@endsection