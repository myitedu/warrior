<?php

namespace App\Http\Controllers;


use App\Airport;
use App\Airpot1;
use Illuminate\Http\Request;

class PublicController extends Controller
{

    public function helloWorld()
    {
        return view("hello_world");
    }
    public function myAirports(Request $request,$country='Uzbekistan'){
        $input = $request->all();
        $airports = Airpot1::where('country','like','%'.$country.'%')->get();
        $parms = [
            'country' => $country,
            'input' => $input,
            'airports' => $airports
        ];
        $airports = Airpot1::where('country','like','%'.$country.'%')->get();
        return view("airports",compact('parms'));
    }

}
