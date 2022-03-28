<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use App\Models\Course;
use App\Models\Studentcourse;

class StudentHomeController extends Controller
{
    public function home(){
        $st_id = session()->get('logged');
        $st = Student::where('st_id',$st_id)->first();
        return view('student.home', compact('st'));
    }
    public function prereg(){
        $st_id = session()->get('logged');
        $courses = Course::all();
        $stCourses = Studentcourse::where('st_id', $st_id)->get();
        foreach($courses as $c){
            foreach($stCourses as $sc){
                if($sc->cr_id == $c->id){
                    $c->enrolled = true;
                }
            }
        }
        return view('home.preregistration')->with('courses', $courses);
    }
    public function preregModify(Request $req){
        $st_id = session()->get('logged');
        Studentcourse::where('st_id', $st_id)->delete();
        foreach($req->courses as $c_id){
            $cs = new Studentcourse();
            $cs->st_id= $st_id;
            $cs->cr_id= $c_id;
            $cs->save();
        }
        return back();
    }

    public function test()
    {
        return 'test';
    }
}
