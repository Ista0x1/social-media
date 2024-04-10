<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authLogin(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        $user = User::where('email',$validated['email'])->first();

        if(!$user){
            return back()->with('fail','Incorrect email');
        }
        if (Hash::check($validated['password'], $user->password)) {
            $request->session()->put('LoggedUser', $user->id);
            return  redirect('thread');
        }
        return  redirect()->back()->with('fail' , 'Incorrect Password');
    }
}
