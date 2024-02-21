<?php

namespace App\Http\Controllers\Admin;

use App\Models\Bank;
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

    public function userList(){
        $data = [
            'users_count' => User::all()->count(),
            'admin' => Admin::find(1),
            'users' => User::all(),
        ];
        return view('admin.users.user-list')->with('data',$data);
    }

    public function bankList(){
        $data = [
            'users_count' => User::all()->count(),
            'admin' => Admin::find(1),
            'banks' => Bank::all(),
        ];
        return view('admin.banks.bank-list')->with('data',$data);
    }
    public function storeBank(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'bankName' => 'required|string|max:255',
            'bankUrl' => 'required|url|max:255',
        ]);

        // Create a new bank instance
        $bank = new Bank();
        $bank->name = $validatedData['bankName'];
        $bank->url = $validatedData['bankUrl'];
        $bank->save();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Bank added successfully!');
    }
}
