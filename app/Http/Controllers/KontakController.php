<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        $kontak = Kontak::latest()->get();
        return view('admin.kontak.index', compact('kontak'));
    }
    public function create()
    {
        return view('admin.kontak.create');
    }
    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            "name"      => "required|max:255",
            "email"     => "required|email|max:255",
            "subject"   => "required|max:255",
            "message"  => "required",
        ]);

        $save = Kontak::create([
            "name"      => $request->name,
            "email"     => $request->email,
            "subject"   => $request->subject,
            "message"  => $request->message,
        ]);

        if ($save) {
            return redirect()->route('home')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            return redirect()->route('home')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
    public function destroy($id)
    {
        $kontak = Kontak::findOrFail($id);
        $kontak->delete();

        if ($kontak) {
            //redirect dengan pesan sukses
            return redirect()->route('kontak.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('kontak.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
