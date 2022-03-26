@extends('layouts.app')
@section('content')
    <h3 class="text-center text-success fw-bolder">Enter Your Informations to Login</h3><br>
            <div class="container">
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-md-8">
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="inputAddress" class="form-label">Email</label>
                                <input type="email" class="form-control" id="" placeholder="Enter Email">
                            </div>
                            <div class="col-12">
                                <label for="inputAddress" class="form-label">Password</label>
                                <input type="email" class="form-control" id="" placeholder="Enter Email">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-outline-success">Login</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div><br>
            <!-- already have account login -->
    <div class="signup-button text-center">
        <h6 class="text-primary">Don't Have An Account?</h6>
        <button type="submit" class="btn btn-outline-success">SignUp</button>
    </div>
@endsection