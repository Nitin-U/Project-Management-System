@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="css/home_task.css">

<div class="home">
  <nav class="side-nav">
    <ul class="nav-menu">
      <li class="nav-item"><a href="#"><i class="fas fa-tachometer-alt"></i><span class="menu-text">Dashboard</span></a></li>
      <li class="nav-item"><a href="#"><i class="fas fa-user"></i><span class="menu-text">Users</span></a></li>
      <li class="nav-item active"><a href="#"><i class="fas fa-file-alt"></i><span class="menu-text">Posts</span></a></li>
      <li class="nav-item"><a href="#"><i class="fas fa-play "></i><span class="menu-text">Media</span></a></li>
      <li class="nav-item"><a href="#"><i class="fas fa-sign-out-alt"></i><span class="menu-text">exit</span></a></li>
    </ul>
  </nav>

  <div class="content-wrapper">
    <!-- Your frontend design goes here -->
    <div class="container">
        
    </div>

</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(function() {
    $("li").click(function(e) {
        e.preventDefault();
        $("li").removeClass("active");
        $(this).addClass("active");
    });
    });
</script>

@endsection
