<?php

namespace App\Http\Controllers;

use App\Models\Solusi;
use Illuminate\Http\Request;

class SolusiController extends Controller
{
    public function index()
    {
        $solusi = Solusi::latest()->first();
        return view('admin.solusi.index', compact('solusi'));
    }
    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3048',
            'imgStrategi' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3048',
            'strategi' => 'required',
            'judulStrategi'=>'required|max:255',
            'judul' => 'required|max:255',
            'desc' => 'required',
        ]);

        $solusi = Solusi::latest()->first();
        //upload image
        $image = $request->file('img');
        $imageS = $request->file('imgStrategi');
        $new_name = '';
        $new_nameS = '';

        if ($solusi != null) {
            if ($image != null) {
                //hapus old image
                if ($solusi->img != null) {
                    $del = unlink("images/solusi/" . $solusi->img);
                }
                //upload new image
                $new_name = rand() . '.' . $image->hashName();
                $image->move(public_path('images/solusi'), $new_name);
            } else {
                $new_name = $solusi->img;
            }

            if ($imageS != null) {
                //hapus old image
                if ($solusi->imgStrategi != null) {
                    $del = unlink("images/solusi/" . $solusi->imgStrategi);
                }
                //upload new image
                $new_nameS = rand() . '.' . $imageS->hashName();
                $imageS->move(public_path('images/solusi'), $new_nameS);
            } else {
                $new_nameS = $solusi->new_nameS;
            }
            $save = $solusi->update([
                'img' => $new_name,
                'judul' => $request->judul,
                'judulStrategi' => $request->judulStrategi,
                'desc' => $request->desc,
                'imgStrategi' => $new_nameS,
                'strategi' => $request->strategi,
            ]);
        } else {
            if ($image != null) {
                $new_name = rand() . '.' . $image->hashName();
                $image->move(public_path('images/solusi'), $new_name);
            }
            if ($imageS != null) {
                $new_nameS = rand() . '.' . $imageS->hashName();
                $imageS->move(public_path('images/solusi'), $new_nameS);
            }
            $save = Solusi::create([
                'img' => $new_name,
                'judul' => $request->judul,
                'judulStrategi' => $request->judulStrategi,
                'desc' => $request->desc,
                'imgStrategi' => $new_nameS,
                'strategi' => $request->strategi,
            ]);
        }

        if ($save) {
            return redirect()->route('solusi.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            return redirect()->route('solusi.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
}
