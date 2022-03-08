<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Path\To\DOMDocument;
use Intervention\Image\ImageManagerStatic;

class ProjectController extends Controller
{
    public function index()
    {
        $project = Project::orderBy('created_at', 'DESC')->get();
        return view('admin.project.index', compact('project'));
    }

    public function create()
    {
        return view('admin.project.create');
    }
    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',
            'judul' => 'required|max:255',
            'desSingkat' => 'required',
            'desFull' => 'required',
        ]);

        //upload image
        $imagefileuploaded = $request->file('img');
        $new_nameimaged = '';

        if ($imagefileuploaded != null) {
            $new_nameimaged = rand() . '.' . $imagefileuploaded->getClientOriginalName();
            $imagefileuploaded->move(public_path('images/project'), $new_nameimaged);
        }


        $loc = "images\project\desc";
        $dom = new \DOMDocument;
        libxml_use_internal_errors(true);
        $dom->loadHTML($request->desFull, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        libxml_clear_errors();
        $images = $dom->getElementsByTagName('img');
        foreach($images as $img){
            $src = $img->getAttribute('src');
            if(preg_match('/data:image/', $src)){
                preg_match('/data:image\/(?<mime>.*?)\;/', $src ,$groups);
                $mimetype = $groups["mime"];
                $fileNameContent = uniqid();
                $fileNameContentRand = substr(md5($fileNameContent),6,6).'_'.time();
                
                $filepath = ("$loc/$fileNameContentRand.$mimetype");
                // dd('asd');
                $image = ImageManagerStatic::make($src)
                            // ->resize(1200,1200)
                            ->encode($mimetype,100)
                            ->save(public_path($filepath));

                $new_src = asset($filepath);
                $img->removeAttribute('src');
                $img->setAttribute('src',$new_src);
                $img->setAttribute('class', 'img-responsive');

            }
        }
        // dd($dom->saveHTML());

        $save = Project::create([
            'img'           => $new_nameimaged,
            'judul'         => $request->judul,
            'desSingkat'    => $request->desSingkat,
            // 'desFull'       => $request->desFull,
            'desFull'       => $dom->saveHTML(),
        ]);

        if ($save) {
            return redirect()->route('project.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            return redirect()->route('project.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function show(Project $project)
    {
        // $project = Project::find($id);
        return view('admin.project.update', compact('project'));
    }
    public function ngedit(Request $request, $id)
    {
        // dd($request);

        $this->validate($request, [
            'img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3048',
            'judul' => 'required|max:255',
            'desSingkat' => 'required',
            'desFull' => 'required',
        ]);
        $project = Project::findOrFail($id);

        //upload image
        $imagesss = $request->file('img');
        $new_name = '';

        if ($imagesss != null) {
            //hapus old image
            if ($project->img != null) {
                $del = unlink("images/project/" . $project->img);
            }
            //upload new image
            $new_name = rand() . '.' . $imagesss->getClientOriginalName();
            $imagesss->move(public_path('images/project'), $new_name);
        } else {
            $new_name = $project->img;
        }
        // dd($new_name);


        $loc = "images\project\desc";
        $dom = new \DOMDocument;
        libxml_use_internal_errors(true);
        $dom->loadHTML($request->desFull, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        libxml_clear_errors();
        $images = $dom->getElementsByTagName('img');
        foreach($images as $img){
            $src = $img->getAttribute('src');
            if(preg_match('/data:image/', $src)){
                preg_match('/data:image\/(?<mime>.*?)\;/', $src ,$groups);
                $mimetype = $groups["mime"];
                $fileNameContent = uniqid();
                $fileNameContentRand = substr(md5($fileNameContent),6,6).'_'.time();
                
                $filepath = ("$loc/$fileNameContentRand.$mimetype");
                // dd('asd');
                $image = ImageManagerStatic::make($src)
                            // ->resize(1200,1200)
                            ->encode($mimetype,100)
                            ->save(public_path($filepath));

                $new_src = asset($filepath);
                $img->removeAttribute('src');
                $img->setAttribute('src',$new_src);
                $img->setAttribute('class', 'img-responsive');

            }
        }

        $save = $project->update([
            'img' => $new_name,
            'judul' => $request->judul,
            'desSingkat' => $request->desSingkat,
            'desFull' => $request->desFull,
        ]);

        if ($save) {
            return redirect()->route('project.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            return redirect()->route('project.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        if ($project->img != null) {
            $del = unlink("images/project/" . $project->img);
        }
        $project->delete();

        if ($project) {
            //redirect dengan pesan sukses
            return redirect()->route('project.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('project.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
