<!DOCTYPE html>
<html>
<head>
    <title>Music Player</title>
    <link rel="stylesheet" href={{ URL::asset('css/style.css') }}>
    <link rel="stylesheet" href={{ URL::asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ URL::asset('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}

</head>
<body>
<div class="music-container">
    <div class="music-header">
        <a class="previous-page" href="{{ URL::previous() }}"><i class="fa fa-angle-left"></i></a>
        @yield('header')
        <i class="fa fa-search"></i>
    </div>

    <div class="music-playlist">
        <div class="music-menu text-center">
            <div class="menu">
                <ul>
                    <li><a href="/songs">Songs</a></li>
                    <li><a href="/albums">Albums</a></li>
                    <li><a href="/artists">Artists</a></li>
                </ul>
            </div>
        </div>

        <div class="music-box">
            @yield('content')
        </div>

        <div class="music-play">
            <div class="play-image">
                <img src={{ URL::asset('images/albums/4.PNG') }}>
            </div>

            <div class="play-controls">
                <div class="controls">
                    <div class="song-name">
                        <h5>The Bird</h5>
                        <p>SYML</p>
                    </div>

                    <div class="play-icon">
                        <i class="fa fa-step-backward"></i>
                        <i class="fa fa-play"></i>
                        <i class="fa fa-step-forward"></i>
                    </div>
                </div>

                <div class="music-progress">
                    <div class="progress">
                        <div class="progress-bar">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src={{ URL::asset('js/app.js') }}></script>
</body>
</html>
