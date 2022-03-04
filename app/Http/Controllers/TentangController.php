<?php

namespace App\Http\Controllers;

use App\Models\Tentang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TentangController extends Controller
{
    public function index()
    {
        $tentang = Tentang::latest()->first();
        return view('admin.tentang.index', compact('tentang'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3048',
            'judul' => 'required|max:255',
            'desc' => 'required',
        ]);

        $tentang = Tentang::latest()->first();
        //upload image
        $image = $request->file('img');
        $new_name = '';


        if ($tentang != null) {
            if ($image != null) {
                //hapus old image
                if ($tentang->img != null) {
                    // $store = public_path('images\tentang\2095251130.jpg');
                    $del = unlink("images/tentang/" . $tentang->img);
                    // dd($store);
                }
                //upload new image
                $new_name = rand() . '.' . $image->getClientOriginalName();
                $image->move(public_path('images/tentang'), $new_name);
            } else {
                $new_name = $tentang->img;
            }
            $save = $tentang->update([
                'img' => $new_name,
                'judul' => $request->judul,
                'desc' => $request->desc,
            ]);
        } else {
            if ($image != null) {
                $new_name = rand() . '.' . $image->getClientOriginalName();
                $image->move(public_path('images/tentang'), $new_name);
            }
            $save = Tentang::create([
                'img' => $new_name,
                'judul' => $request->judul,
                'desc' => $request->desc,
            ]);
        }

        if ($save) {
            return redirect()->route('tentang.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            return redirect()->route('tentang.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
}
