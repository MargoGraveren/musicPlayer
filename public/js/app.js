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

    var sTitle = document.getElementById("songTitle"+element).innerHTML.toString();
    var sArtist = document.getElementById("artistName"+element).innerHTML.toString();
    var sAlbumPhoto = document.getElementById("albumPhoto"+element).src.toString();
    var sAudio = document.getElementById("myAudio"+element).src.toString();

    document.getElementById("playedSongTitle").innerHTML = sTitle;
    document.getElementById("playedSongArtist").innerHTML = sArtist;
    document.getElementById("playedSongAlbumPhoto").src = sAlbumPhoto;
    document.getElementById("playedSongAudio").src = sAudio;
    var lenght = document.getElementById("myAudio"+element).duration;
    alert(lenght);
    playMusic();

    document.getElementById("progressBar").style.animation = "width 50s infinite";
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

function getPreviousSong() {

}

function getNextSong(id) {
    var x = document.getElementById()
}

