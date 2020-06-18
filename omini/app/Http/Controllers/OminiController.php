<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OminiController extends Controller
{
  public function index() {
    return view('home');
  }
}