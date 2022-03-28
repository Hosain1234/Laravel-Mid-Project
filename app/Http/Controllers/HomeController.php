<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

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
        // dd($req->all());
        $req->validate(
            [
                'name'=> 'required|regex:/^[A-Z a-z.]+$/',
                'email'=> 'required|email',
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
        $st = new Student();
        $st->name=$req->name;
        $st->st_id=$req->st_id;
        $st->password=$req->pass;
        $st->email=$req->email;
        $st->save();
        session()->flash('msg', 'Registration Successful');
        return redirect()->route('login');
    }

    public function loginSubmit(Request $req){
        $st = Student::where('st_id', $req->uname)->where('password',md5($req->pass))->first();
        if($st){
            session()->put('logged',$st->st_id);
            return redirect()->route('home.student');
        }
        session()->flash('msg','User not found');
        return redirect()->route('login');
    }
}
