@extends('master')

@section('header')
    <div class="title"><p>My Albums</p></div>
@endsection

@section('content')
    @foreach($albums as $album)
        <div class="music-info">
            <div class="music-img">
                <img src="images/albums/{{ $album->cover_photo }}">
            </div>
            <div class="music-name">
                <h6><a href="/albums/{{ $album->id }}">{{ $album->name }}</a></h6>
                <p><a href="/artists/{{ $album->artist->id }}">
                        {{ $album->artist->name }}</a></p>
            </div>
            <i class="fa fa-ellipsis-v"></i>
        </div><hr>
    @endforeach
@endsection
