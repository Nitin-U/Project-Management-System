@extends('layouts.app')

@section('content')
<!-- <form class="mt-5 pt-5" method="POST" action="{{ route('tasks.store') }}">
    @csrf

    <div class="form-group">
        <label for="team_name">Team Name:</label>
        <select class="form-control" id="team_name" name="team_id" onchange="this.form.find()">
            <option value="">Select Team</option>
            @foreach ($teams as $team)
                <option value="{{ $team->id }}" @if(old('team_id') == $team->id) selected @endif>{{ $team->team_name }}</option>
            @endforeach
        </select>
        <button type="find" class="btn btn-primary">Find</button>
    </div>

    @if(!empty(old('team_id')))
        <div class="form-group">
            <label for="user_assign">Assign to:</label>
            <select class="form-control" id="user_assign" name="user_id">
                <option value="">Select User</option>
                @foreach ($users as $user)
                    @if($user->teams->contains('id', old('team_id')))
                        <option value="{{ $user->id }}" @if(old('user_id') == $user->id) selected @endif>{{ $user->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
    @endif

    <div class="form-group">
        <label for="task_name">Task Name:</label>
        <input type="text" class="form-control" id="task_name" name="task_name" value="{{ old('task_name') }}">
    </div>

    <div class="form-group">
        <label for="description">Description:</label>
        <textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>
    </div>

    <div class="form-group">
        <label for="due_date">Due Date:</label>
        <input type="date" class="form-control" id="due_date" name="due_date" value="{{ old('due_date') }}">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

</form> -->

<link rel="stylesheet" href="/css/teams_create.css">
<link rel="stylesheet" href="/css/footer.css">
<!-- Bi Bootstrap Icon CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

<style>
span,
.bi-card-list,
.bi-person-check,
.bi-people,
.bi-list-check,
.bi-gear-wide-connected,
.bi-chat-dots {
    color: white;
}
.bi-list-check{
        color: #B61C1C !important;
    }
</style>

<div class="team_create" style="overflow-x: hidden;">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    @can('isPM')
                    <li class="nav-item">
                        <a href="{{ route('teams.create') }}" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Assemble Team</span>
                        </a>
                    </li>
                    @endcan
                    <li>
                        <a href="{{ route('teams.index') }}" class="nav-link align-middle px-0">
                            <i class="fs-4 bi bi-person-check"></i> <span class="ms-1 d-none d-sm-inline">All
                                Teams</span>
                        </a>
                    </li>
                    @can('isPM')
                    <li>
                        <a href="{{ route('tasks.create') }}" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi bi-card-list"></i></i> <span class="ms-1 d-none d-sm-inline">Assign
                                Tasks</span></a>
                    </li>
                    @endcan
                    <li>
                        <a href="{{ route('tasks.index') }}" class="nav-link px-0 align-middle">
                        <i class="fs-4 bi bi-list-check"></i> <span class="ms-1 d-none d-sm-inline">All
                                Tasks</span></a>
                    </li>
                    @can('isPM')
                    <li>
                        <a href="{{ route('resources.create') }}" class="nav-link px-0 align-middle">
                        <i class="fs-4 bi bi-gear-wide-connected"></i> <span class="ms-1 d-none d-sm-inline">Assign Resources</span></a>
                    </li>
                    @endcan
                    <li>
                        <a href="{{ route('resources.create') }}" class="nav-link px-0 align-middle">
                        <i class="fs-4 bi bi-chat-dots"></i> <span class="ms-1 d-none d-sm-inline">Message</span></a>
                    </li>
                </ul>
                <hr>
            </div>
        </div>
        <div class="col">
            <!-- <div class="col">
            
            <div class="row row-cols-1 row-cols-md-3 g-4 m-2">
                @foreach ($teams as $team)
                <div class="col col-md-4">
                    <div class="card h-100">
                    <div class="position-relative">
                        <img src="/images/team.jpg" class="card-img-top" alt="...">
                        <h1 class="card-title position-absolute w-100 text-center" style="top: 50%; transform: translateY(-50%); color: white;">{{ $team->team_name }}</h1>
                        <div class="overlay"></div>
                    </div>
                    <div class="card-body">
                        <p class="card-text text-center"> <a href="{{ route('tasks.show', $team) }}" style="text-decoration:none"> Project Name: {{ $team->project_title }}</a></p>
                        
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                    </div>
                </div>
                @endforeach
            </div> -->
            <section class="wrapper">
                <div class="container">
                    <div class="row">
                    </div>
                    <div class="row">
                        @foreach ($teams as $team)
                        <div class="col col-md-4 mb-4">
                            <div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?tech,street');">
                            <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tech,street" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
                            <div class="card-img-overlay d-flex flex-column">
                                <div class="card-body">
                                    <h1 class="card-meta mb-2" style="color:white">{{ $team->team_name }}</h1>
                                    <h4 class="card-title mt-0 "><a class="text-white" style="text-decoration:none" herf="#">Project Name: {{ $team->project_title }}</a></h4>
                                    <!-- <small><i class="far fa-clock"></i> October 15, 2020</small> -->
                                </div>
                                <div class="card-footer">
                                <a href="{{ route('tasks.show', $team) }}" style="text-decoration:none; color:white;"><button class="btn btn-dark col-12">View Task</button></a>
                                </div>
                            </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
        </div>
    </div>
</div>  

@endsection