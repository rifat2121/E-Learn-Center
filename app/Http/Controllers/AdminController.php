<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\application;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function login()
    {
        return view('admin1.login');
    }

    public function index()
    {
        return view('admin1.panel');
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function validation (Request $request)
    {

        $name = $request->input('name');
        $password = $request->input('password');

        if($name=='reset' && $password=='reset')
        {
            return view("admin1.panel");
        }

        else
        {
            return view("admin1.login");
        }


    }


    public function userapps(application $application)
    {
        $apps = application::get();
        return view('admin1.applications',compact('apps'));

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show(admin $admin)
    {
        //
    }

    public function edit(admin $admin)
    {
        //
    }


    public function update(Request $request, admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(admin $admin)
    {
        //
    }
}
