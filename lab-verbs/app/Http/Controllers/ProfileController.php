<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // Required parameter
    public function show($username)
    {
        return view('profile.show', compact('username'));
    }

    // Optional parameter (defaults to 'posts')
    public function tab($username, $tab = 'posts')
    {
        return view('profile.tab', compact('username', 'tab'));
    }

    // Redirect with flash data
    public function follow($username)
    {
        return redirect()->route('profile.show', $username)
                         ->with('info', 'You followed ' . $username . '!');
    }
}
