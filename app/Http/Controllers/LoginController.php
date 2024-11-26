<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function login() : View {
        return view('login');
    }
    public function doLogin(LoginRequest $request) : RedirectResponse{
        try{
            $result = $request->validated();
            dd($result);

        }catch (\Exception $e){
            return redirect()->route('login')->withErrors($e->getMessage());
        }

        return redirect('dashboard');
    }
}
