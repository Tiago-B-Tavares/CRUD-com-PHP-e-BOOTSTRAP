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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/app.css">

  <!-- Animate -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

</head>

<body>

  <header class=" navbar-expand-lg  container-fluid navbar-custom ">

    <?php include("includes/menu.php"); ?>


  </header>


  <main class="main conatier-fluid ">


    <?php
    $red = new verurl();
    $red->trocaUrl(@$_GET['secao']);
    ?>

  </main>


  <footer class="container-fluid bg-dark">
    <?php include("includes/rodape.php") ?>
  </footer>
  <!-- Bootstrap Javascript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
  <script src="js/bootstrap.js"></script>
</body>

</html>