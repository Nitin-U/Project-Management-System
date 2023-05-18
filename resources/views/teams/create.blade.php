@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="/css/teams_create.css">
<link rel="stylesheet" href="/css/footer.css">
<!-- Bi Bootstrap Icon CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

<style>
    span,.bi-card-list,.bi-person-check,.bi-people,.bi-list-check,.bi-gear-wide-connected{
        color: white;
    }
</style>

<div class="team_create">
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
                        <a href="{{ route('tasks.create') }}" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi bi-card-list"></i></i> <span class="ms-1 d-none d-sm-inline">Assign
                                Tasks</span></a>
                    </li>
                    <li>
                        <a href="{{ route('tasks.index') }}" class="nav-link px-0 align-middle">
                        <i class="fs-4 bi bi-list-check"></i> <span class="ms-1 d-none d-sm-inline">All
                                Tasks</span></a>
                    </li>
                    <li>
                        <a href="{{ route('resources.create') }}" class="nav-link px-0 align-middle">
                        <i class="fs-4 bi bi-gear-wide-connected"></i> <span class="ms-1 d-none d-sm-inline">Assign Resources</span></a>
                    </li>
                    <!-- <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                            <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Bootstrap</span></a>
                        <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Products</span> </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 1</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 2</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 3</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 4</a>
                                </li>
                            </ul>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                    </li> -->
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
            <div>
            <div class="login-page bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                        <!-- <h3 class="mb-3 text-center">Assemble Team</h3> -->
                            <div class="bg-white shadow rounded mb-5">
                                <div class="row mt-3">
                                    <div class="col pe-0">
                                        <div class="form-left h-100 py-5 px-5">
                                            <form action="{{ route('teams.store') }}" method="POST" class="row g-4">
                                            @csrf
                                                    <div class="col-12">
                                                        <label class="mb-1">Project Name<span class="text-danger"></span></label>
                                                        <div class="input-group">
                                                            <div class="input-group-text"><i class="bi bi-card-text"></i></div>
                                                            <input type="text" name="project_title" id="project_title" class="form-control" placeholder="Enter Project's Name">
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <label class="mb-1">Team Name<span class="text-danger"></span></label>
                                                        <div class="input-group">
                                                            <div class="input-group-text"><i class="bi bi-people-fill"></i></div>
                                                            <input type="text" name="team_name" id="team_name" class="form-control" placeholder="Enter Team's Name">
                                                        </div>
                                                    </div>

                                                    <div class="container mt-5 px-2">
    
                                                    <div class="mb-2 d-flex justify-content-between align-items-center">
                                                        
                                                        <div class="position-relative">
                                                            <span class="position-absolute search"></span>
                                                            <div class="d-flex">
                                                            <input class="form-control w-100" placeholder="Search by name . . ."><i class="fa-solid fa-magnifying-glass align-self-center ms-2"></i>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="table-responsive">
                                                    <table class="table table-responsive table-borderless">
                                                        
                                                    <thead>
                                                        <tr class="bg-light">
                                                        <th scope="col" width="5%"><input class="form-check-input" type="checkbox"></th>
                                                        <th scope="col" width="5%">#</th>
                                                        <th scope="col" width="20%">Name</th>
                                                        <th scope="col" width="10%">Email</th>
                                                        <th scope="col" width="20%">Role</th>
                                                        <!-- <th scope="col" width="20%">Purchased</th> -->
                                                        </tr>
                                                    </thead>
                                                <tbody>
                                                    @foreach($users as $user)
                                                        <tr>
                                                        <th scope="row"><input class="form-check-input" type="checkbox" name="users[]" value="{{ $user->id }}"></th>
                                                        <td>{{ $user->id }}</td>
                                                        <td>{{ $user->name }}</td>
                                                        <td>{{ $user->email }}</td>
                                                        <td>{{ $user->role }}</td>
                                                        <!-- <td><img src="https://i.imgur.com/VKOeFyS.png" width="25"> Althan Travis</td> -->
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                                </table>
                                                
                                                </div>
                                                    
                                                </div>

                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-dark px-4 float-end mt-4">Submit</button>
                                                    </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-5 ps-0 d-none d-md-block">
                                        <div class="form-right h-100 bg-primary text-white text-center pt-5">
                                            <i class="bi bi-bootstrap"></i>
                                            <h2 class="fs-1">Welcome Back!!!</h2>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <!-- <p class="text-end text-secondary mt-3">Bootstrap 5 Login Page Design</p> -->
                        </div>
                    </div>
                </div>
            </div>

            </div>
        </div>
    </div>
</div>

@endsection