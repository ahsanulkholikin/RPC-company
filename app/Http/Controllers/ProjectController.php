<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $project = Project::latest();
        return view('admin.project.index', compact('project'));
    }

    public function create()
    {
        return view('admin.project.create');
    }
    public function store(Request $request)
    {
        
    }
    public function update(Request $request, $id)
    {
        $project = Project::find($id);

    }
    public function destroy($id)
    {
        //
    }
}
