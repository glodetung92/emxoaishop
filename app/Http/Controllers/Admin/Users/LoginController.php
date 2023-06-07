<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index() {
        return view('admin.users.login', [
            'title' => 'Login System'
        ]);
    }

    public function  store(Request $request) {
       $this->validate($request, [
            'email' => 'required|email:filter',
            'password' => 'required'
       ]);

       if(Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
       ], $request->input('remember'))) {

            return redirect()->route('admin');
       }

       $request->session()->flash('error', 'Email or Password is not exactly');
       return redirect()->back();
    }
}
