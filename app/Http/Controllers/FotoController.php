<?php

namespace App\Http\Controllers;

use App\Http\Requests\FotoRequest;
use App\Models\Foto;
use App\Http\Requests\StoreFotoRequest;
use App\Http\Requests\UpdateFotoRequest;
use Illuminate\Support\Facades\DB;

class FotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $userID = auth()->user()->id;
        $userFoto = DB::table("id", $userID)->join('foto', 'foto.id', '=', 'users.id')->select('foto.*')->get();

        return view('home.foto.index', compact('userFoto'))->with("title", "IMV | Homepage");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FotoRequest $request)
    {
     $request->validated();

     // File Upload.
     $panggilFile = $request->file("lokasiFile");
     $extensionFile = $panggilFile->extension();
     $namaFile = date('ymdhis') . '.' . $extensionFile;
     $panggilFile->move(public_path('procedure', $namaFile));

    $user = auth()->user();
    $album = $user->album;

    $correspondingAlbum = $album->find("id", $request->album_id);

$arrayData = [
    'judulFoto' => $request->judulFoto,
    'deskripsiFoto' => $request->deskripsiFoto,
    'tanggalUnggah' => now(),
    'lokasiFile' => $namaFile,
    'user_id' => $user->id,
    'album_id' => $correspondingAlbum
];

$check = Foto::create($arrayData);

if($check) {
    return redirect()->route('foto.index');
}

    }

    /**
     * Display the specified resource.
     */
    public function show(Foto $foto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Foto $foto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFotoRequest $request, Foto $foto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Foto $foto)
    {
        //
    }
}
