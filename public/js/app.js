var x = document.getElementById("playedSongAudio");

function playAudio() {
    x.play();
}

function pauseAudio() {
    x.pause();
}

function setPlayedSong(element) {
    document.getElementById("playButton").hidden = true;
    document.getElementById("pauseButton").hidden = false;
    document.getElementById("progressBar").style.animation = 'none';

    var sTitle = document.getElementById("songTitle"+element).innerHTML.toString();
    var sArtist = document.getElementById("artistName"+element).innerHTML.toString();
    var sAlbumPhoto = document.getElementById("albumPhoto"+element).src.toString();
    var sAudio = document.getElementById("myAudio"+element).src.toString();

    var lenght = document.getElementById("mySong"+element).duration;

    document.getElementById("progressBar").style.animation = "width "+lenght+"s";
    document.getElementById("playedSongTitle").innerHTML = sTitle;
    document.getElementById("playedSongArtist").innerHTML = sArtist;
    document.getElementById("playedSongAlbumPhoto").src = sAlbumPhoto;
    document.getElementById("playedSongAudio").src = sAudio;
    document.getElementById("songId").innerHTML = element;

    playMusic();

    savePlayedSongInfo();
}

function playMusic() {
    document.getElementById("playButton").hidden = true;
    document.getElementById("pauseButton").hidden = false;
    playAudio();
}

function pauseMusic() {
    document.getElementById("pauseButton").hidden = true;
    document.getElementById("playButton").hidden = false;
    pauseAudio();
}
//TODO find a way to get id of the last song
function playPreviousSong() {
    id = document.getElementById("songId").innerHTML;
    id = parseInt(id);

    if(id==1){
        // clearMusicPlayer();
        setPlayedSong(17);
    }
    else{
        setPlayedSong(id-1);
    }
}

function playNextSong() {
    id = document.getElementById("songId").innerHTML;
    id = parseInt(id);

    if(id==17){
        setPlayedSong(1);
    }
    else{
        setPlayedSong(id+1);
    }
}

function clearMusicPlayer() {
    document.getElementById("progressBar").style.animation = "none";
    document.getElementById("playedSongTitle").innerHTML = "...";
    document.getElementById("playedSongArtist").innerHTML = "...";
    document.getElementById("playedSongAlbumPhoto").src = "/images/emptyScreen.jpg";
    document.getElementById("playedSongAudio").src = "";
    pauseAudio();
}

function savePlayedSongInfo() {
    localStorage.setItem("currentTitle", document.getElementById("playedSongTitle").innerHTML);
    localStorage.setItem("currentArtist", document.getElementById("playedSongArtist").innerHTML);
    localStorage.setItem("currentAlbumPhoto", document.getElementById("playedSongAlbumPhoto").src);
    localStorage.setItem("currentAudio", document.getElementById("playedSongAudio").src);
    localStorage.setItem("currentSongId", document.getElementById("songId").innerHTML);

}

function setCurrentTime() {
    localStorage.setItem("currentMusicTime", document.getElementById("playedSongAudio").currentTime);
    // alert(localStorage.getItem("currentMusicTime"));
}

function getCurrentTime() {
    alert(localStorage.getItem("currentMusicTime"));
}

function setPlayedSongInfo() {
    document.getElementById("playedSongTitle").innerHTML = localStorage.getItem("currentTitle");
    document.getElementById("playedSongArtist").innerHTML = localStorage.getItem("currentArtist");
    document.getElementById("playedSongAlbumPhoto").src = localStorage.getItem("currentAlbumPhoto");
    document.getElementById("playedSongAudio").src = localStorage.getItem("currentAudio");
    document.getElementById("songId").src = localStorage.getItem("currentSongId");
    document.getElementById("playedSongAudio").currentTime = localStorage.getItem("currentMusicTime");
    playMusic();
}
