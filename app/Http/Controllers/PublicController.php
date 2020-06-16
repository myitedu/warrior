<?php

namespace App\Http\Controllers;

use App\Airport;
use Illuminate\Http\Request;
class PublicController extends Controller
{
    public function welcomeBobby(){
        return view('welcome_bobby');

    }


    public function helloWorld(){
        return view("hello_world");
    }
    public function resume(Request $request, $jobtype='programmer'){
        $input = $request->all();
        $parms = [
            'jobtype' => $jobtype,
            'input' => $input
        ];

        if ($input['first_name'] == 'Jon'){
            return "HOWDY JON!";
        }

        return view("professional.resume",compact('parms'));
    }

    public function airports(Request $request){
        $input = $request->all();
        $country = $input['country']??'Uzbekistan';
        $airports = Airport::where('country','like','%'.$country.'%')->get();
        $parms = [
            'country' => $country,
            'input' => $input,
            'airports' => $airports
        ];
        return view("airports",compact('parms'));
    }
}
