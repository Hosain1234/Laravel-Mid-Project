@extends('layouts.logged')
@section('content')
    <center>
        <h3>Name: {{$st->name}}</h3>;
        <h4>ID: {{$st->st_id}}</h4>;
        <a href="{{route('student.prereg')}}" class="btn btn-outlook-success">Go to Registration</a>;
    </center>
@endsection
