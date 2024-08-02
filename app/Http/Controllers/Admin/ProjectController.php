<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Type;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::paginate(10);
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Project $project)
    {
        $types = Type::all();
        return view('admin.projects.create', compact("types"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "nome" => ["required", "min:1", "max:255"],
            "type_id" =>["required", "integer", "exists:types,id"],
            "linguaggio" =>["required", "min:1", "max:255"],
            "info" =>["nullable", "max:255"],
            "url_repo" =>["required", "url", "min:4", "max:255"],
        ]);
        $newProject = Project::create($data);

        return redirect()->route('admin.projects.show', $newProject);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('admin.projects.show', compact("project"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $types = Type::all();
        return view('admin.projects.edit', compact("project", "types"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->validate([
            "nome" => ["required", "min:1", "max:255"],
            "type_id" =>["required", "integer", "exists:types,id"],
            "linguaggio" =>["required", "min:1", "max:255"],
            "info" =>["nullable", "max:255"],
            "url_repo" =>["required", "url", "min:4", "max:255"],
        ]);
        $project->update($data);

        return redirect()->route("admin.projects.show", $project);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.projects.index');
    }
}