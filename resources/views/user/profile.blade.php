@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
@parent


@endsection

@section('content')


<h2>Profile</h2>
{{$profiles->username}} <br>
{{$profiles->name}} <br>
{{$profiles->lname}} <br>
{{$profiles->email}} <br>

<a href="/editProfile/{{$profiles->id}} " class=" bg-sky-500 rounded-full border-purple-400"><button >แก้ไขข้อมูล</button></a>



</form>


@endsection