<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Albums</title>
</head>
<body>
  <h1>Albums</h1>


 <div class="row">
 <?php
  $albums = getAlbums();

  var_dump($albums);

  foreach ($albums as $album){
    $album = explode(",", $album);
    $infoAlbum
  }
  ?>
   <div class="col-3 album">
   <img src="./images/soad.jpg" class="img-album">
     <h5>Album <?php echo $i ?></h5>
    
   </div>

 <?php
endforeach;
?>
 </div>


</body>
</html>