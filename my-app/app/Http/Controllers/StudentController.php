<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController
{
    public function view_student()
    {
        $students = [
            ['name' => 'Haider', 'age' => 20, 'email' => 'haider@example.com'],
            ['name' => 'Ali',    'age' => 21, 'email' => 'ali@example.com'],
            ['name' => 'Omar',   'age' => 22, 'email' => 'omar@example.com'],
            ['name' => 'Sara',   'age' => 23, 'email' => 'sara@example.com'],
        ];

        return view('app', ['students' => $students]);
    }
}
