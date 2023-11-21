<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anket;
class AnketController extends Controller
{
public function create()
{
  return view('ankets/create');
}
public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string',
        'email' => 'required|string',
        'phone' => 'required|string',
        'comments' => 'string',
    ]);
    $anket = Anket::create($validatedData);
    return response()->json($anket, 201);
}
public function index()
{
    $applications = Anket::all();
    return response()->json($applications);
}
    //
}
