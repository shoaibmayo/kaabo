<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function home(){

        return view('user.home');
    }
    public function profile(){
        return view('user.profile');
    }
    public function edit(){
        return view('user.edit_profile');
    }
    public function map(){
        return view('user.map');
    }
    public function calendar(){
        return view('user.calendar');
    }
    
    public function updateProfile(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'status' => 'required|string',
            'occupation' => 'required|string',
            'profile_photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file types and size as needed
        ]);

        // Get the current authenticated user
        $user = Auth::user();

        // Update user information
        $user->update([
            'first_name' => strtok($request->input('name'), ' '), // Extract first name
            'last_name' => trim(strstr($request->input('name'), ' ')), // Extract last name
            'email' => $request->input('email'),
            'status' => $request->input('status'),
            'occupation' => $request->input('occupation'),
        ]);

        // Handle profile photo upload
        if($request->hasfile('profile_photo')){
            if($user->profile_photo!=null){
                $filePath = public_path('assets/img/userprofile/' . $user->profile_photo);
                if (file_exists($filePath)) {
                    
                    unlink($filePath);
                }
            }

                $imageName = time().'.'.$request->profile_photo->extension();
                $request->profile_photo->move(public_path('assets/img/userprofile'),$imageName);
                $user->update([
                    'profile_photo' => $imageName,
                ]);
        
       }
        return response()->json(['message' => 'Profile updated successfully']);
    }

    public function updatePassword(Request $request){
        $user = Auth::user();
        
        if(!Hash::check($request->current, $user->password)){
            return response()->json(['currentError','Unmatched Password!']);
        }
        if($request->password!=$request->confirm){
            return response()->json(['passwordError','Confirm Password Not Matched!']);
        }
        $user->update(['password'=>Hash::make($request->password)]);

        return response()->json(['success','Password Change Successfully!']);
    }
}
