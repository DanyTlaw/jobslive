<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use Redirect;
use App\User;
use App\Profile;
use DB;
use App\LanguageSkill as LanguageSkill;

use Auth;

class LanguageSkillController extends Controller
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

        $languageSkills = LanguageSkill::where('profile_id', $id)->get();

        return view('languageSkill.index')->with('languageSkills', $languageSkills);
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
        return view('languageSkill.create')->with('profile', $profile)->with('user', $user);
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
        $languageSkill = new LanguageSkill;

        $languageSkill->profile_id = $profile->id;

        $languageSkill->fill($input)->save();
        // Shows a message for the user

        $languageSkills = LanguageSkill::where('profile_id', $profile->id)->get();
        // Redirecton to user informations
        return view('languageSkill.index')->with('languageSkills', $languageSkills);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $languageSkill = LanguageSkill::find($id);

        return view('languageSkill.show')->with('languageSkill', $languageSkill);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $languageSkill = LanguageSkill::find($id);

        return view('languageSkill.edit')->with('languageSkill', $languageSkill);
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

        $languageSkill = LanguageSkill::findOrFail($id);
        // Get all the Input from the edit form
        $input = $request->all();

        $languageSkill->fill($input)->save();

        // Shows a message for the user

        $languageSkills = DB::table('language_skills')->where('profile_id', $profile->id)->get();
        // Redirecton to user informations
        return view('languageSkill.index')->with('languageSkills', $languageSkills);
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
        $languageSkill = LanguageSkill::find($id);
        $languageSkill->delete();


        return Redirect::to('languageSkill');
    }
}
