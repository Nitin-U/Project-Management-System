<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invitation;
use Illuminate\Support\Facades\Mail;
use App\Mail\InvitationEmail;

class InvitationController extends Controller
{
    public function create()
    {
        return view('invites.invite');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users',
        ]);

        $invitation = Invitation::create([
            'email' => $request->email,
            'role' => $request->role,
            'token' => sha1(time().$request->email),
        ]);

        Mail::to($invitation->email)->send(new InvitationEmail($invitation));

        return redirect()->route('homepage')->with('success', 'Invitation sent!');
    }

    public function index()
    {
        return view('invites.invite_email');
    }
}
