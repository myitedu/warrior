<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
   public function helloWorld(){
        return view("welcome_sunnat");
    }
}
