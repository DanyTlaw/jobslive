<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LanguageSkill extends Model
{
    // Relationship -> Languages has one Profile
    public function profile(){
        return $this->belongsTo('App\Profile');
    }

    // Make variables fillable with mass asignment
    protected $fillable = [
        'name', 'knowledge'
    ];
}
