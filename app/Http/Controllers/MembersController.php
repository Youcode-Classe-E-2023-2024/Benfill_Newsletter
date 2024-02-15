<?php

namespace App\Http\Controllers;

use App\Listeners\SendMail;
use App\Mail\newsletter;
use App\Models\Mail_template;
use App\Models\Members;
use Illuminate\Http\Request;
use App\Events\Subscribed;
use Illuminate\Support\Facades\Mail;
use SebastianBergmann\Template\Template;

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

    function unsubscribe($email)
    {
        $member = Members::where("email", $email)->first();

        if ($member) {
            $member->status = "unsubscribed";
            $member->save();
        }
        return view("mail.unsubscribed", compact('email'));
    }

    function cancelUnsubscription($email)
    {
        $member = Members::where("email", $email)->first();

        if ($member) {
            $member->status = "subscribed";
            $member->save();
        }
        return view('/front_office.home');
    }

    function sendMail(Request $request)
    {
        $members = Members::all();

        $media = $request->mediaSelect;
        $template = Mail_template::find($request->templateSelect);

        foreach ($members as $member) {
            $email = $member->email;
            Mail::to($member->email)->send(new newsletter($email, $template, $media));
        }

    }
}
