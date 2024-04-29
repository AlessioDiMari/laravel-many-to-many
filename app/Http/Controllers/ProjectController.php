<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Type;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();

        return view("admin.projects.index", compact("projects"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();

        return view("admin.projects.create", compact("types"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {

        // dd($request);

        $request->validated();

        $newProject = new Project();
        $newProject->fill($request->all());

        // controllo se è presente un filein arrivo nella request
        if( $request->hasFile("cover_image")){
            
        //     // salvo il percorso dell'immagine e la suddetta nel server
            $path = Storage::disk("public")->put("project_image", $request->cover_image,);
            $newProject->cover_image = $path;

        }


        $newProject->save();

        return redirect()->route("admin.projects.show", $newProject->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view("admin.projects.show", compact("project"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view("admin.projects.edit", compact("project"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreProjectRequest $request, Project $project)
    {
        $request->validated();

        $project->update($request->all());

        return redirect()->route("admin.projects.show", $project->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route("admin.projects.index");
    }
}
