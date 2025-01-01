<?php

namespace App\Http\Controllers;

use App\Models\SuperAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function adminLoginForm(){
        return view("admin.auth.admin-login");
    }

    public function login(Request $request){
        $credentials=$request->validate([
            "email"=> ['required','email'],
            'password'=> ['required'],
        ]);

        $password=trim($request->password);
       
        $user=SuperAdmin::where('email',$request->email)->first();
        // dd($user);
        // dd(  "db password: ".$user->password,"user enter password :".$request->password,);

        // if($user && Hash::check($request->password,"user enter password :". $user->password)){
        //     dd("Password matches !");
        // }
        // else{
        //     dd("Password mismatch !");
        // }
        // $user->password=Hash::make($request->password);
        // $user->save();
        // if($user && $user->password ===$password){
        //     dd("Password matches!");
        // } else {
        //     dd("Password mismatch!");
        // }
        // if ($user && Hash::check($request->password, $user->password)) {
        //     dd("Password matches!");
        // } else {
        //     dd("Password mismatch!");
        // }
        

        $remember=$request->has('remember');

        if(Auth::guard('admins')->attempt($credentials,$remember)){
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors([
            'email'=> 'The provided credentials do not match',
        ]);

    }


    public function logout(Request $request){
        Auth::guard('admins')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

}
