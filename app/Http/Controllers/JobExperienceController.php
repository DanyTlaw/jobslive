<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use Redirect;
use App\User;
use App\Profile;
use DB;
use App\JobExperience as JobExperience;
use Auth;

class JobExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // With Auth::user find the current user
        $user = User::with('profile')->find(Auth::user()->id);
        // Saves the profile from the current user in variable 
        $profile = $user->profile;
        $id = $profile->id;

        $jobExperiences = JobExperience::where('profile_id', $id)->get();

        return view('jobExperience.index')->with('jobExperiences', $jobExperiences);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // With Auth::user find the current user
        $user = User::with('profile')->find(Auth::user()->id);
        // Saves the profile from the current user in variable 
        $profile = $user->profile;
        // Returns the view and gives two different variables for the view ($profile), ($user)
        return view('jobExperience.create')->with('profile', $profile)->with('user', $user);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // With Auth::user find the current user
        $user = User::with('profile')->find(Auth::user()->id);
        // Saves the profile from the current user in variable 
        $profile = $user->profile;
        // Get all the Input from the edit form
        $input = $request->all();
        // Saves the new input
        $jobExperience = new JobExperience;

        $jobExperience->profile_id = $profile->id;

        $jobExperience->fill($input)->save();
        // Shows a message for the user
       
       $jobExperiences = JobExperience::where('profile_id', $profile->id)->get();
        // Redirecton to user informations
        return view('jobExperience.index')->with('jobExperiences', $jobExperiences);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $jobExperience = JobExperience::find($id);

        return view('JobExperience.show')->with('jobExperience', $jobExperience);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jobExperience = JobExperience::find($id);

        return view('JobExperience.edit')->with('jobExperience', $jobExperience);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        // With Auth::user find the current user
        $user = User::with('profile')->find(Auth::user()->id);
        // Saves the profile from the current user in variable
        $profile = $user->profile;

        $jobExperience = JobExperience::findOrFail($id);
        // Get all the Input from the edit form
        $input = $request->all();

        $jobExperience->fill($input)->save();

        // Shows a message for the user
       
        $jobExperiences = DB::table('job_experiences')->where('profile_id', $profile->id)->get();
        // Redirecton to user informations
        return view('jobExperience.index')->with('jobExperiences', $jobExperiences);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete
        $jobExperience = JobExperience::find($id);
        $jobExperience->delete();

        // redirect
        Session::flash('message', 'Berufserfahrung erfolgreich gelöscht.');
        return Redirect::to('jobExperience');
    }
}
