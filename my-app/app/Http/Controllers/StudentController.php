<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController
{
    public function index()
    {
        $Allstudents = [
            ['id' => 1, 'name' => 'Haiader', 'age' => 20, 'email' => 'haider@example.com'],
            ['id' => 2, 'name' => 'Ali',    'age' => 21, 'email' => 'ali@example.com'],
            ['id' => 3, 'name' => 'Fatima',   'age' => 22, 'email' => 'fatima@example.com'],
            ['id' => 4, 'name' => 'Sara',   'age' => 23, 'email' => 'sara@example.com'],
            ];

        return view('Student.index', ["students" => $Allstudents]);
    }

    public function show($studentId)
    {
        return view('Student.Show', ["studentId" => $studentId]);
    }
}
