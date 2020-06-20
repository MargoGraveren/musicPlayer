@extends('master')

@section('header')
    <div class="title"><p>My Artists</p></div>
@endsection

@section('content')
    @foreach($artists as $artist)
        <div class="music-info">
            <div class="music-img">
                <img src="images/artists/{{ $artist->photo }}">
            </div>
            <div class="music-name">
                <h6><a href="/artists/{{ $artist->id }}">{{ $artist->name }}</a> </h6>
                <p>Albums: {{ \App\Http\Controllers\ArtistsController::countAlbums($artist->id)}}</p>
            </div>
            <i class="fa fa-ellipsis-v"></i>
        </div><hr>
    @endforeach
@endsection
