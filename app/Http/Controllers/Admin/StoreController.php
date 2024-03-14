<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Gate;
use Auth;

class StoreController extends Controller
{
    //

    public function index(){
        if(Auth::guard('admin')->user()->isSuperAdmin()){
            return view('admin.storeSetup');
        }
        return redirect()->route('admin.profile');
        
       
    }

    
}
