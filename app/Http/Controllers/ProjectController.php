<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Client;
use App\Services\FileUploader;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $liste_projects= Project::orderBy('categorie', 'desc')->get();
        return view('project.index',['projects'=>$liste_projects]);
    }

    /**
     * Create the form for creation
     */
    public function create(){
        $clients= Client::all();
        return view('project.create',['clients'=>$clients]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $project= new Project();
        $project->description= $request->description;
        $project->detail= $request->detail;
        $project->categorie= $request->categorie;
        $project->image= FileUploader::uploadImage($request,'img/project/');
        $project->client= $request->client;
        $project->hours_support= $request->hours_support;
        $project->awards= $request->awards;
        $project->date= $request->date;
        $project->url= $request->url;
        $project->is_visible= $request->is_visible;
        $project->save();
        return redirect("/admin/project");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $project= Project::find($id);
        return view('project.show',['project'=>$project]);
    }

    /**
     * Create the form for creation
     */
    public function edit(string $id){
        $project= Project::find($id);
        $clients= Client::all();
        return view('project.edit',['project'=>$project,'clients'=>$clients]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id){
        $project= Project::find($id);
        $project->description= $request->description;
        $project->detail= $request->detail;
        $project->categorie= $request->categorie;
        $project->image= FileUploader::updateImage($request,'img/project/',$project->image);
        $project->client= $request->client;
        $project->hours_support= $request->hours_support;
        $project->awards= $request->awards;
        $project->date= $request->date;
        $project->url= $request->url;
        $project->is_visible= $request->is_visible;
        $project->save();
        return redirect('admin/project');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id){
        $project= Project::find($id);
        FileUploader::deleteFile($project->image);
        $project->delete();
        return redirect("admin/project");
    }
}
