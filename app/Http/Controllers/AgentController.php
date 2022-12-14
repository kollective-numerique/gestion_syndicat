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
        return view('agents.login', ['error_login' => true]);
    }
    public function dashboard(Request $request)
    {
        $agent = $request->session()->get('agent');
        $agent = $agent[0];
        $agents = Agent::where(['entreprise' => $agent->entreprise])->count();
        return view('admin.dashboard', ['agent' => $agent, 'nbrAgent' => $agents]);
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
        $agents = Agent::where(['federation' => $agent->federation])->get();
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
        $data = $request->all();
        if ($request->method() == 'POST') {
            $user = Agent::where('email', $data['email'])->firstOrFail();
            $flag = Hash::check($data['passwd'], $user->password);
            if ($flag) {
                $user->password = Hash::make($data['passwd2']);
                $user->save();
                return view('admin.change_pswd', ['agent' => $agent, 'notify' => 'Le mot de passe vient d\'??tre modifi??.']);
            }
            return view('admin.change_pswd', ['agent' => $agent, 'notify' => 'Les mots de passe ne correspondent pas.']);
        }
        return view('admin.change_pswd', ['agent' => $agent]);
    }
    public function update_membres_syndicat(Request $request, $id)
    {
        $agent = $request->session()->get('agent');
        $agent = $agent[0];
        $agent_to_update = Agent::find($id);

        if ($request->method() == 'POST') {
            $updates = $request->all();
            $agent_to_update->nom = $updates['nom'];
            $agent_to_update->postnom = $updates['postnom'];
            $agent_to_update->email = $updates['email'];
            $agent_to_update->date = $updates['date'];
            $agent_to_update->sexe = $updates['sexe'];
            $agent_to_update->matricule = $updates['matricule'];
            $agent_to_update->entreprise = $updates['entreprise'];
            $agent_to_update->fonction = $updates['fonction'];
            $agent_to_update->localite = $updates['localite'];
            $agent_to_update->federation = $updates['federation'];
            $agent_to_update->save();
            return view('admin.update_syndicat', ['agent' => $agent, 'agentToUpdate' => $agent_to_update, 'notify' => true]);
        }
        return view('admin.update_syndicat', ['agent' => $agent, 'agentToUpdate' => $agent_to_update]);
    }
    public function delete_membres_syndicat(Request $request, $id)
    {
        $res = Agent::find($id)->delete();
        return redirect()->route('agents.syndicat');
    }
    public function add_responsable(Request $request)
    {
        $agent = $request->session()->get('agent');
        $agent = $agent[0];
        if ($request->method() == 'POST') {
            $inputs = $request->all();
            $agent = Agent::create([
                'nom' => $inputs['nom'],
                'postnom' => $inputs['postnom'],
                'email' => $inputs['email'],
                'date' => $inputs['date'],
                'sexe' => $inputs['sexe'],
                'fonction' => $inputs['fonction'],
                'matricule' => 'azert1'
            ]);
            return view('admin.add_responsable', ['agent' => $agent, 'result' => true]);
        }
        return view('admin.add_responsable', ['agent' => $agent]);
    }
    public function list_get_admin(Request $request)
    {
        $agent = $request->session()->get('agent');
        $agent = $agent[0];
        $agents = Agent::where(['fonction' => 'pds'])
            ->orWhere(['fonction' => 'pdf'])
            ->orWhere(['fonction' => 'drh'])->get();
        return view('admin.list_get_admin', ['agent' => $agent, 'membres' => $agents]);
    }
}