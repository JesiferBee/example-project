<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $major = $request->input('major');

        return "Get data successfully: Name: $name, Email: $email, Major: $major";

        //->// return dd($request);

        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        // ]);

        // Process the form data (e.g., save to database)

        // return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}