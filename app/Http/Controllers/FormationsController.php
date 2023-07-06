<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formation;

class FormationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $liste_formations= Formation::orderBy('date', 'desc')->get();
        return view('formation.index',['formations'=>$liste_formations]);
    }

    /**
     * Create the form for creation
     */
    public function create(){
        return view('formation.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formation= new Formation();
        $formation->title= $request->title;
        $formation->date= $request->date;
        $formation->location= $request->location;
        $formation->description= $request->description;
        $formation->save();
        return redirect("/admin/formation");
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
        $formation= Formation::find($id);
        return view('formation.edit',['formation'=>$formation]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $formation= Formation::find($id);
        $formation->title= $request->title;
        $formation->date= $request->date;
        $formation->location= $request->location;
        $formation->description= $request->description;
        $formation->save();
        return redirect('admin/formation');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $formation= Formation::find($id);
        $formation->delete();
        
        return redirect("admin/formation");
    }
}
