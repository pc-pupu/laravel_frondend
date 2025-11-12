<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    public function showLoginForm(){
        return view('outerTheme.pages.login')->with('title', 'Login');
    }

    public function login(Request $request){
        $request->validate([
            'username' => 'required|string',
            'pass' => 'required|string',
            'captcha' => 'required|captcha'
        ]);
        
        $response = Http::post(config('services.api.base_url').'/login', [
            'name' => $request->username,
            'password' => $request->pass,
        ]);

        if($response->successful()){
            $data = $response->json();
            // Store user data in session or perform other actions as needed
            $request->session()->put('user', $data['user']);
            return redirect()->route('dashboard');
        } else {
            return back()->withErrors(['login_error' => $response->json('message')])->withInput();
        }
    }
}