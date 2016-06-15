<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use App\User;
use App\Profile;
use App\Education;
use Auth;
use Redirect;

class EducationController extends Controller
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

        $educations = Education::where('profile_id', $id)->get();

        return view('education.index')->with('educations', $educations);
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
        return view('education.create')->with('profile', $profile)->with('user', $user);
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
        $education = new Education;

        $education->profile_id = $profile->id;

        $education->fill($input)->save();
        // Shows a message for the user

        $educations = Education::where('profile_id', $profile->id)->get();
        // Redirecton to user informations
        return view('education.index')->with('educations', $educations);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $education = Education::find($id);

        return view('education.show')->with('education', $education);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $education = Education::find($id);

        return view('education.edit')->with('education', $education);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // With Auth::user find the current user
        $user = User::with('profile')->find(Auth::user()->id);
        // Saves the profile from the current user in variable
        $profile = $user->profile;

        $education = Education::findOrFail($id);
        // Get all the Input from the edit form
        $input = $request->all();

        $education->fill($input)->save();
        // Shows a message for the user

        $educations = Education::where('profile_id', $profile->id)->get();
        // Redirecton to user informations
        return view('education.index')->with('educations', $educations);
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
        $education = Education::find($id);
        $education->delete();


        return Redirect::to('education');
    }
}
