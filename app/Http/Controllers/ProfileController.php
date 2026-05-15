<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        // $serv = 'Our Services';
        // $info = 'Contact us with lyhong@lifeun.edu.kh';
        // $name = 'Lyhong taing';
        // $major = 'Computer Science';
        // $subjects = ['sub1' => 'Information Management System', 'sub2' => 'Web framework'];
        // $skills = ['skill1' => 'Web development', 'skill2' => 'Critical thinking', 'skill3' => 'Teamwork'];
        $students = [
            [
                'name' => 'A',
                'skills' => ['A', 'B', 'C']
            ],

            [
                'name' => 'B',
                'skills' => ['D', 'E', 'F']
            ]
        ];
        return view('profile', compact(
            'students'
            // 'name',
            // 'major',
            // 'subjects',
            // 'skills'
        ));
    }
}
