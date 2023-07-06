<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $liste_settings= Setting::all();
        return view('setting.index',['settings'=>$liste_settings]);
    }

    /**
     * Create the form for creation
     */
    public function create(){
        return view('setting.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $setting= new Setting();
        $setting->information= $request->information;
        $setting->value= $request->value;
        $setting->save();
        return redirect("/admin/setting");
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
        $setting= Setting::find($id);
        return view('setting.edit',['setting'=>$setting]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $setting= Setting::find($id);
        $setting->information= $request->information;
        $setting->value= $request->value;
        $setting->save();
        return redirect('admin/setting');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $setting= Setting::find($id);
        $setting->delete();
        return redirect("admin/setting");
    }
}
