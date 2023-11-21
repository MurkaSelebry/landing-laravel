<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
class ApplicationController extends Controller
{
public function create()
  {
      return view('apply');
  }

  public function store(Request $request)
  {
      Application::create($request->all());
      return redirect('/applications');
  } 
   //
}
