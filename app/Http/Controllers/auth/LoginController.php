<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('dashboard');
        }else {
            //redirect dengan pesan error
            return redirect()->route('login')->with(['error' => 'Cek kembali Email dan Password yang anda gunakan!']);
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function dashboard()
    {
        return view('admin.dashboard.index');
    }
    public function profile()
    {
        $profile = Auth::user();
        return view('admin.profile.index', compact('profile'));
    }
    public function update(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);
        $data = [
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];
        $save = User::findOrFail(Auth::user()->id)->update($data);
        // dd($save);

        if ($save) {
            //redirect dengan pesan sukses
            return redirect()->route('profile')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('profile')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
}
