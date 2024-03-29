<?php

namespace App\Http\Controllers;

use App\Models\mail_sent;
use App\Models\Mail_template;
use App\Models\Members;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Permission\Models\Role;

class DashboardController extends Controller
{
    function index() {
        $admin = Auth::user();
        $users = User::all();
        $members = Members::all();
        $templates = Mail_template::all();
        $medias = Media::all();
        $roles = Role::all();
        $mail_sent = mail_sent::all();

        return view("back_office.dashboard", compact("admin", "users", "members", "templates", "medias", "roles", "mail_sent"));
    }
}
