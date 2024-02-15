<?php

use App\Models\User;

if (!function_exists('getPicUrl')) {
    function getPicUrl($id, $fileName)
    {
        $picPath = "storage/$id/$fileName";
        return asset($picPath);
    }
}


if (!function_exists('getRole')) {
    function getRole($userId)
    {
        $user = User::find($userId);
        if (!$user) {
            // User not found
            return "unknown";
        }

        if ($user->hasRole("admin")) {
            $role = "admin";
        } elseif ($user->hasRole("author")) {
            $role = "author";
        } else {
            $role = "editor";
        }

        return $role;
    }
}

