<?php

namespace App\Http\Controllers;

use App\Http\Requests\SessionRequest;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view("auth.login", ["title" => "IMV | Login"]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
    return view("auth.register", ["title" => "IMV | Registeration"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SessionRequest $request): RedirectResponse
    {
    $request->validated();

$arrayData = [
    "username" => $request->username,
    "namaLengkap" => $request->namaLengkap,
    "email" => $request->email,
    "password" => Hash::make($request->password),
    "alamat" => $request->alamat,    
    
];

    $store = User::create($arrayData);

    if($store) {
        // Check LOG
        Log::info("Data is succesfully stored.", $store);

        return redirect()->route('session.index');

    } else {
        return redirect()->back()->withErrors("errors", "Something went wrong.");


    }
    }

    public function login() 
    {

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
