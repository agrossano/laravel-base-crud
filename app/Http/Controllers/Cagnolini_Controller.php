<?php

namespace App\Http\Controllers;

use App\Cagnolini;
use Illuminate\Http\Request;

class Cagnolini_Controller extends Controller
{
  public function index() {

    $cagnoliniDB = Cagnolini::all();


    return view('home', compact('cagnoliniDB'));
  }

  public function show($id)

    {

      $cagnolino = Cagnolini::findOrFail($id);

      return view('cane', compact('cagnolino'));
    }
    
}
