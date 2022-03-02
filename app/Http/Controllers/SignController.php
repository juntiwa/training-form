<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Course;
use App\Models\Member;
use Session;
use Hash;

class SignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('user.index');
    }

   public function login()
   {
      return view('signin');
   }

   public function createSignin(Request $request)
   {
      $request->validate([
         'email' => 'required',
         'password' => 'required',
      ]);
      $credentials = $request->only('email', 'password');
      if (Auth::attempt($credentials)) {
         return redirect()->intended('index')
         ->withSuccess('Logged-in');
      }
      return redirect("login")->withSuccess('Credentials are wrong.');
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
      return view('signup');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
      $request->validate([
         'username' => 'required',
         'email' => 'required|email|unique:users',
         'password' => 'required|min:6',
      ],[
         'email.unique' => "มีข้อมูลอยู่เเล้ว"
      ]);
      $data = $request->all();
      $check = $this->createUser($data);
      return redirect("index")->withSuccess('Successfully logged-in!');
   }

   public function createUser(array $data)
   {
      $user = User::create([
         'username' => $data['username'],
         'email' => $data['email'],
         'password' => Hash::make($data['password']),
         'permission' => 1
      ]);

      $user->save();

      $id = $user->id;
      $member = Member::create([
         'user_id' => $id
      ]);
      $member->save();

   }



   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show()
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

   public function logout()
   {
      Session::flush();
      Auth::logout();
      return redirect('/');
   }
}
