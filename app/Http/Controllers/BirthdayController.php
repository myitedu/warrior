<?php

namespace App\Http\Controllers;

use App\Birthday;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class BirthdayController extends Controller
{
    public function registerForm(){
        return view ("birthday.register");
    }
    public function register(Request $request){
        $parms = $request->input();

        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',        //validate info being input in boxes
            'dob' => 'required|date',
        ]);

        $user = User::where('email',$parms['email'])->first(); //goes to emails in database and checks if input email exists
        $email_exists = isset($user)??false;
        if (!$email_exists){
            $user = User::create([                   //if email does not exist create new entry in database with the input info accordingly to db
                'first_name' => $parms['first_name'],
                'last_name' => $parms['last_name'],
                'email' => $parms['email'],           //Notice that the table name in Db is "User"
                'password' => Hash::make($parms['first_name']),
            ]);         //whats "Hash"?
        }
        $dob = Birthday::where('user_id',$user->id)->first();
        $dob_exists = isset($dob)??false;
                            //Essentially doing same thing looking for user but in different table called "Birthdays" and by user_id instead of email
                            //if user does not exist create one and add to db
        if (!$dob_exists){
            $dob = Birthday::create([
                'email' => $parms['email'],
                'user_id' => $user->id,
                'dob' => $parms['dob'],
                'unsubscribe' => isset($parms['unsubscribe'])?1:0,
            ]);
        }else{
          $dob->email = $parms['email'];
          $dob->user_id = $user->id;
          $dob->dob = $parms['dob'];                 //NEED A LITTLE EXPLANATION
          $dob->unsubscribe = isset($parms['unsubscribe'])?1:0;
          $dob->save();
        }

        if ($dob){
            return back()->with('msg','SUCESS');
        }

        return back()->with('msg','FAILED');

    }
}

