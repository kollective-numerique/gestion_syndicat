<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AgentController extends Controller
{
    public function index()
    {
        return view('agents.login');
    }
    public function login(Request $request)
    {
        $credentials = $request->all();
        $agent =  Agent::where('email', $credentials['email'])->get();
        if (count($agent) > 0) {
            $check_value = Hash::check($credentials['passwd'], $agent[0]->password);
            if ($check_value == true) {
                $request->session()->put('agent', $agent);
                return redirect()->route('agents.dashboard');
            } else {
                return view('agents.login', ['error_login' => true]);
            }
        }
    }
    public function dashboard(Request $request)
    {
        $agent = $request->session()->get('agent');
        return view('admin.dashboard', ['agent' => $agent[0]]);
    }
    public function logout(Request $request)
    {
        $request->session()->forget('agent');
        $request->session()->flush();
        return redirect()->route('accueil');
    }
    public function membres_syndicat(Request $request)
    {
        $agent = $request->session()->get('agent');
        $agent = $agent[0];
        $agents = Agent::where(['entreprise' => $agent->entreprise])->get();
        return view('admin.syndicat', ['agent' => $agent, 'membres' => $agents]);
    }
    public function membres_federation(Request $request)
    {
        $agent = $request->session()->get('agent');
        $agent = $agent[0];
        $agents = Agent::where(['entreprise' => $agent->entreprise, 'federation' => $agent->federation])->get();
        return view('admin.federation', ['agent' => $agent, 'membres' => $agents]);
    }
    public function membres_employe(Request $request)
    {
        $agent = $request->session()->get('agent');
        $agent = $agent[0];
        $agents = Agent::where(['entreprise' => $agent->entreprise])->get();
        return view('admin.employe', ['agent' => $agent, 'membres' => $agents]);
    }
    public function change_pswd(Request $request)
    {
        $agent = $request->session()->get('agent');
        $agent = $agent[0];
        return view('admin.change_pswd', ['agent' => $agent]);
    }
}