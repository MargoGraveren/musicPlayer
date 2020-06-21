@extends('master')

@section('header')
    <div class="title"><p>{{ $album->name }}</p></div>
@endsection

@section('content')
    @foreach ($songs as $song)
        @if($song != null && $album->id == $song->album_id)
            <audio id="mySong{{ $song->id }}">
                <source id="myAudio{{ $song->id }}" src="{{ URL::asset('mp3/'.$song->mp3_file) }}">
            </audio>

            <div class="music-info">
                <div class="music-img">
                    <img id="albumPhoto{{ $song->id }}" src={{ URL::asset('images/albums/'.$album->cover_photo) }}>
                </div>
                <div class="music-name">
                    <h6 id="songTitle{{$song->id}}" onclick="setPlayedSong({{$song->id}})">{{ $song->title }}</h6>
                    <a href="/artists/{{ $song->album->artist->id }}">
                        <p id="artistName{{$song->id}}" onclick="getArtistName({{$song->id}})">{{ $song->album->artist->name }}</p>
                    </a>
                </div>
                <i class="fa fa-ellipsis-v"></i>
            </div><hr>
        @endif
    @endforeach
@endsection
