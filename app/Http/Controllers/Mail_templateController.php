<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mail_template;
use Illuminate\Support\Facades\Auth;

class Mail_templateController extends Controller
{
    function create() {

    }

    function store(Request $request) {
        $template = new Mail_template;
        $request->validate([
            "title" => "required|unique:mail_templates|min:3",
            "content" => "required|min:12"
        ]);

        $template->title = $request->title;
        $template->content = $request->content;
        $template->creator = Auth::id();
        $template->status = $request->action;
        $template->save();

        return back()->with('status', $request->action);
    }
}
