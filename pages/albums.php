
  <h1>Albums</h1>

<a class="btn btn-success" href="?page=new_album">Novo album</a>
<hr>
 <div class="row">
 <?php


  $albums =  getAlbums();

 // var_dump($albums);

  foreach($albums as $album) :

    $infoAlbum = explode('/', $album);
    $nameAlbum = $infoAlbum[1];
    $imgAlbum = $album .'/'. $nameAlbum . ".jpg";
    
  
  ?>
   <div class="col-3 album">
     <a href="?page=musics&album=<?=$nameAlbum?>">
   <img src="<?=$imgAlbum ?>" class="img-album">
     <h5><?=$nameAlbum?></h5>
     </a>
   </div>

<?php
  endforeach;
?>
 </div>


