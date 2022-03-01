<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function indexView()
   {
      if (Auth::check()) {
         // data form model user
         $user = Auth::user();
         $username = $user->username;
         $course = Course::all();
         return view('user.index', compact('username', 'course'));
      }
      return redirect("login")->withSuccess('Access is not permitted');
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


   public function profileView()
   {
      if (Auth::check()) {
         // data form model user
         $profiles = Auth::user();
         $username = $profiles->username;

         return view('user.profile', compact('profiles'));
      }

      return redirect("login")->withSuccess('Access is not permitted');
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
      $profiles = User::find($id);
      // $username = $profiles->username;

      return view('user.editprofile', compact('profiles'));
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
      $profiles = User::find($id);
      $profiles->username = $request['username'];
      $profiles->name = $request['name'];
      $profiles->lname = $request['lname'];
      $profiles->email = $request['email'];

      $profiles->save();

      return redirect("profile")->withSuccess('Successfully!');
      // return $request->input() ;

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
}
