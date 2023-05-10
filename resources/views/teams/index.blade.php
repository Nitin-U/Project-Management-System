@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="/css/teams_create.css">
<link rel="stylesheet" href="/css/footer.css">
<!-- Bi Bootstrap Icon CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

<style>
    span,.bi-card-list,.bi-person-check,.bi-people{
        color: white;
    }

    .overlay {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
    }
</style>

<div class="team_create" style="overflow-x: auto;">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="{{ route('teams.create') }}" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Assemble Team</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('teams.index') }}" class="nav-link align-middle px-0">
                        <i class="fs-4 bi bi-person-check"></i> <span class="ms-1 d-none d-sm-inline">All Teams</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                        <i class="fs-4 bi bi-card-list"></i></i> <span class="ms-1 d-none d-sm-inline">Assign Tasks</span></a>
                    </li>
                </ul>
                <hr>
                <!-- <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1">User</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div> -->
            </div>
        </div>
        <div class="col">
            <!-- <h3>Left Sidebar with Submenus</h3> -->
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
                        <p class="card-text text-center">Project Name: {{ $team->project_title }}</p>
                        <p class="card-text text-center">Team Members: </p>
                        <ul class="list-group list-group-flush" style="height: 100px; overflow-y: auto;">
                            @foreach ($team->users as $user)
                                <li class="list-group-item">{{ $user->name }} - {{ $user->email }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
