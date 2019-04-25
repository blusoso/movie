<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bmiController extends Controller
{
    public function index(){
      return view('BMIcal');
    }
}
