@extends('layouts.app')

@section('content')
<form class="m-5" method="POST" action="{{ route('invites.store') }}">
    @csrf
    <div>
        <label for="email">Worker's Email Address:</label>
        <input type="email" name="email" required>
    </div>
    <button type="submit">Send Invitation</button>
</form>


@endsection