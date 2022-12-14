<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $adhesion = Agent::where('fonction', 'adherant')->count();
        return view('accueil', ['adhesion' => $adhesion]);
    }
    public function reglement()
    {
        return view('reglement');
    }
    public function adhesion()
    {
        return view('adhesion');
    }
    public function adhesion_save(Request $request)
    {
        $inputs = $request->all();
        $agent = Agent::create([
            'nom' => $inputs['nom'],
            'postnom' => $inputs['postnom'],
            'email' => $inputs['email'],
            'date' => $inputs['date'],
            'sexe' => $inputs['sexe'],
            'matricule' => $inputs['matricule'],
            'entreprise' => $inputs['entreprise'],
            'fonction' => $inputs['fonction'],
            'localite' => $inputs['localite'],
            'federation' => $inputs['federation']
        ]);
        return view('adhesion', ['result' => true]);
    }
}