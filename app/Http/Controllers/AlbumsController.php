<?php

namespace App\Http\Controllers;

use App\Album;
use App\Song;
use Illuminate\Http\Request;

class AlbumsController extends Controller
{
    public function index(){
        $albums = Album::latest()->get();
        $albums = collect($albums)->sortBy('title');
        return view('albums.index')->with('albums', $albums);
    }

    public function show($id){
        $album = Album::find($id);
        $songs = Song::latest()->get();
        return view('albums.show')->with('album', $album)->with('songs', $songs);
    }
}
