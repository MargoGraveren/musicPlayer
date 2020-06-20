@extends('master')

@section('header')
    <div class="title"><p>{{ $artist->name }}</p></div>
@endsection

@section('content')
    @foreach ($albums as $album)
        @if($album != null && $artist->id == $album->artist_id)
            <div class="music-info">
                <div class="music-img">
                    <img src={{ URL::asset('images/albums/'.$album->cover_photo) }}>
                </div>
                <div class="music-name">
                    <h6><a href="/albums/{{ $album->id }}">{{ $album->name }}</a></h6>
                    <p><a href="/astists/{{ $album->artist->id }}">
                            {{ $album->artist->name }}</a></p>
                </div>
                <i class="fa fa-ellipsis-v"></i>
            </div><hr>
        @endif
    @endforeach
@endsection
