<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experiance;

class ExperianceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $liste_experiences= Experiance::orderBy('date', 'desc')->get();
        return view('experience.index',['experiences'=>$liste_experiences]);
    }

    /**
     * Create the form for creation
     */
    public function create(){
        return view('experience.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $experience= new Experiance();
        $experience->title= $request->title;
        $experience->date= $request->date;
        $experience->duration= $request->duration;
        $experience->location= $request->location;
        $experience->description= $request->description;
        $experience->save();
        return redirect("/admin/experience");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Create the form for creation
     */
    public function edit(string $id){
        $experience= Experiance::find($id);
        return view('experience.edit',['experience'=>$experience]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $experience= Experiance::find($id);
        $experience->title= $request->title;
        $experience->date= $request->date;
        $experience->duration= $request->duration;
        $experience->location= $request->location;
        $experience->description= $request->description;
        $experience->save();
        return redirect('admin/experience');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $experience= Experiance::find($id);
        $experience->delete();
        return redirect("admin/experience");
    }
}
