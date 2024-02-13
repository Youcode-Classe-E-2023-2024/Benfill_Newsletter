<?php

namespace App\Http\Controllers;

use App\Models\Members;
use Illuminate\Http\Request;
use App\Events\Subscribed;

class MembersController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $memberData = $request->validate([
           "email" => 'required|email|unique:members'
        ]);

        $member = Members::create([
            'email' => $memberData['email']
        ]);

        $evtee = event(new Subscribed($member));

        return view("front_office.home");
    }

    function unsubscribe($email) {
        $member = Members::where("email", $email)->first();

        if ($member) {
            $member->status = "unsubscribed";
            $member->save();
        }
        return view("mail.unsubscribed", compact('email'));
    }
    function cancelUnsubscription($email) {
        $member = Members::where("email", $email)->first();

        if ($member) {
            $member->status = "subscribed";
            $member->save();
        }
        return view('/front_office.home');
    }
}
