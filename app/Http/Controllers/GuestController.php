<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use App\Models\Profile;
use App\Models\Project;
use App\Models\Solusi;
use App\Models\Tentang;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        $tentang = Tentang::first();
        $solusi = Solusi::first();
        $profile = Profile::first();
        $project = Project::latest()->paginate(9);
        return view('guest.home.index',compact('tentang','solusi','profile','project'));
    }
    public function article($id,$slug)
    {
        // $project = Project::find($id);
        $project = Project::where([
            ["id","=",$id],
            ["slug","=",$slug],
            ])->first();

        if(empty($project)){
            return abort(404);
        }
        $profile = Profile::first();

        return view('guest.article.index',compact('project','profile'));
    }
    public function kebijakan()
    {
        $profile = Profile::first();
        return view('guest.term.index',compact('profile'));
    }
    public function kontakStore(Request $request)
    {
        // dd($request);
        $validate = $this->validate($request, [
            "name"      => "required|max:255",
            "email"     => "required|email|max:255",
            "subject"   => "required|max:255",
            "message"   => "required",
        ]);
        if(!$validate){
            return redirect()->route('home')->with(['error' => 'Data Gagal Disimpan!']);
        }

        $save = Kontak::create([
            "name"      => $request->name,
            "email"     => $request->email,
            "subject"   => $request->subject,
            "message"  => $request->message,
        ]);

        if ($save) {
            return redirect()->route('home')->with(['success' => 'Data Berhasil Terkirim!']);
        } else {
            return redirect()->route('home')->with(['error' => 'Data Gagal Terkirim!']);
        }
    }
    
    
}
