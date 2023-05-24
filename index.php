<?php
include_once("controller/verurl.php");
include_once("dao/conexao.php");
include_once("dao/manipuladados.php");
$con = new conexao();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>God Of War</title>
  <link rel="shortcut icon" href="src/img/peakpx.jpg" type="image/x-icon">

  <!-- Bootstrap -->

  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/app.css">

  <!-- Animate -->
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

</head>

<body>

  <header class=" navbar-expand-lg  container-fluid navbar-custom ">

    <?php include("includes/menu.php") ?>


  </header>


  <main class="main bg-dark">


    <?php
    $red = new verurl();
    $red->trocaUrl(@$_GET['secao']);
    ?>

  </main>


  <footer class="container-fluid bg-dark">
    <?php include("includes/rodape.php") ?>
  </footer>


  <script src="js/bootstrap.js"></script>
</body>

</html>