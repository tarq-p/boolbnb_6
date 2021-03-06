<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoUser extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'lastname',
        'date_of_birth'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
