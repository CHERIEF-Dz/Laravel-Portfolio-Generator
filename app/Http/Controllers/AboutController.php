<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $liste_abouts= About::all();
        return view('about.index',['abouts'=>$liste_abouts]);
    }

    /**
     * Create the form for creation
     */
    public function create(){
        return view('about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $about= new About();
        $about->information= $request->information;
        $about->value= $request->value;
        $about->save();
        return redirect("/admin/about");
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
        $about= About::find($id);
        return view('about.edit',['about'=>$about]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $about= About::find($id);
        $about->information= $request->information;
        $about->value= $request->value;
        $about->save();
        return redirect('admin/about');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $about= About::find($id);
        $about->delete();
        return redirect("admin/about");
    }
}
