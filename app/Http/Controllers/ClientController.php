<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Services\FileUploader;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $liste_clients= Client::all();
        return view('client.index',['clients'=>$liste_clients]);
    }

    /**
     * Create the form for creation
     */
    public function create(){
        return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $client= new Client();
        $client->name= $request->name;
        $client->job= $request->job;
        $client->image= FileUploader::uploadImage($request,'img/client/');
        $client->testimonial= $request->testimonial;
        $client->testimonial_link= $request->testimonial_link;
        $client->save();
        return redirect("/admin/client");
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
        $client= Client::find($id);
        return view('client.edit',['client'=>$client]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $client= Client::find($id);
        $client->name= $request->name;
        $client->job= $request->job;
        $client->image= FileUploader::updateImage($request,'img/client/',$client->image);
        $client->testimonial= $request->testimonial;
        $client->testimonial_link= $request->testimonial_link;
        $client->save();
        return redirect('admin/client');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $client= Client::find($id);
        unlink($client->image);
        $client->delete();
        return redirect("admin/client");
    }
}
