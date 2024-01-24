<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Models\ThirdParty;
use App\Http\Requests\PostLogin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use DB;

class AuthController extends Controller
{

    public function login()
    {
        return view('pages.login');
    }

    public function postLogin(LoginRequest $request)
    {
        $input = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        try {
            if (Auth::attempt($input)) {
                return redirect('home');
            } else {
                session()->flash('error', 'These credentials do not match our records.');
                return redirect()->back()->withInput();
            }
        } catch (\Exception $e) {dd($e->getMessage());
            return redirect()->back()->withInput()->withErrorMessage($e->getMessage());
        }
    }

    public function logout()
    {
    	Auth::logout();
    	return redirect('login');
    }

}
