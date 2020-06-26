<?php
namespace App\Traits;

use Illuminate\Support\Facades\Mail;

trait utilitiesTrait{
    public function mail($data){
        $data['name'] = $data['first_name'].' '.$data['last_name'];
        $mail = Mail::send('mail.birthday', ['data' => $data], function ($m) use ($data) {
            $m->from('hello@app.com', 'Your Application');
            $m->to($data['email'], $data['name'])->subject('Your Birthday Reminder!');
        });
        var_dump($mail);
    }
}
