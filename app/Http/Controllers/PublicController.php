<?php

namespace App\Http\Controllers;

use App\Airport;
use App\Birthday;
use http\Encoding\Stream;
use Illuminate\Http\Request;
use Psy\Util\Str;

class PublicController extends Controller
{
    public function welcomeBobby()
    {
        return view('welcome_bobby');

    }

    public function helloWorld()
    {
        return view("hello_world");
    }

    public function airports(Request $request){

        $input = $request->all();
        $id = $input['id'] ?? 2;
        $email = $input['email']?? "jontoshmatov@yahoo.com";
        if(!$email){
            return "Email is empty";
        }
        $birthday = Birthday::where('email', 'like', '%' . $email . '%')->get();
        $parms = [
            'id' => $id,
            'input' => $input,
            'birthdays' => $birthday
        ];
        return view("airports", compact('parms'));
    }

    public function resume(Request $request){
        return view('professional.resume');
    }
    public function contactus(){
        $parms = [
            'name'=>'Jon'
        ];
        return view('contactus', compact('parms'));
    }

}












