<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User as User;
use App\JobExperience as jobExperiences;
use App\Education as Education;
use App\LanguageSkill as LanguageSkill;
use App\Competence as Competence;
use App\UploadedFile;
use Storage;
use Auth;


class ProfileController extends Controller
{

	public function index(){

		return view('profile.index');
	}

    /**
     * Shows a single profile of the current user
     *
     * @return Profile/show.blade.php
     * @return Request with Profile of current user_id
     */
    public function show($id){

    	// With Auth::user find the current user
        $user = User::with('profile')->find(Auth::user()->id);
        // Saves the profile from the current user in variable 
        $profile = $user->profile;
        // If the Profile has any added jobExperiences then we gonna return the amount
        $numberJobExperiences = jobExperiences::where('profile_id', $profile->id)->count();
        // If there are more then 0 then there is a jobExerience -> true
        if($numberJobExperiences>0){
            $hasJobExperiences = true;
        }else{
            $hasJobExperiences = false;
        }

        // If the Profile has any eduactions then the amount will be returned
        $numberEducations = Education::where('profile_id', $profile->id)->count();
        if($numberEducations>0){
            $hasEducations = true;
        }else{
            $hasEducations = false;
        }

        // If the Profile has any languageSkills then the amount will be returned
        $numberLanguageSkills = LanguageSkill::where('profile_id', $profile->id)->count();
        if($numberLanguageSkills>0){
            $hasLanguageSkills = true;
        }else{
            $hasLanguageSkills = false;
        }

        // If the Profile has any Competences then the amount will be returned
        $numberCompetences = Competence::where('profile_id', $profile->id)->count();
        if($numberCompetences>0){
            $hasCompetences = true;
        }else{
            $hasCompetences = false;
        }

        // Loads all stored files
        // $email = Auth::user()->email;
        //$directory = config('app.fileDestinationPath').'/'.$email;

        //$files = Storage::files($directory);

        $files = UploadedFile::where('profile_id', $profile->id)->where('type', 'data')->get();

        $profile_picture = UploadedFile::where('profile_id', $profile->id)->where('type','profile_picture')->get();
        // Is needed for download will be used later
        /*$paths = array();
        foreach ($files as $file) {
            $url = action('FileController@download', ['filename' => $file]);
            array_push($paths, $url);
        }*/

        // Returns the view and gives two different variables for the view ($profile), ($user)
        return view('profile.show')->with('profile', $profile)->with('user',$user)->with('hasJobExperiences' ,$hasJobExperiences)->with('hasEducations',$hasEducations)->with('hasLanguageSkills', $hasLanguageSkills)->with('hasCompetences', $hasCompetences)->with('files', $files)->with('profile_picture',$profile_picture);
    }

    public function create(){

    }

    public function store(Request $request){

    }

    public function edit($id){
    	// With Auth::user find the current user
        $user = User::with('profile')->find(Auth::user()->id);
        // Saves the profile from the current user in variable 
        $profile = $user->profile;

        
        // Returns the view and gives two different variables for the view ($profile), ($user)
        return view('profile.edit')->with('profile', $profile)->with('user', $user);
    }

    public function update(Request $request, $id){
    	// With Auth::user find the current user
        $user = User::with('profile')->find(Auth::user()->id);
        // Saves the profile from the current user in variable 
        $profile = $user->profile;
        // Get all the Input from the edit form
        $input = $request->all();
        // Saves the new input
        $profile->fill($input)->save();
          
	   
	    // Redirecton to user informations
        return redirect()->route('profile.show', [$id]);
    }

    public function destroy($id){

    }

    // This Method is used to show all data to the user, so he gets an overview what he already wrote
    public function lebenslauf($id){
        // With Auth::user find the current user
        $user = User::with('profile')->find(Auth::user()->id);

        /*  
         * All the data that is already done will be needed for the view
         */

        // Profile
        $profile = $user->profile;

        // Jobexperieces
        $jobExperiences = jobExperiences::where('profile_id', $profile->id)->get();

        // Educations
        $educations = Education::where('profile_id', $profile->id)->get();

        // LanguageSkills
        $languageSkills = LanguageSkill::where('profile_id', $profile->id)->get();

        // Competences
        $competences = Competence::where('profile_id', $profile->id)->get();

        // Profile picture
        $profile_picture = UploadedFile::where('profile_id', $profile->id)->where('type','profile_picture')->get();



        return view('profile/lebenslauf')->with('user', $user)->with('profile', $profile)->with('jobExperiences', $jobExperiences)->with('educations', $educations)->with('languageSkills', $languageSkills)->with('competences', $competences)->with('profile_picture', $profile_picture);

    }

    public function upload(){
        dd($request);
    }
}
