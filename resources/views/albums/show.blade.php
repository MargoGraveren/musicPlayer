@extends('master')

@section('header')
    <div class="title"><p>{{ $album->name }}</p></div>
@endsection

@section('content')
    @foreach ($songs as $song)
        @if($song != null && $album->id == $song->album_id)
            <div class="music-info">
                <div class="music-img">
                    <img src={{ URL::asset('images/albums/'.$album->cover_photo) }}>
                </div>
                <div class="music-name">
                    <h6>{{ $song->title }}</h6>
                    <p><a href="/artists/{{ $song->album->artist->id }}">
                            {{ $song->album->artist->name }}</a></p>
                </div>
                <i class="fa fa-ellipsis-v"></i>
            </div><hr>
        @endif
    @endforeach
@endsection
