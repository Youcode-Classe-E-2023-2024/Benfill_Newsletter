<?php

namespace App\Http\Controllers;

use App\Models\media;
use App\Models\Medias;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userId = Auth::id();
        $media = Medias::create([
            "user_id" => $userId
        ]);

        $media->addMediaFromRequest('files')->toMediaCollection();
        return back()->with(["status", "success"]);
    }

}
