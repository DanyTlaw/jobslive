<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Storage;
use Auth;
use App\UploadedFile;
use App\User;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function handleUpload(Request $request){
        // Checks if someone is logged in
        if (Auth::check())
        {
            
            if($request->hasFile('file')){
                $file = $request->file('file');
                $type = $request->type;
                $filename = $file->getClientOriginalName();

                // Email is the identifier for data upload
                $email = Auth::user()->email;

                // With Auth::user find the current user
                $user = User::with('profile')->find(Auth::user()->id);
                // Saves the profile from the current user in variable
                $profile_id = $user->profile->id;

                // Saves the data in storage or the profile picture in public

                if($type == "data"){
                    $destinationPath = config('app.fileDestinationPath').'/'.$email.'/'.$filename;
                    $uploaded = Storage::put($destinationPath, file_get_contents($file->getRealPath()));
                }elseif($type == "profile_picture"){

                    // It has to be checked if there is already a profile picture
                    $count = UploadedFile::where('profile_id', $profile_id)->where('type','profile_picture')->count();

                    // if the count is higher then 0 then there is already a profile picture
                    if($count >0){
                        
                        // The old picture will get deleted and replaced with the new one
                        $picture = UploadedFile::where('profile_id', $profile_id)->where('type','profile_picture')->get();

                        $picture[0]->delete();

                    }

                    $uploaded = $file->move(public_path().'/uploads/'. Auth::user()->id, $file->getClientOriginalName());
                }

                if($uploaded){

                    $file = new UploadedFile;
                    $file->filename = $filename;
                    $file->profile_id = $profile_id; 
                    $file->type = $type;   
                    $file->save();
                }
            }
        }

        return redirect()->back();
    }

    public function deleteFile($id){

        $file = UploadedFile::find($id);

        // Email is the identifier for data upload
        $email = Auth::user()->email;

        Storage::delete(config('app.fileDestinationPath').'/'.$email.'/'.$file->filename);
        $file->delete();
        return redirect()->back();
    }

    // Methode for later has a bug
    /*public function download($filename){
        $email = Auth::user()->email;
        $pathToFile = config('app.fileDestinationPath').'/'.$email.'/'.$filename;
        
        return response()->download($pathToFile);

    }*/
}
