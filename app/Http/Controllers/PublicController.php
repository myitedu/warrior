<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function welcomeBobby(){
        return view('welcome_bobby');
    }


}
