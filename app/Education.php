<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    // Relationship -> Education has one Profile
    public function profile(){
        return $this->belongsTo('App\Profile');
    }

    // Make variables fillable with mass asignment
    protected $fillable = [
        'title', 'degree', 'subject', 'school', 'place', 'country', 'year'
    ];
}
