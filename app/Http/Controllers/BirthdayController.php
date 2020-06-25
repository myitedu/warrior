<?php

namespace App\Http\Controllers;

use App\Birthday;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use App\Traits\utilitiesTrait;

class BirthdayController extends Controller
{

    use utilitiesTrait;

    public function __construct()
    {
        date_default_timezone_set("America/New_York");
    }

    public function registerForm(){
        return view ("birthday.register");
    }
    public function register(Request $request){
        $parms = $request->input();
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'your_message' => 'required|string|max:1000',
            'dob' => 'required|date',
        ]);

        $user = User::where('email',$parms['email'])->first();
        $email_exists = isset($user)??false;
        if (!$email_exists){
            $user = User::create([
                'first_name' => $parms['first_name'],
                'last_name' => $parms['last_name'],
                'email' => $parms['email'],
                'password' => Hash::make($parms['first_name']),
            ]);
        }
        $dob = Birthday::where('user_id',$user->id)->first();
        $dob_exists = isset($dob)??false;

        if (!$dob_exists){
            $dob = Birthday::create([
                'email' => $parms['email'],
                'user_id' => $user->id,
                'dob' => $parms['dob'],
                'your_message' => $parms['your_message']??null,
                'unsubscribe' => isset($parms['unsubscribe'])?1:0,
            ]);
        }else{
          $dob->email = $parms['email'];
          $dob->user_id = $user->id;
          $dob->dob = $parms['dob'];
          $dob->your_message = $parms['your_message']??null;
          $dob->unsubscribe = isset($parms['unsubscribe'])?1:0;
          $dob->save();
        }

        if ($dob){
            return Redirect::back()->withErrors([0]);
        }
        return Redirect::back()->withErrors([1]);
    }
    public function getTodayBirthdays(Request $request){
        $today = date('Y-m-d');
        $birthdays = Birthday::whereDate('dob', '=', $today)->get();
        $mail_data = [];
        foreach ($birthdays as $birthday){
            $mail_data = [
                'id' => $birthday->id,
                'user_id' => $birthday->user_id,
                'email' => $birthday->email,
                'your_message' => $birthday->your_message,
                'dob' => $birthday->dob,
                'first_name' => $birthday->user->first_name,
                'last_name' => $birthday->user->last_name,
            ];
            $this->mail($mail_data);
        }
    }

}

