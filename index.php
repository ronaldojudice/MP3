<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
  <title>MP3 Online</title>
</head>
<body>

<div class="container">

<?php

include_once 'helpers.php';

  if(isset($_GET['page'])){
    if(file_exists("pages/{$_GET['page']}.php")){
    include_once "pages/{$_GET['page']}.php";
  }
 else{
    include_once 'pages/error404.php';

  }
}else{
    include 'albums.php';
  }

?>

</div>

  
</body>
</html>