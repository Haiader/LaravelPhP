<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskerController {
    public function index(){
        return view('TASKER.index');
    }
}
