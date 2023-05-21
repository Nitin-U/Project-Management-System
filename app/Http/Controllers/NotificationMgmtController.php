<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\User;
use App\Models\Task;
use App\Models\Resource;
use App\Notifications\TeamNotification;
use Notification;

class NotificationMgmtController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    public function teamNotification(Request $request)
    {
        //dd($request);
        $users = $request['users'];
        $team = $request['team'];
        // $users = User::find($request['first_user']);
        
        foreach($users as $userArray)
        {
            $user= User::find($userArray['id']);
            // dd($user)
            $details = [
                'greeting' => 'Hi '.$user->name . '!',
                'body' => 'You have been added to team: ' .$team['team_name'] .'.' ,
                // 'thanks' => 'Thank you for using Medisoft',
                // 'actionText' => 'Visit Medisoft',
                // 'actionURL' => url('/'),
            ];
            // dd($details['body']);
            Notification::send($user, new TeamNotification($details));
        }
        return redirect()->route('teams.index');
        //Notification::send($user, new MedisoftNotification($details));
        //return redirect()->back()->with('success','You are now friends');
    }

}
