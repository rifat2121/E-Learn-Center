<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\job;
use App\Models\seminar;
use App\Models\courses;
use App\Models\application;


class UserController extends Controller
{


    public function welcome()
    {
        return view('welcome');
    }


    public function index()
    {
        return view('user.userpanel');
    }


    public function create()
    {
        return view('admin1.jobportal.createjobs');
    }


    public function courses(courses $courses)
    {
        $courses = courses::get();
        return view('user.courses',compact('courses'));
    }


    public function seminars(seminar $seminar)
    {
        $seminar = seminar::get();
        return view('user.seminars',compact('seminar'));

    }


    public function myapps(application $application)
    {
        $apps = application::get();
        return view('user.myapps',compact('apps'));

    }

}
