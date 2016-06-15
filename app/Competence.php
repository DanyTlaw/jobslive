<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    // Relationship -> Education has one Profile
    public function profile(){
        return $this->belongsTo('App\Profile');
    }

    protected $fillable = [
        'name'
    ];
}
