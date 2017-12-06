<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function admin(){
        return view('admin.profile');
    }
    public function cfc(){
        return view('cfc.profile');
    }
    public function supplier(){
        return view('supplier.profile');
    }

}