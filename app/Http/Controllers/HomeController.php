<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\About;
use App\Models\Certificat;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Formation;
use App\Models\Experiance;
use App\Models\Skill;
use App\Models\Project;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $client_number= Client::count();
        $formation_number= Formation::count();
        $experience_number= Experiance::count();
        $skill_number= Skill::count();
        $project_number= Project::count();
        $certeficate_number= Certificat::count();
        return view('home',[
            "client_number"=>$client_number,
            "formation_number"=>$formation_number,
            "experience_number"=>$experience_number,
            "skill_number"=>$skill_number,
            "project_number"=>$project_number,
            'certeficate_number'=>$certeficate_number
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function main()
    {
        $liste_formations= Formation::orderBy('date', 'desc')->get();
        $liste_experiences= Experiance::orderBy('date', 'desc')->get();
        
        $liste_abouts= About::all();
        $liste_abouts1= $liste_abouts->chunk($liste_abouts->count()/2)[0];
        $liste_abouts2= $liste_abouts->chunk($liste_abouts->count()/2)[1];
        
        $liste_skills= DB::table('skills')->where('value', '>=', 50)->orderBy('value', 'desc')->get();
        $liste_skills1= $liste_skills->chunk($liste_skills->count()/2)[0];
        $liste_skills2= $liste_skills->chunk($liste_skills->count()/2)[1];

        $liste_clients= Client::all();
        $liste_contacts= Contact::all();
        $liste_projects= DB::table('projects')->where('is_visible', '<>', 0)->get();

        $hours_support= Project::sum('hours_support');

        $certeficates_number= Certificat::count();
        $liste_certificates= Certificat::orderBy('date', 'desc')->get();

        return view('index',
            ['formations'=>$liste_formations,
            'experiences'=>$liste_experiences,
            'abouts1'=>$liste_abouts1,
            'abouts2'=>$liste_abouts2,
            'skills1'=>$liste_skills1,
            'skills2'=>$liste_skills2,
            'clients'=>$liste_clients,
            'contacts'=>$liste_contacts,
            'projects'=>$liste_projects,
            'hours_support'=>$hours_support,
            'certeficates_number'=>$certeficates_number,
            'liste_certificates'=>$liste_certificates
        ]);
    }
}
