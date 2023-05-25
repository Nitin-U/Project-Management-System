<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use App\Notifications\TeamNotification;
use Illuminate\Support\Facades\Notification;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
        if (Gate::allows('isPM')) {
            // If the user is a project manager, retrieve all teams
            $teams = Team::all();
        } else {
            // If the user is not a project manager, retrieve their assigned teams
            $teams = auth()->user()->teams;
        }  
        return view('teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('isPM');

        $users = User::all();
        $teams = Team::all();
        return view('teams.create', compact('users','teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $validateMsg = $request -> validate([
            'project_title' => 'required',
            'team_name' => 'required',
            'users' => 'required|array|min:1', // Ensure at least one user is selected
        ],[
            'project_title' => 'Project Name is required',
            'team_name' => 'Team Name is required',
        ]);

        $team = Team::create([
            'team_name' => $request->input('team_name'),
            'project_title' => $request->input('project_title')
        ]);

        $team->users()->sync($request->input('users'));
        //dd($team);

        //Send Notification
        $users = $team->users;
        //dd($users);
        
        return redirect()->route('teamNotification',['users'=>$users->toArray(),'team'=>$team->toArray()]);
        //return redirect()->route('teams.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = Team::findOrFail($id);
        $this->authorize('isPM');

        $users = User::all();
        return view('teams.edit', compact('team', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $team_id = $request->input('team_id');
        $team = Team::findOrFail($team_id);
        
        $validateMsg = $request->validate([
            'project_title' => 'required',
            'team_name' => 'required',
            'users' => 'required|array|min:1', // Ensure at least one user is selected
        ], [
            'project_title.required' => 'Project Name is required',
            'team_name.required' => 'Team Name is required',
        ]);
    
        $team->update([
            'team_name' => $request->input('team_name'),
            'project_title' => $request->input('project_title')
        ]);
    
        $team->users()->sync($request->input('users'));
    
        // Redirect to the team details page or any other appropriate action
        return redirect()->route('teams.index')->with('success', 'Team Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        $this->authorize('isPM');

        // Delete the team
        $team->delete();

        // Redirect to the index page or any other appropriate action
        return redirect()->route('teams.index')->with('success', 'Team Deleted Successfully');
    }
}
