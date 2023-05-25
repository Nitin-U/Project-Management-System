@extends('layouts.app')

@section('content')
<!-- <link rel="stylesheet" href="/css/footer.css"> -->
<link rel="stylesheet" href="/css/task_list.css">
<link rel="stylesheet" href="/css/footer.css">
@vite(['resources/scss/app.scss'])

<!-- <div class="container my-5 pt-5">
    @foreach ($teamMembers as $member)
    <div class="card mb-3">
        <div class="card-header">{{ $member->name }} - {{ $member->role }}</div>
        <div class="card-body">
            @foreach ($member->tasks->where('team_id', $team->id) as $task)
            <div class="task-card">
                <h5 class="card-title">{{ $task->task_name }}</h5>
                <p class="card-text">Description: {{ $task->description }}</p>
                <p class="card-text">Due Date: {{ $task->due_date }}</p>
            </div>
            @endforeach
        </div>
    </div>
    @endforeach
</div> -->



<!-- <div class="container mt-5 pt-3">
    <div class="text-center mt-2">
        <h1>All Tasks</h1>
    </div>
    @foreach ($teamMembers as $member)
    <div class="row mt-2">
        <div class="preview-card">
            <div class="preview-card__wrp">
                <div class="preview-card__item">
                    <div class="preview-card__img">
                        <img src="https://res.cloudinary.com/muhammederdem/image/upload/v1535759872/kuldar-kalvik-799168-unsplash.jpg"
                            alt="">
                    </div>
                    <div class="preview-card__content">
                        <span class="preview-card__code">26 December 2019</span>
                        <div class="preview-card__title">Lorem Ipsum Dolor</div>
                        <div class="d-flex justify-content-center">
                            <div class="p-2">Flex item</div>
                            <div class="p-2 flex-shrink-1">Flex item</div>
                        </div>
                        <a href="#" class="preview-card__button">READ MORE</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endforeach
</div> -->

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col text-left">
            <a href="{{ route('tasks.index') }}" style="text-decoration:none; color:black"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5ZM10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5Z"/>
            </svg><i>GoBack</i></a>
            </div>
        </div>
        <div class="row">
            @foreach ($teamMembers as $member)
            <div class="col-md-6">
                <div class="card-box task-detail rounded">
                    <div class="media mt-0 m-b-30 text-center"><img class="img-responsive center-block d-block mx-auto mr-3 rounded-circle" alt="64x64" src="https://bootdey.com/img/Content/avatar/avatar2.png" style="width: 48px; height: 48px;">
                        <div class="media-body">
                            <h5 class="media-heading mb-0 mt-0">{{ $member->name }}</h5><span class="badge bg-secondary">{{ $member->role }}</span>
                        </div>
                    </div>
                    @if ($member->tasks->where('team_id', $team->id)->isEmpty())
                        <h4 class="m-b-20 mt-2 text-center">Task not assigned yet.</h4>
                    @else
                    @foreach ($member->tasks->where('team_id', $team->id) as $task)
                    <h4 class="m-b-20 mt-2">
                        {{ $task->task_name }}
                    </h4>
                    <p class="text-muted">{{ $task->description }}</p>
                    <ul class="list-inline task-dates m-b-0">
                        <!-- <li>
                            <h5 class="m-b-5">Start Date</h5>
                            <p>01 December 2017 <small class="text-muted">1:00 PM</small></p>
                        </li> -->
                        <li>
                            <h5 class="m-b-5">Due Date <i class="fa-solid fa-stopwatch fa-bounce"></i></h5>
                            <p>{{ $task->due_date }}<!--small class="text-muted">12:00 PM</small--></p>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                    <div class="task-tags">
                        <h5 class="">Resource</h5>
                        <div class="bootstrap-tagsinput">
                            <span class="tag label label-info">
                                @if ($task->resources->isNotEmpty())
                                    @foreach ($task->resources as $resource)
                                        {{ $resource->resource_name }} <i class="fa-solid fa-gear fa-spin"></i>
                                    @endforeach
                                @else
                                <i>No resource allocated</i>
                                @endif
                            <span class="tag label label-info"></span></span>
                        <!-- <hr> -->
                        </div>
                    </div>
                    <div class="d-grid gap-2 mt-2 mb-2">
                        <button class="btn btn-secondary" type="button">Submit</button>
                    </div>
                    @endforeach
                    @endif
                    
                </div>
            </div>
            @endforeach
        </div>
        <!-- end row -->
    </div>
    <!-- container -->
</div>


@endsection