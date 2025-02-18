<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function index()
  {
      return view('blog.connection');
  }

  public function registre(){
    return view('blog.registre');
  }
  
}
