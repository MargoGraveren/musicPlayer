@extends('master')

@section('header')
    <div class="title"><p>My Songs</p></div>
@endsection

@section('content')
            @foreach($songs as $song)
                <div class="music-info">
                    <div class="music-img">
                        <img src="images/albums/{{ $song->album->cover_photo }}">
                    </div>
                    <div class="music-name">
                        <h6>{{ $song->title }}</h6>
                        <p><a href="/artists/{{ $song->album->artist->id }}">
                                {{ $song->album->artist->name }}</a></p>
                    </div>
                    <i class="fa fa-ellipsis-v"></i>
                </div><hr>
            @endforeach
@endsection
