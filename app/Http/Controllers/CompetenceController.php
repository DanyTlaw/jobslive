<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use App\User;
use App\Profile;
use App\Competence;
use Auth;
use Redirect;

class CompetenceController extends Controller
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

        $competences = Competence::where('profile_id', $id)->get();

        return view('competence.index')->with('competences', $competences);
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
        return view('competence.create')->with('profile', $profile)->with('user', $user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = User::with('profile')->find(Auth::user()->id);
        // Saves the profile from the current user in variable
        $profile = $user->profile;
        // Get all the Input from the edit form
        $input = $request->all();
        // Saves the new input
        $competence = new Competence;

        $competence->profile_id = $profile->id;

        $competence->fill($input)->save();
        // Shows a message for the user

        $competences = Competence::where('profile_id', $profile->id)->get();
        // Redirecton to user informations
        return view('competence.index')->with('competences', $competences);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $competence = Competence::find($id);

        return view('competence.show')->with('competence', $competence);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $competence = Competence::find($id);

        return view('competence.edit')->with('competence', $competence);
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

        $competence = Competence::findOrFail($id);
        // Get all the Input from the edit form
        $input = $request->all();

        $competence->fill($input)->save();
        // Shows a message for the user

        $competences = Competence::where('profile_id', $profile->id)->get();
        // Redirecton to user informations
        return view('competence.index')->with('competences', $competences);
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
        $competence = Competence::find($id);
        $competence->delete();


        return Redirect::to('competence');
    }
}
