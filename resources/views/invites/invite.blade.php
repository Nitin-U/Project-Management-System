@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="css/invite.css">
<div class="invitation d-flex justify-content-center">
    <form class="" method="POST" action="{{ route('invites.store') }}">
        @csrf
        <i class="fa-solid fa-users fa-beat-fade fa-3x d-flex justify-content-center mb-2"></i>
        <div class="form_invite text-center">
            <h1>Assemble Teams</h1>
            <h5 class="text-secondary">Please fill in the team member's username you would like to invite</h5>
            <div class="col-3">
                <select class="form-select role-select" name="role" aria-label="Default select example">
                    <option selected>--Role--</option>
                    <option value="Front-end designer">Front-end developer/designer</option>
                    <option value="Graphics designer">Graphics designer</option>
                    <option value="Back-end developer">Back-end developer</option>
                    <option value="Quality assurance (QA) tester">Quality assurance (QA) tester</option>
                    <option value="Content writer">Content writer</option>
                    <option value="UX/UI designer">UX/UI designer</option>
                    <option value="Database administrator">Database administrator</option>
                </select>
            </div>
            <div class="input-group mt-3">
                <input type="email" name="email" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-secondary" type="submit" id="button-addon2"><i class="fa-solid fa-paper-plane"></i></button>
            </div>
        </div>
    </form>
</div>


@endsection