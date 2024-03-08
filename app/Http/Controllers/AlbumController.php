<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Foto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home.album.index', ["title" => "SA | Album"]);
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
    public function store(Request $request)
    {
      

        $arrayData = [
            'namaAlbum' => $request->namaAlbum,
            'deskripsiAlbum' => $request->deskripsiAlbum,
            'tanggalDibuat' => now(),
            'userID' => auth()->user()->id,

        ];
$album = new Album();
$savedDATA = $album->create($arrayData);
    
if($savedDATA) {
    Log::info($savedDATA);
return to_route('album.index')->withSuccess('Your Album has successfully been saved!');
} else {
    return to_route('album.create')->withError('Sorry, your request is unsuccesful.');
}
}
    /**
     * Display the specified resource.
     */
    public function show()
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
