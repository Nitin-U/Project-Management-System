@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
<link rel="stylesheet" href="{{ asset('css/home_team.css') }}">


<div class="container-welcome" style="overflow-x: hidden;">
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
                                 <button class="btn btn-dark" type="submit">Subscribe</button>
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
         <div class="row">
            <div class="col text-center  mt-4 mb-4">
                <h1>Our Teams <i class="fa-solid fa-people-group"></i></h1>
            </div>
         </div>
      <div class="container">
         <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
            <div class="col">
               <div class="card h-100 shadow-sm">
                  <div class="text-center">
                     <div class="img-hover-zoom img-hover-zoom--colorize">
                        <img class="shadow" src="https://source.unsplash.com/rDEOVtE7vOs/600x600"
                           alt="Another Image zoom-on-hover effect">
                     </div>
                  </div>
                  <div class="card-body">
                     <div class="clearfix mb-3">
                     </div>
                     <div class="my-2 text-center">
                        <h1>Mia Wallace</h1>
                     </div>
                     <div class="mb-3">
                        <h2 class="text-uppercase text-center role">Front-end Designer</h2>
                     </div>
                     <div class="box">
                        <div>
                           <ul class="list-inline">
                              <li class="list-inline-item"><i class="fab fa-github"></i></li>
                              <li class="list-inline-item"><i class="fab fa-linkedin-in"></i></li>
                              <li class="list-inline-item"><i class="fab fa-instagram"></i></li>
                              <li class="list-inline-item"><i class="fab fa-twitter"></i></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col">
               <div class="card h-100 shadow-sm">
                  <div class="text-center">
                     <div class="img-hover-zoom img-hover-zoom--colorize">
                        <img class="shadow" src="https://source.unsplash.com/XHVpWcr5grQ/600x600"
                           alt="Another Image zoom-on-hover effect">
                     </div>
                  </div>
                  <div class="card-body">
                     <div class="clearfix mb-3">
                     </div>
                     <div class="my-2 text-center">
                        <h1>Vincent Vega</h1>
                     </div>
                     <div class="mb-3">
                        <h2 class="text-uppercase text-center role">Database administrator</h2>
                     </div>
                     <div class="box">
                        <div>
                           <ul class="list-inline">
                              <li class="list-inline-item"><i class="fab fa-github"></i></li>
                              <li class="list-inline-item"><i class="fab fa-linkedin-in"></i></li>
                              <li class="list-inline-item"><i class="fab fa-instagram"></i></li>
                              <li class="list-inline-item"><i class="fab fa-twitter"></i></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col">
               <div class="card h-100 shadow-sm">
                  <div class="text-center">
                     <div class="img-hover-zoom img-hover-zoom--colorize">
                        <img class="shadow" src="https://source.unsplash.com/n4KewLKFOZw/600x600"
                           alt="Another Image zoom-on-hover effect">
                     </div>
                  </div>
                  <div class="card-body">
                     <div class="clearfix mb-3">
                     </div>
                     <div class="my-2 text-center">
                        <h1>Mr. Wolf</h1>
                     </div>
                     <div class="mb-3">
                        <h2 class="text-uppercase text-center role">Back-end Developer</h2>
                     </div>
                     <div class="box">
                        <div>
                           <ul class="list-inline">
                              <li class="list-inline-item"><i class="fab fa-github"></i></li>
                              <li class="list-inline-item"><i class="fab fa-linkedin-in"></i></li>
                              <li class="list-inline-item"><i class="fab fa-instagram"></i></li>
                              <li class="list-inline-item"><i class="fab fa-twitter"></i></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col">
               <div class="card h-100 shadow-sm">
                  <div class="text-center">
                     <div class="img-hover-zoom img-hover-zoom--colorize">
                        <img class="shadow" src="https://source.unsplash.com/B4TjXnI0Y2c/600x600"
                           alt="Another Image zoom-on-hover effect">
                     </div>
                  </div>
                  <div class="card-body">
                     <div class="clearfix mb-3">
                     </div>
                     <div class="my-2 text-center">
                        <h1>O-Ren Ishii</h1>
                     </div>
                     <div class="mb-3">
                        <h2 class="text-uppercase text-center role">Quality assurance (QA) tester</h2>
                     </div>
                     <div class="box">
                        <div>
                           <ul class="list-inline">
                              <li class="list-inline-item"><i class="fab fa-github"></i></li>
                              <li class="list-inline-item"><i class="fab fa-linkedin-in"></i></li>
                              <li class="list-inline-item"><i class="fab fa-instagram"></i></li>
                              <li class="list-inline-item"><i class="fab fa-twitter"></i></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>



@endsection