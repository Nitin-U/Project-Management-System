@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">{{ $team->team_name }} Tasks</div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Team Member</th>
                    <th>Task</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teamMembers as $member)
                <tr>
                    <td>{{ $member->name }}</td>
                    <td>
                        @foreach ($member->tasks->where('team_id', $team->id) as $task)
                            {{ $task->task_name }}<br>
                        @endforeach
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
