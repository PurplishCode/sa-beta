<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

public function index(): View
 {
//     $AuS = auth()->user()->id;
//     $sa = DB::table('users')->where("users.id", $AuS)->join("foto", "foto.user_id", "=", "users.id")->join("album", "album.user_id", "=", "users.id")->select(DB::raw("COUNT(DISTINCT foto.id) as foto_amount"), DB::raw("COUNT(DISTINCT album.id) as album_amount"))->get();

$user = Auth::user();
$albumAmount = $user->albums ? $user->albums->count() : 0;
$fotoAmount = $user->fotos ? $user->fotos->count() : 0;


if($albumAmount <= 0 || $fotoAmount <= 0) {

}

    return view("home.index", ["title" => "SA | Homepage"])->with("albumcount", $albumAmount)->with("fotocount", $fotoAmount)->with('user', $user);

}
}