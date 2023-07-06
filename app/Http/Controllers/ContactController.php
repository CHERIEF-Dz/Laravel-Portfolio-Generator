<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $liste_contacts= Contact::all();
        return view('contact.index',['contacts'=>$liste_contacts]);
    }

    /**
     * Create the form for creation
     */
    public function create(){
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $contact= new contact();
        $contact->name= $request->name;
        $contact->link= $request->link;
        $contact->icon= $request->icon;
        $contact->save();
        return redirect("/admin/contact");
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
        $contact= contact::find($id);
        return view('contact.edit',['contact'=>$contact]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $contact= contact::find($id);
        $contact->name= $request->name;
        $contact->link= $request->link;
        $contact->icon= $request->icon;
        $contact->save();
        return redirect('admin/contact');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contact= contact::find($id);
        $contact->delete();
        return redirect("admin/contact");
    }
}
