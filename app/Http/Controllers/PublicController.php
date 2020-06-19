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
<<<<<<< HEAD


    public function airports(Request $request)
    {
=======
    public function airports(Request $request){
>>>>>>> 0947c48364760d386f03c954bd861d2ba758a6f4
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
<<<<<<< HEAD

    public function resume(Request $request)
    {
        return view('professional.resume');
    }


=======
    public function resume(Request $request){
        return view('professional.resume');
    }
    public function contactus(){
        $parms = [
            'name'=>'Jon'
        ];
        return view('contactus', compact('parms'));
    }
>>>>>>> 0947c48364760d386f03c954bd861d2ba758a6f4
}












