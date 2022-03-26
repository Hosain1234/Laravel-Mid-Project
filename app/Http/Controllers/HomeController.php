<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function login()
    {
        return view('home.login');
    }
    public function registration()
    {
        return view('home.registration');
    }
    public function regSubmit(Request $req){
        $req->validate(
            [
                'name'=> 'required|regex:/^[A-Z a-z.]+$/',
                'email'=> 'email',
                'st_id'=> 'required|regex:/^[0-9]{2}-[0-9]{5}-[1-3]{1}$/|unique:students,st_id',
                'f_id'=> 'required|regex:/^[0-9]{4}-[0-9]{4}-[2-3]{1}$/',
                'pass'=> 'required',
                'conf_pass'=> 'required|same:pass'
            ]
        ,
            [
                'st_id.regex'=>'Please follow xx-xxxxx-x this pattern'
            ]
        );
    }
}
