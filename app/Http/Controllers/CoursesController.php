<?php

namespace App\Http\Controllers;

use App\Models\courses;
use Illuminate\Http\Request;


class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    public function create()
    {
        return view('admin1.courses.createcourses');
    }


    public function store(Request $request)
    {
        $valid = $request->validate([
            'title' => ['required'],
            'starts_at' => ['required'],
            'ends_at' => ['required'],
            'fee' => ['required'],
            'details' => ['required'],
            'seats' => ['required'],

        ]);


        $courses = courses::create($valid);

        return redirect('/viewcourses');
    }

    public function show(courses $courses)
    {
        $courses = courses::get();
        return view('admin1.courses.coursesview',compact('courses'));
    }

    public function edit(courses $courses,$id)
    {
        $courses = courses::find($id);
        return view('admin1.courses.coursesedit', compact('courses'));
    }

    public function update(Request $request, courses $courses)
    {
        $valid = $request->validate([
            'title' => ['required'],
            'starts_at' => ['required'],
            'ends_at' => ['required'],
            'fee' => ['required'],
            'details' => ['required'],
            'seats' => ['required'],


        ]);

        $courses->update($valid);

        return redirect('/viewcourses');
    }


        public function destroy(courses $courses,$id)
    {
        $courses = courses::find($id);
        $courses->delete();
        return redirect('/viewcourses');
    }

}
