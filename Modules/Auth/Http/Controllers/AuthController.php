<?php

namespace Modules\Auth\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('auth::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function login(Request $request)
    {   
        request()->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ]);
        if(Auth::attempt($request->only('email','password'))){
            toast('selamat Datang','success','top-right');
            return redirect()->route('dashboard');
        }else{
            toast('Email / Password Salah','error','top-right');
            return redirect()->back();
        }
        
    }
    public function logout()
    {
        Auth::logout();
        toast('Anda Telah Logout','success','top-right');
        return redirect()->route('auth');

    }
   
}
