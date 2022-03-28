<a href="?page=albums">Voltar para os albums</a>
<?php

$album = $_GET["album"];
$musics = getMusics($album);

foreach($musics as $music):
$caminhoMusica = explode('/', $music);
$nomeMusica=$caminhoMusica[3];
$nomeMusicaCerto = explode('.', $nomeMusica);
$nomeMusicaCerto2 = $nomeMusicaCerto[0];




?>

<h1>Musicas do album <?=$album?></h1>
<hr>
<div class="col-12">
 <h5><?=$nomeMusicaCerto2?></h5> 
<audio src="=<?$music?>"controls></audio>
</div>


<hr>
<?php
endforeach;
?>
