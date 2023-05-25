<link rel="stylesheet" href="{{ asset('css/alert.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('js/alert.js') }}"></script>
@if ($message = Session::get('success'))

<div class="error-container">
    <div class="alert notice notice-success alert-dismissible fade show" id="alert" role="alert">
        <strong class="me-4">{{ $message }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
<!-- <script>
$(document).ready(function(){
  $('#alert').delay(5000).fadeOut(300);
});
</script> -->
@endif


@if ($message = Session::get('error'))

<div class="error-container">
    <div class="alert notice notice-danger alert-dismissible fade show" role="alert">
        <strong class="me-4">{{ $message }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>

@endif


@if ($message = Session::get('warning'))

<div class="error-container">
    <div class="alert notice notice-warning alert-dismissible fade show" role="alert">
        <strong class="me-4">{{ $message }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>

@endif


@if ($message = Session::get('info'))

<div class="error-container">
    <div class="alert notice notice-info alert-dismissible fade show" role="alert">
        <strong class="me-4">{{ $message }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>

@endif


@if ($errors->any())

<div class="error-container">
    <div class="alert notice notice-danger alert-dismissible fade show" role="alert">
        <strong class="me-4">Please check the form for any errors before submitting</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>

@endif