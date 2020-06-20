<?php

namespace App\Http\Controllers;

use App\Omino;
use Illuminate\Http\Request;

class OminiController extends Controller
{
  public function index() {

    $omini = Omino::all(); 

    return view('home', compact('omini'));
  }

  public function show($id) {

    $omino = Omino::findOrFail($id);

    return view('omino-show', compact('omino'));
  }

  public function destroy($id) {

    $omino = Omino::findOrFail($id);
    $omino->delete();

    return redirect() 
                    -> route('home')
                    -> withSuccess($omino['first_name']
                                  . " successfully deleted");

  }

  public function edit($id) {

    $omino = Omino::findOrFail($id);

    return view('omino-edit', compact('omino'));
  }

  public function update(Request $request, $id) {
    
    

    $validatedData = $request -> validate([
      'first_name' => 'required',
      'last_name' => 'required',
      'code' => 'required',
      'state' => 'required',
      'phone_number' => 'required',
      'role' => 'required',
    ]);

    $omino = Omino::findOrFail($id);

    $omino -> first_name = $validatedData['first_name'];
    $omino -> last_name = $validatedData['last_name'];
    $omino -> code = $validatedData['code'];
    $omino -> state = $validatedData['state'];
    $omino -> phone_number = $validatedData['phone_number'];
    $omino -> role = $validatedData['role'];
    
    $omino -> save();

    return redirect()
              -> route('show', $id)
              -> withSuccess("Updated "  
                          . $omino['first_name']
                          . " successfully");
    }

    public function create() {

      return view('omino-create');
    }

    public function store(Request $request) {

      $validatedData = $request -> validate([
        'first_name' => 'required',
        'last_name' => 'required',
        'code' => 'required',
        'state' => 'required',
        'phone_number' => 'required',
        'role' => 'required',
      ]);
  
      $omino = new Omino;
  
      $omino -> first_name = $validatedData['first_name'];
      $omino -> last_name = $validatedData['last_name'];
      $omino -> code = $validatedData['code'];
      $omino -> state = $validatedData['state'];
      $omino -> phone_number = $validatedData['phone_number'];
      $omino -> role = $validatedData['role'];
      
      $omino -> save();
  
      return redirect()
                -> route('home')
                -> withSuccess($omino['first_name']
                            . " created successfully");

    }
}