<?php

namespace App\Http\Controllers;

use App\Album;
use App\Artist;
use Illuminate\Http\Request;

class ArtistsController extends Controller
{
    public function index(){
        $artists = Artist::latest()->get();
        return view('artists.index')->with('artists', $artists);
    }

    public function show($id){
        $artist = Artist::find($id);
        $albums = Album::latest()->get();
        return view('artists.show')->with('artist', $artist)->with('albums', $albums);
    }

    public static function countAlbums($id){
        $count = 0;
        $artist = Artist::find($id);
        $albums = Album::latest()->get();
        foreach ($albums as $album) {
            if($album->artist_id == $artist->id){
                $count += 1;
            }
        }
        return $count;
    }
}
