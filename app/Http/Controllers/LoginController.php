<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function index()
    {
        return view('auth.login');
    }
    public function Authentic(Request $request)
    {
        $credentials = $request->validate([
            'nip' => ['required'],
            'password' => ['required'],
        ]);
        $nip = $request->nip;
        $password = $request->password;
        $user = User::where('nip', $nip)->first();
        // dd($email);
        if ($user != null) {
            if (md5($password) == $user->password) {
                Auth::login($user);
                if (Auth::user()->status_pegawai != '') {
                    return redirect('dashboard');
                } else if (Auth::user()->status_pegawai == '') {
                    return redirect('dashboardPeserta');
                } else {
                    // login gagal
                    return redirect('login?gagal');
                }
            } else {
                // login gagal
                return redirect('login?gagal');
            }
        } else {
            // login gagal
            return redirect('login?gagal');
        }
    }


    public function Logout(Request $request)
    {
        Auth::Logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
