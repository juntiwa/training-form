
@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
@parent


@endsection

@section('content')

<form action="/updateProfile/{{$profiles->id}}" method="POST">
   @csrf
   <h2>Profile</h2>
   <input type="text" name="username" id="username" value="{{$profiles->username}}" required> <br>
   <input type="text" name="name" id="name" value="{{$profiles->name}}" required><br>
   <input type="text" name="lname" id="lname" value="{{$profiles->lname}}" required><br>
   <input type="text" name="email" id="email" value="{{$profiles->email}}" required><br>

   <button type="submit" name="submit">บันทึกข้อมูล</button>

</form>
@endsection
