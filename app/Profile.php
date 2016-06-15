<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    // Relationship -> Profil belongts to a User
    public function user(){
    	return $this->belongsTo('App\User');
    }

    // Relationship -> Profil has many jobexperiences
    public function jobExperiences(){
    	return $this->hasMany('App\JobExperience');
    }

    //Relationship -> Profil has many Education
    public function education(){
        return $this->hasMany('App\Education');
    }

    // Makes data fillable for massasignment
    protected $fillable = [
    	'profle_picture_url', 'title', 'first_name', 'last_name', 'place', 'street', 'zip', 'birthyear', 'nationality', 'tel'
    ];
}
