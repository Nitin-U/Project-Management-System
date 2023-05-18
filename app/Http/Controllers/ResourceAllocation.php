<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\User;
use App\Models\Task;
use App\Models\Resource;

class ResourceAllocation extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams = Team::all();
        return view('resources.create', compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->has('search_task')) {
            $request->validate([
                'team_id' => 'required',
            ]);
            
            $teamTasks = Task::where('team_id', $request->team_id)->get();
            $resources = Resource::all();
            
            $teams = Team::all();
            
            return view('resources.create', compact('teams', 'teamTasks', 'resources'));
        }
        
        if ($request->has('submit')) { // Check if the form is submitted
            $request->validate([
                'team_id' => 'required',
                'task_id' => 'required',
                'resource_id' => 'required',
            ], [
                'team_id.required' => 'Please select a team.',
                'task_id.required' => 'Please select a task.',
                'resource_id.required' => 'Please select a resource.',
            ]);
            
            // Handle form submission and redirect if validation fails
            // ...
        }
        $task = Task::find($request->input('task_id'));
        $resource = Resource::find($request->input('resource_id'));
        
        // Create task-resource relationship in the database
        $task->resources()->attach($resource);
        //dd($task);
        
        return redirect()->route('resources.create')->with('success', 'Resource allocation saved successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
