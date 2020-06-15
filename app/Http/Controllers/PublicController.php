<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
use App\Airport;
>>>>>>> 878dce1ee4158e711086bd11c63f3d5bb289a185
use Illuminate\Http\Request;

class PublicController extends Controller
{
<<<<<<< HEAD
   public function helloWorld(){
        return view("welcome_sunnat");
=======
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
>>>>>>> 878dce1ee4158e711086bd11c63f3d5bb289a185
    }
}
