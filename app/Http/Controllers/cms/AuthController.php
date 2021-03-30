<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Facades\Validator; 

class AuthController extends Controller
{
    public function showLoginForm()
    {
        if(auth()->user()){
            return redirect(route('admin.index'));
        }
        return view('cms.auth.login');
    }

    public function submit(Request $request)
    {
        $credentials = $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::guard('admin')->attempt($credentials)){
            return redirect(route('dashboard.index'));
        } else {
            return back()->with('login', 'failed')->with('username', $request->username);
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect(route('admin.login'))->with('logout', 'success');
    }
    
}
