<?php

namespace App\Http\Controllers;

use App\Http\Requests\signupRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class signupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users=Session::get('users',[]);
        return view('signup')->with('users',$users);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function displayInfor(signupRequest $Requests)
    {
        $users=Session::get('users',[]);
        $user = [
            'name' => $Requests->input("name"),
            'age' => $Requests->input("age"),
            'date' => $Requests->input("date"),
            'phone' => $Requests->input("phone"),
            'web' => $Requests->input("web"),
            'addr' => $Requests->input("addr"),
        ];  
        $users[]=$user;
        Session::put('users',$users)  ;    
        return view('signup')->with('users',$users);
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
