<?php

namespace App\Http\Controllers;

use App\Models\seminar;
use Illuminate\Http\Request;

class SeminarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin1.seminars.addseminars');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin1.seminars.addseminars');
    }


    public function store(Request $request)
    {
        $valid = $request->validate([
            'time' => ['required'],
            'venue' => ['required'],
            'seats' => ['required'],
            'topic' => ['required'],
            'guests' => ['required'],
            'fee' => ['required'],
            'hosts' => ['required'],
            'date' => ['required'],


        ]);

        $seminar = seminar::create($valid);

        return redirect('/viewseminar');
    }

    public function show(seminar $seminar)
    {
        $seminar = seminar::get();
        return view('admin1.seminars.viewseminars',compact('seminar'));
    }


    public function edit(seminar $seminar,$id)
    {
        $seminar = seminar::find($id);
        return view('admin1.seminars.edit', compact('seminar'));
    }


    public function update(Request $request, seminar $seminar)
    {
        $valid = $request->validate([
            'time' => ['required'],
            'venue' => ['required'],
            'seats' => ['required'],
            'topic' => ['required'],
            'guests' => ['required'],
            'fee' => ['required'],
            'hosts' => ['required'],
            'date' => ['required'],


        ]);
//dd($valid);

        $seminar->update($valid);

        return redirect('/viewseminar');
    }


    public function destroy(seminar $seminar)
    {
        //
    }
}
