<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $liste_skills= Skill::orderBy('value', 'desc')->get();

        return view('skill.index',['skills'=>$liste_skills]);
    }

    /**
     * Create the form for creation
     */
    public function create(){
        return view('skill.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $skill= new Skill();
        $skill->name= $request->name;
        $skill->observation= $request->observation;
        $skill->value= $request->value;
        $skill->save();
        return redirect("/admin/skill");
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
        $skill= Skill::find($id);
        return view('skill.edit',['skill'=>$skill]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $skill= Skill::find($id);
        $skill->name= $request->name;
        $skill->observation= $request->observation;
        $skill->value= $request->value;
        $skill->save();
        return redirect('admin/skill');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $skill= Skill::find($id);
        $skill->delete();
        return redirect("admin/skill");
    }
}
