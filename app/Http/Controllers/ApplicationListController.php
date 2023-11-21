<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationListController extends Controller
{
  public function index()
  {
      $applications = Application::all();
      return view('applications', ['applications' => $applications]);
  }

  public function api()
  {
      return Application::all();
  }
    //
}
