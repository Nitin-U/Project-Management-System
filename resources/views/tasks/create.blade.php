@extends('layouts.app')

@section('content')
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

.bi-card-list{
        color: #B61C1C !important;
    }
</style>

<div class="team_create" style="overflow-x: hidden;">
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
                            <i class="fs-4 bi bi-person-check"></i> <span class="ms-1 d-none d-sm-inline">All
                                Teams</span>
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
                    <li>
                        <a href="{{ route('resources.create') }}" class="nav-link px-0 align-middle">
                        <i class="fs-4 bi bi-chat-dots"></i> <span class="ms-1 d-none d-sm-inline">Message</span></a>
                    </li>
                </ul>
                <hr>
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
                                                <form action="{{ route('tasks.store') }}" method="POST" class="row g-4">
                                                    @csrf
                                                    <div class="col-12">
                                                        <label class="mb-1">Team Name<span
                                                                class="text-danger"></span></label>
                                                        <div class="input-group">
                                                            <div class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-microsoft-teams" viewBox="0 0 16 16">
                                                            <path d="M9.186 4.797a2.42 2.42 0 1 0-2.86-2.448h1.178c.929 0 1.682.753 1.682 1.682v.766Zm-4.295 7.738h2.613c.929 0 1.682-.753 1.682-1.682V5.58h2.783a.7.7 0 0 1 .682.716v4.294a4.197 4.197 0 0 1-4.093 4.293c-1.618-.04-3-.99-3.667-2.35Zm10.737-9.372a1.674 1.674 0 1 1-3.349 0 1.674 1.674 0 0 1 3.349 0Zm-2.238 9.488c-.04 0-.08 0-.12-.002a5.19 5.19 0 0 0 .381-2.07V6.306a1.692 1.692 0 0 0-.15-.725h1.792c.39 0 .707.317.707.707v3.765a2.598 2.598 0 0 1-2.598 2.598h-.013Z"/>
                                                            <path d="M.682 3.349h6.822c.377 0 .682.305.682.682v6.822a.682.682 0 0 1-.682.682H.682A.682.682 0 0 1 0 10.853V4.03c0-.377.305-.682.682-.682Zm5.206 2.596v-.72h-3.59v.72h1.357V9.66h.87V5.945h1.363Z"/>
                                                            </svg></div>
                                                                    <select class="form-control @error('team_id') is-invalid @enderror" id="team_name" name="team_id" onchange="this.form.find()">
                                                                <option value="">Select Team</option>
                                                                @foreach ($teams as $team)
                                                                    <option value="{{ $team->id }}" @if(old('team_id') == $team->id) selected @endif>{{ $team->team_name }}</option>
                                                                @endforeach
                                                            </select>
                                                            <button type="find" class="btn btn-dark">Find</button>
                                                        </div>
                                                        @error('team_id')
                                                        <i><span class="text-danger ms-1 validation-msg">{{ $message }}</span></i>
                                                        @enderror
                                                    </div>

                                                    @if(!empty(old('team_id')))
                                                    <div class="col-12">
                                                        <label class="mb-1">User's Name<span
                                                                class="text-danger"></span></label>
                                                        <div class="input-group">
                                                            <div class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-add" viewBox="0 0 16 16">
                                                            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                                            <path d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z"/>
                                                            </svg></div>
                                                                    <select class="form-control @error('user_id') is-invalid @enderror" id="user_assign" name="user_id">
                                                                        <option value="">Select User</option>
                                                                        @foreach ($users as $user)
                                                                            @if($user->teams->contains('id', old('team_id')))
                                                                                <option value="{{ $user->id }}" @if(old('user_id') == $user->id) selected @endif>{{ $user->name }}</option>
                                                                            @endif
                                                                        @endforeach
                                                                    </select>
                                                        </div>
                                                        @error('user_id')
                                                        <i><span class="text-danger ms-1 validation-msg">{{ $message }}</span></i>
                                                        @enderror
                                                    </div>
                                                    @endif
                                                    
                                                    <div class="col-12">
                                                        <label class="mb-1">Task Name<span
                                                                class="text-danger"></span></label>
                                                        <div class="input-group">
                                                            <div class="input-group-text"><i class="bi bi-list-task"></i></div>
                                                                    <input type="text" class="form-control @error('task_name') is-invalid @enderror" id="task_name" name="task_name" value="{{ old('task_name') }}">
                                                        </div>
                                                        @error('task_name')
                                                        <i><span class="text-danger ms-1 validation-msg">{{ $message }}</span></i>
                                                        @enderror
                                                    </div> 

                                                    <div class="col-12">
                                                        <label class="mb-1">Task Description<span
                                                                class="text-danger"></span></label>
                                                        <div class="input-group">
                                                            <div class="input-group-text"><i class="bi bi-pencil-square"></i></div>
                                                                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ old('description') }}</textarea>
                                                        </div>
                                                        @error('description')
                                                        <i><span class="text-danger ms-1 validation-msg">{{ $message }}</span></i>
                                                        @enderror
                                                    </div> 

                                                    <div class="col-12">
                                                        <label class="mb-1">Due Date<span
                                                                class="text-danger"></span></label>
                                                        <div class="input-group">
                                                            <div class="input-group-text"><i class="bi bi-calendar-fill"></i></div>
                                                                    <input type="datetime-local" class="form-control @error('due_date') is-invalid @enderror" id="due_date" name="due_date" value="{{ old('due_date') }}">
                                                        </div>
                                                        @error('due_date')
                                                        <i><span class="text-danger ms-1 validation-msg">{{ $message }}</span></i>
                                                        @enderror
                                                    </div>
                                                    
                                                    <!-- @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    @endif -->

                                                    <div class="col-12">
                                                        <button type="submit"
                                                            class="btn btn-dark px-4 float-end mt-4">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
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