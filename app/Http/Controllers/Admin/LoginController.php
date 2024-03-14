<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectRequest;
use App\Http\Requests\AdminLoginRequest;
use Auth;

class LoginController extends Controller
{
    //
    public function create(){
        return view('store.auth.adminlogin');
    }

    public function store(AdminLoginRequest $request){
        // retrieve the validated date
        $data = $request->validated();
        Auth::guard('admin')->attempt(['email' => $data['email'], 'password' => $data['password']]);
        $request->session()->regenerate();
        return redirect()->route('admin.dashboard.index');
    }
}
