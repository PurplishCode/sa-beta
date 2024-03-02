<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

public function index()
{
    $AuS = auth()->user()->id;
    $sa = DB::table('users')->where("users.id", $AuS)->join("foto", "foto.user_id", "=", "users.id")->join("album", "album.user_id", "=", "users.id")->select(DB::raw("COUNT(DISTINCT foto.id) as foto_amount"), DB::raw("COUNT(DISTINCT album.id) as album_amount"));
dd($sa);

    return view("home.index", ["title" => "SA | Homepage"])->with("sa", compact('sa'));
}

}
