<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view("auth.login", ["title" => "SA | Login"]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
    return view("auth.register", ["title" => "SA | Registeration"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
    // $request->validate([
    //     "username" => "string|required",
    //     "namaLengkap" => "string|required|max:254",
    //     "email" => "string|required|max:254",
    //     "password" => "required",
    //     "alamat" => "string|required"
    // ]);

$kee = [
  'username' => $request->username,
  'namaLengkap' => $request->namaLengkap,
  'email' => $request->email,
  'password' => Hash::make($request->password), 
  'alamat' => $request->alamat
];

$accepted = User::create($kee);


if($accepted) {
        return redirect('session')->withSuccess("You have successfully created an account!");

    } else {
        return redirect("session/create")->withError("Failed to register.");


    }
    }


    public function login(Request $request) 
    {
$allocate = User::where("email", $request->email)->first();

if($allocate && Hash::check($request->password, $allocate->password)) {
$credentials = $request->only("email", "password");

$succesful = Auth::attempt($credentials);

if($succesful) {
   $request->session()->regenerate();
 return to_route("home.index")->withSuccess('Selamat datang kembali ' . $allocate->username . '!');
} else {
return redirect('session')->withError("Failed to login.");
}
} else {
    return redirect('session')->withError('Your password / email is incorrect.');
}
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

    public function logout(): RedirectResponse
    {
        Auth::logout();
        session()->flush();

        return redirect('session')->withSuccess('You have logged out!');
    }
}
