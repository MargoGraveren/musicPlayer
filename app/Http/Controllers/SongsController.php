<?php

namespace App\Http\Controllers;

use App\Song;
use Illuminate\Support\Facades\DB;

class SongsController extends Controller
{
    public function index(){
        $songs = Song::latest()->get();
        return view('songs.index')->with('songs', $songs);
    }
}

