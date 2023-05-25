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
                                                <form action="{{ route('tasks.update', $task->id) }}" method="POST" class="row g-4">
                                                    @csrf
                                                    @method('PUT')
                    
                                                    <div class="col-12">
                                                        <label class="mb-1">Task Name<span
                                                                class="text-danger"></span></label>
                                                        <div class="input-group">
                                                            <div class="input-group-text"><i class="bi bi-list-task"></i></div>
                                                                    <input type="text" class="form-control @error('task_name') is-invalid @enderror" id="task_name" name="task_name" value="{{ $task->task_name }}">
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
                                                                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ $task->description }}</textarea>
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
                                                                    <input type="datetime-local" class="form-control @error('due_date') is-invalid @enderror" id="due_date" name="due_date" value="{{ $task->due_date }}">
                                                        </div>
                                                        @error('due_date')
                                                        <i><span class="text-danger ms-1 validation-msg">{{ $message }}</span></i>
                                                        @enderror
                                                    </div>

                                                    <input type="hidden" name="team_id" value="{{ $task->team_id }}">
                                                    
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
                                                            class="btn btn-dark px-4 float-end mt-4">Update</button>
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