@extends('layouts.app')
@section('content')
    <!-- <h3 class="text-center text-success fw-bolder">Enter Your Informations to Login</h3><br> -->
    <div class="container row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        @if(Session::has('msg'))
        <span class="alert alert-info">{{Session::get('msg')}}</span>
        @endif
        <h3 class="mt-4 mb-4 text-center text-success fw-bolder">Login Here</h3>
        <form action="{{route('registration')}}" method="post">
            {{@csrf_field()}}
            <input type="text" nane="st_id" value="{{old('st_id')}}" class="form-control mb-2" placeholder="Student ID">
            @error('st_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
            <input type="password" nane="pass" class="form-control mb-2" placeholder="Password">
            @error('pass')
                <span class="text-danger">{{$message}}</span>
            @enderror
            <input type="submit" class="btn btn-outline-success mt-3 d-grid mx-auto" value="Login">
        </form>
        </div>
        <div class="col-md-4"></div>
    </div>
@endsection