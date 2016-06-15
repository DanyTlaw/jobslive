<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UploadedFile extends Model
{
    // Relationship -> Files has one Profile
    public function profile(){
        return $this->belongsTo('App\Profile');
    }

    protected $table = "files";

    // Make variables fillable with mass asignment
    protected $fillable = [
        'filename'
    ];
}
