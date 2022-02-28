<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

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
        dd($request);
        $this->validate($request, [
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',
            'judul' => 'required|max:255',
            'desSingkat' => 'required',
            'desFull' => 'required',
        ]);

        //upload image
        $image = $request->file('img');
        $new_name = '';

        if ($image != null) {
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/project'), $new_name);
        }
        $save = Project::create([
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
        $image = $request->file('img');
        $new_name = '';
        // dd($image);


        if ($image != null) {
            //hapus old image
            if ($project->img != null) {
                $del = unlink("images/project/" . $project->img);
            }
            //upload new image
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/project'), $new_name);
        } else {
            $new_name = $project->img;
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
