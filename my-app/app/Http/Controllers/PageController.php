<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // ── Exercise 3: Layout & Personalisation ────────────────────────────────
    public function admin()
    {
        $role     = 'admin';
        $username = 'Yamato Admin';
        return view('lab5.admin.dashboard', compact('role', 'username'));
    }

    public function user()
    {
        $role     = 'user';
        $username = 'Liu User';
        return view('lab5.user.dashboard', compact('role', 'username'));
    }

    // ── Exercise 4: Partial Views ────────────────────────────────────────────
    public function home()
    {
        $alertMessage = 'Welcome to the homepage!';
        return view('lab5.home', compact('alertMessage'));
    }

    public function about()
    {
        $alertMessage = 'This is the about page!';
        return view('lab5.about', compact('alertMessage'));
    }

    // ── Exercise 5: Blade Components ────────────────────────────────────────
    public function contact()
    {
        return view('lab5.contact');
    }
}
