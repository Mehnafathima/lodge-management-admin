<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function login(){
        return view('Authentication.login');
    }
    public function doLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false, 'message' => 'Invalid email or password']);
        }
    }
    // public function doLogin(Request $request)
    // {
    //     // return $request->all();
    //     // var_dump($request->all());
    //     // $request->validate([
    //     //     'email' => 'required|email',
    //     //     'password' => 'required',
    //     // ]);
    //     // $credentials = $request->only('email', 'password');
    //     $credentials =array(
    //         'email' => $request->email,
    //         'password' => $request->password
    //     );
    //     // Check if the user exists with the provided email
    //     // $user = Usercredentials::where('email', $credentials['email'])->first();
        
    //     if (Auth::attempt($credentials)) {
        
    //         // Authentication passed
    //         return 'success';
    //         // return response()->json(['success' => true, 'message' => 'Login successful']);
    //     } else {
    //         // Authentication failed
    //         return 'fail';

    //         // return response()->json(['success' => false, 'message' => 'Invalid credentials'], 401);
    //     }
        
    // }
    public function dashboard(){
        return view('dashboard');
    }
    public function customer(){
        return view('Pages.customer');
    }
}
