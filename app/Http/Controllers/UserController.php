<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    function updateRole(Request $request) {
        $user = User::find($request->userId);
        $role = Role::find($request->roleValue);
        $user->removeRole($user->roles->first());$user->assignRole($role->name);
        return json_encode("success");
    }
}
