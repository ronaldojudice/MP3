<?php

function getAlbums(){
   $album =  glob('albums/*');

   return $album;
}


function getMusics($album){
   $musics= glob("albums/{$album}/musics/*.ogg");
   return $musics;
}