<!DOCTYPE html>
<html>
<head>
    <title>Music Player</title>
    <link rel="stylesheet" href={{ URL::asset('css/style.css') }}>
    <link rel="stylesheet"
          href={{ URL::asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css') }}>
    <link rel="stylesheet"
          href={{ URL::asset('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}>

</head>
<body onload="setPlayedSongInfo()">
<div class="music-container">
    <div class="music-header">
{{--        <a class="previous-page" href="{{ URL::previous() }}"><i class="fa fa-angle-left"></i></a>--}}
        @yield('header')
{{--        <i class="fa fa-search"></i>--}}
    </div>

    <div class="music-playlist">
        <div class="music-menu text-center">
            <div class="menu">
                <ul>
                    <li><a href="/songs" onclick="setCurrentTime()">Songs</a></li>
                    <li><a href="/albums" onclick="setCurrentTime()">Albums</a></li>
                    <li><a href="/artists" onclick="setCurrentTime()">Artists</a></li>
                </ul>
            </div>
        </div>

        <div class="music-box">
            @yield('content')
        </div>
    </div>

    <footer>
        <div class="music-play">
            <audio id="playedSongAudio">
                <source src="">
            </audio>

            <div class="play-image">
                <img id="playedSongAlbumPhoto" src={{ URL::asset('images/emptyScreen.jpg') }}>
            </div>

            <div id="musicPlayer" class="play-controls">
                <div class="controls">
                    <div class="song-name">
                        <h5 id="playedSongTitle">...</h5>
                        <p id="playedSongArtist">...</p>
                        <p id="songId" hidden="hidden">...</p>
                    </div>

                    <div class="play-icon">
                        <i id="previousButton" onclick="playPreviousSong()" class="fa fa-step-backward"></i>
                        <i id="playButton" onclick="playMusic()" class="fa fa-play"></i>
                        <i id="pauseButton" onclick="pauseMusic()" class="fa fa-pause" hidden="hidden"></i>
                        <i id="nextButton" onclick="playNextSong()" class="fa fa-step-forward"></i>
                    </div>
                </div>

                <div class="music-progress">
                    <div id="progressBar" class="progress">
                        <div class="progress-bar">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<script src="{{ URL::asset('js/app.js') }}"></script>
</body>
</html>
