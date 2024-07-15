<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    public function home()
    {
        $user = Auth::user();
        // <p>Welcome, {{ auth()->user()->name }}!</p>
        return view('welcome', compact('user'));
    }
    public function contact()
    {
        return view('contact');
    }
    public function about()
    {
        return view('about');
    }
    public function recipes()
    {
        return view('recipes');
    }
}
