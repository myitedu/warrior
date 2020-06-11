<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
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
}
