<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class ApiController extends Controller
{
    public function studentList()
    {
        return student::select('id','name', 'st_id', 'email')->get();
    }

    public function postAStudent(Request $req)
    {
        $req->validate(
            [
                'name'=> 'required',
                'email'=> 'required|email',
                'st_id'=> 'required',
                'pass'=> 'required',
                'conf_pass'=> 'required|same:pass'
            ]
        );
        $st = new Student();
        $st->name=$req->name;
        $st->st_id=$req->st_id;
        $st->password=$req->pass;
        $st->email=$req->email;
        $st->save();
        
        return $st;
    }

    public function loginSubmit(Request $req){

        $req->validate(
            [
                'st_id'=> 'required',
                'pass'=> 'required',
            ]
        );

        $st = Student::where('st_id', $req->st_id)->where('password',$req->pass)->select('name', 'email', 'st_id')->first();
        if($st){
            return $st;
        } else {
            return 'User not found';
        }
    }
}
