<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //

    public function create(){
        return view('store.auth.adminregister');
    }

    
}
