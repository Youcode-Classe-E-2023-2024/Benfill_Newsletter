<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Members;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = Members::all();
        return view("front_office.home", compact("members"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $member = $request->validate([
           "email" => 'required|email|unique:members'
        ]);

        Members::create($member);
        return view("front_office.home");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
