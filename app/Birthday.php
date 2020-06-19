<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Birthday extends Model
{
<<<<<<< HEAD
    //
=======

    protected $fillable = ['user_id','dob','email'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
>>>>>>> 0947c48364760d386f03c954bd861d2ba758a6f4
}
