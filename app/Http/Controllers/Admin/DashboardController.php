<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models;
class DashboardController extends Controller
{
    //
    public function index(){
        $storeSetUp = Models\StoreInformation::find(1);
        if(is_null($storeSetUp)){
             return redirect()->route('admin.store.index');
            
        }

        return view('admin.index');
    }

    public function logout(){
        Auth::guard('admin')->logout();
            return redirect()->route('admin.login.create')->with('message', 'You logged out')
                                                      ->with('message-color', 'alert-success');
    }
}
