<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function dashboard(){
        $data = [
            'users_count' => User::all()->count(),
            'admin' => Admin::find(1),
        ];
        return view('admin.dashboard')->with('data',$data);
    }
}
