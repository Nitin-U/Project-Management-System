<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\User;
use App\Models\Task;

class TaskAssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tasks.index', [
            'teams' => Team::all(),
            'users' => User::all(),
            'tasks' => Task::all()
        ]);
        // $users = User::all();
        // $teams = Team::all(); 
        // $tasks = Task::all();  
        // return view('tasks.index', compact('users','teams','tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams = Team::all();
        $users = User::all();
        $tasks = Task::all();

        return view('tasks.create', compact('teams', 'users', 'tasks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'team_id' => 'required|exists:teams,id',
            'user_id' => 'required|exists:team_member,user_id,team_id,' . $request->input('team_id'),
            'task_name' => 'required|string',
            'description' => 'required|string',
            'due_date' => 'required|date'
        ]);
        
    
        $task = new Task([
            'task_name' => $request->input('task_name'),
            'description' => $request->input('description'),
            'due_date' => $request->input('due_date'),
            'team_id' => $request->input('team_id')
        ]);
    
        $user = User::find($request->input('user_id'));
        //dd($request);
    
        $user->tasks()->save($task);
    
        return redirect()->route('tasks.index')->with('success', 'Task assigned successfully.');
    
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $team = Team::findOrFail($id);
        $teamMembers = User::whereHas('teams', function($query) use ($id) {
            $query->where('team_id', $id);
        })->get();

        return view('tasks.show', compact('team', 'teamMembers'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
