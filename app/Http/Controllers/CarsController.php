<?php

namespace App\Http\Controllers;
use App\Car;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function UsAutomobiles(){
        return view("cars.cars");
    }
    public function cars (Request $request){

        $input = $request->all();
        $year = $input['Year']??1990;
        $make = $input['Make']??'Ford';

        $car= Car::where('Make', 'like', '%' . $make . '%')->get();
        $parms = [
            'Year' => $year,
            'input' =>$input,
            'cars' => $car
        ];
        return view("cars.cars", compact('parms'));
    }


}
/*public function search(Request $request){
        $search= $request->get('search');
        $posts= Car::where('Make', 'like', '%' . $search . '%');
    }














