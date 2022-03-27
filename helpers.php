<?php

function getAlbums(){
   $album =  glob('albums/*');

   return $album;
}