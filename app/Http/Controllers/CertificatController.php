<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\certificat;

class CertificatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $liste_certificats= certificat::orderBy('date', 'desc')->get();
        return view('certificat.index',['certificats'=>$liste_certificats]);
    }

    /**
     * Create the form for creation
     */
    public function create(){
        return view('certificat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $certificat= new certificat();
        $certificat->name= $request->name;
        $certificat->organisation= $request->organisation;
        $certificat->url= $request->url;
        $certificat->skills= $request->skills;
        $certificat->date= $request->date;
        $certificat->is_visible= $request->is_visible;
        $certificat->save();
        return redirect("/admin/certificat");
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
        $certificat= certificat::find($id);
        return view('certificat.edit',['certificat'=>$certificat]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $certificat= certificat::find($id);
        $certificat->name= $request->name;
        $certificat->organisation= $request->organisation;
        $certificat->url= $request->url;
        $certificat->skills= $request->skills;
        $certificat->date= $request->date;
        $certificat->is_visible= $request->is_visible;
        $certificat->save();
        return redirect('admin/certificat');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $certificat= certificat::find($id);
        $certificat->delete();
        return redirect("admin/certificat");
    }
}
