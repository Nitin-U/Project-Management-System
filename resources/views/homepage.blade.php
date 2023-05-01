@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/homepage.css') }}">

<div class="container-welcome">
    <div class="col mb-5">
        <div class="row w-100 welcome-body m-0">
            <div class="col text-center">
                <h1 class="text-white welcome-heading">A Centralized Platform For Your Projects & Team Collaboration</h1>

                <p class="px-5 text-justify fw-lighter welcome-paragraph text-white mt-5">Welcome to our website! We provide you with a unified space for team collaboration, task tracking, and project management. With this platform, team members can communicate and collaborate on project tasks and deadlines, access project files and resources, and monitor progress in real-time. The use of a centralized platform can greatly enhance productivity, efficiency, and communication among team members, making it a valuable tool for businesses and organizations of all sizes.</p>

                <section class="home-newsletter mt-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="single">
                                    <h2>Subscribe to our Newsletter</h2>
                                    <form action="/newsletter" method="GET">
                                        @csrf
                                        <div class="input-group">
                                            <input type="email" name="email" class="form-control"
                                                placeholder="Enter your email">
                                            <span class="input-group-btn">
                                                <button class="btn btn-theme" type="submit">Subscribe</button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="welcome-icon">
                    <i class="fa-solid fa-store fa-2xl mt-5 p-3 welcome-icon-body"></i>
                    <i class="fa-solid fa-credit-card fa-2xl mt-5 p-3 welcome-icon-body"></i>
                    <i class="fa-solid fa-shop fa-2xl mt-5 p-3 welcome-icon-body"></i>
                </div>

            </div>
        </div>
        <!-- <footer class="mt-1">
            <p>Copyright &copy; 2022 | Nitin Utsav Bartaula | All Rights Reserved.</p>
        </footer> -->
    </div>
</div>

@endsection