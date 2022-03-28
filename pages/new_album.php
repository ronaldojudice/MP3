<a class="btn btn-previous"  href="?page=albums">Voltar para albums</a>
<h1>Novo Album</h1>
<hr>
<form action="#" method="post" ectype="multipart/form-data">
  <div class="form-group">
  <input type="text" name="name" placeholder="Nome" class="form-control"> <br>
  </div>
  <div class="form-group">
  <input type="file" name="image"  class="form-control"><br><br>
  </div>

<button class="btn btn-success"type="submit">Cadastrar</button>

</form>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  var_dump($_FILES['image']);
}
?>

