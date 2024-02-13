<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    static function getRole($userId) {
        $user = User::find($userId);
        if (!$user) {
            // User not found
            return "unknown";
        }

        if ($user->hasRole("admin")) {
            $role = "admin";
        } else {
            $role = "editor";
        }

        return $role;
    }
}
