<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\RegisCourse;
use App\Models\User;

class CourseController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
      $lists = Course::all();
      $x = 1;
      $users = User::all()->count();
      $courses = Course::all()->count();
      $regiscourses = RegisCourse::all()->count();

      return view('admin.listcourse', compact('lists', 'x', 'users', 'courses', 'regiscourses'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
      return view('admin.insert');
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
         'name_course' => 'required',
         'name_place' => 'required',
         'name_lecturer' => 'required',
         'name_responsible' => 'required',
         'date' => 'required',
         'start_time' => 'required',
         'end_time' => 'required',
         'expenses' => 'required',
      ]);
      $data = $request->all();
      $check = $this->createCourse($data);
      return redirect("list")->withSuccess('Successfully!');

      // return $request->input();

   }

   public function createCourse(array $data)
   {
      return Course::create([
         'name_course' => $data['name_course'],
         'name_place' => $data['name_place'],
         'name_lecturer' => $data['name_lecturer'],
         'name_responsible' => $data['name_responsible'],
         'date' => $data['date'],
         'start_time' => $data['start_time'],
         'end_time' => $data['end_time'],
         'expenses' => $data['expenses'],
         'payment' => $data['payment'],
         'number' => $data['number'],
         'details' => $data['details'],
         'note' => $data['note'],
      ]);
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
      $lists = Course::find($id);
      // echo $username = $lists->name_course;

      return view('admin.editcourse', compact('lists'));
      // return Course::find($id);
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
      $lists = Course::find($id);

      $lists->name_course = $request->name_course;
      $lists->name_place = $request->name_place;
      $lists->name_responsible = $request->name_responsible;
      $lists->date = $request->date;
      $lists->start_time = $request->start_time;
      $lists->end_time = $request->end_time;
      $lists->expenses = $request->expenses;
      $lists->payment = $request->payment;
      $lists->number = $request->number;
      $lists->details = $request->details;
      $lists->note = $request->note;

      $lists->save();

      return redirect('list');
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
