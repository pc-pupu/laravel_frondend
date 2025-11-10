<?php

// public function index()
// {
//     if(auth()->check()) {
//         return view('dashboard')->with('layout', 'layouts.app');
//     }
//     return view('welcome')->with('layout', 'layouts.guest');
// }

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home')->with('layout', 'layouts.guest');
    }

    public function homePage()
    {
        // return view('outerTheme.pages.homepage')->with('layout', 'layouts.guest');
        return view('outerTheme.pages.homepage');
    }
}