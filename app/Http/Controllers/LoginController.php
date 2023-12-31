<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            // dd('sukses');
            // dd(Auth::user()->username);
            $role = Auth::user()->role;
            // dd($role);
            if($role === "pembina")
            {
                return redirect()->intended('/admin/perizinan');
            }
            elseif ($role === "admin") {
                return redirect()->intended('/admin/user');
            }
            else 
            {
                return redirect()->intended('/admin/post');
            }
        }

        return back()->with('gagal', 'username atau password salah');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/admin');

    }
}
