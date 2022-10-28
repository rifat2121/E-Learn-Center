<?php

namespace App\Http\Controllers;

use App\Models\courses;
use App\Models\application;
use App\Models\job;
use Illuminate\Http\Request;

class AppController extends Controller
{

    public function jobs(job $job)
    {
        $job = job::get();
        return view('user.jobs',compact('job'));
    }



    public function applyjobs(job $job)
    {
        $job = job::get();
        return view('user.applyjobs',compact('job'));
    }



    public function applynow(Request $request)
    {

        $app= new application();
        $app->applyfor = $request->applyfor;
        $app->name = $request->name;
        $app->nid = $request->nid;
        $app->education =  $request->education;
        $app->experience =  $request->experience;
        $app->pdetails =  $request->pdetails;
        $app->extra =  $request->extra;

        $app->save();
        return back();
    }


    public function courses(courses $courses)
    {
        $courses = courses::get();
        return view('user.applycourses',compact('courses'));
    }



    public function coursesapply(Request $request)
    {

        $app= new application();
        $app->applyfor = $request->applyfor;
        $app->name = $request->name;
        $app->nid = $request->nid;
        $app->education =  $request->education;
        $app->experience =  $request->experience;
        $app->pdetails =  $request->pdetails;
        $app->extra =  $request->extra;

        $app->save();
        return back();
    }



}
