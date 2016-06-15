<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobExperience extends Model
{
    // Relationship -> JobExperience has one Profile
    public function profile(){
    	return $this->belongsTo('App\Profile');
    }

    // Make variables fillable with mass asignment
    protected $fillable = [
    	'job_name', 'position', 'employment', 'employer', 'business', 'work_place', 'country', 'start_month', 'start_year', 'end_month', 'end_year', 'until_now', 'description'
    ];
}
