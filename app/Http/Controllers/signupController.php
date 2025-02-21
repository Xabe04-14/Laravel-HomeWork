<?php

namespace App\Http\Controllers;

use App\Http\Requests\signupRequest;
use Illuminate\Http\Request;

class signupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('signup');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function displayInfor(signupRequest $Requests)
    {
        $user = [
            'name' => $Requests->input("name"),
            'age' => $Requests->input("age"),
            'date' => $Requests->input("date"),
            'phone' => $Requests->input("phone"),
            'web' => $Requests->input("web"),
            'addr' => $Requests->input("addr"),
        ];        
        return view('signup')->with('user',$user);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
