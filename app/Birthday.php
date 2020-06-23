<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Birthday extends Model
{

    protected $fillable = ['user_id','dob','email'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
