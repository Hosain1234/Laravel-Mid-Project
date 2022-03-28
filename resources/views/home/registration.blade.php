@extends('layouts.app')
@section('content')
<div class="container row">

<!-- signup design -->
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <h3 class="mt-4 mb-4 text-center text-success fw-bolder">Signup Here</h3>
        <form action="{{route('regSubmit')}}" method="post" enctype="multipart/form-data">
            {{@csrf_field()}}
            <input type="text" name="name" value="{{old('name')}}" class="form-control mb-2" placeholder="Name">
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
            <input type="text" name="st_id" value="{{old('st_id')}}" class="form-control mb-2" placeholder="Student ID">
            @error('st_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
            <input type="text" name="email" value="{{old('email')}}" class="form-control mb-2" placeholder="Email">
            @error('email')
                <span class="text-danger">{{$message}}</span>
            @enderror
            <input type="password" name="pass" class="form-control mb-2" placeholder="Password">
            @error('pass')
                <span class="text-danger">{{$message}}</span>
            @enderror
            <input type="password" name="conf_pass" class="form-control mb-2" placeholder="Confirm Password">
            @error('conf_pass')
                <span class="text-danger">{{$message}}</span>
            @enderror
            <!-- this can be use to choose profile picture -->
            <!-- <input type="file" name="pro_image" class="mb-2"> -->
            <input type="submit" class="btn btn-outline-success mt-3 d-grid mx-auto" value="Register">
        </form>
    </div>
    <div class="col-md-4"></div>
</div>
@endsection