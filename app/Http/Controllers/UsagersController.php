<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsagersSingUpRequest;
use Illuminate\Http\Request;
use Symfony\Component\CssSelector\Exception\ExpressionErrorException;
use Symfony\Component\ErrorHandler\Debug;

class UsagersController extends Controller
{

    public function showLoginForm(Request $request){
        return view('usagers.login');
    }
    public function showSingUpForm(Request $request){
        return view('usagers.singup');
    }
    public function doSingUp(UsagersSingUpRequest $request){
        try{
            $validations = $request->validated();
            dd($validations);
        }catch (\Exception $e){
            dd($e);

            return view('usagers.singup')->with('error', $e->getMessage());
        }


    }

}
