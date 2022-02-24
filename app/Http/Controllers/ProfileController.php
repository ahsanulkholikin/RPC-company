<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = Profile::latest()->first();
        return view('admin.profile.index', compact('profile'));
    }
    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'wa'        => 'required|max:255',
            'walink'    => 'required|max:255',
            'telp'      => 'required|max:255',
            'email'     => 'required|max:255',
            'fb'        => 'required|max:255',
            'fblink'    => 'required|max:255',
            'ig'        => 'required|max:255',
            'iglink'    => 'required|max:255',
            'alamat'    => 'required',
        ]);

        $profile = Profile::latest()->first();

        if ($profile != null) {

            $save = $profile->update([
                'wa'        => $request->wa,
                'walink'    => $request->walink,
                'telp'      => $request->telp,
                'email'     => $request->email,
                'fb'        => $request->fb,
                'fblink'    => $request->fblink,
                'ig'        => $request->ig,
                'iglink'    => $request->iglink,
                'alamat'    => $request->alamat,
            ]);
        } else {
            $save = Profile::create([
                'wa'        => $request->wa,
                'walink'    => $request->walink,
                'telp'      => $request->telp,
                'email'     => $request->email,
                'fb'        => $request->fb,
                'fblink'    => $request->fblink,
                'ig'        => $request->ig,
                'iglink'    => $request->iglink,
                'alamat'    => $request->alamat,
            ]);
        }

        if ($save) {
            return redirect()->route('profile.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            return redirect()->route('profile.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
}
