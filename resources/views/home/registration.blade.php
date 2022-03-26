@extends('layouts.app')
@section('content')
<div class="col-md-4 text-center">
    <br><br>
    <h3>Registration</h3>
    <form action="{{route(registration)}}" method="post">
        {{@csrf_field()}}
        <input type="text" nane="name" value="{{old('name')}}" class="form-control" placeholder="Name">
        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
        <input type="text" nane="st_id" value="{{old('st_id')}}" class="form-control" placeholder="Student ID">
        @error('st_id')
            <span class="text-danger">{{$message}}</span>
        @enderror
        <input type="text" nane="email" value="{{old('email')}}" class="form-control" placeholder="Email">
        @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror
        <input type="password" nane="pass" class="form-control" placeholder="Password">
        @error('pass')
            <span class="text-danger">{{$message}}</span>
        @enderror
        <input type="password" nane="conf_pass" class="form-control" placeholder="Confirm Password">
        @error('conf_pass')
            <span class="text-danger">{{$message}}</span>
        @enderror
        <br>
        <input type="submit" class="btn btn-success" value="Register">
    </form>
</div>
@endsection