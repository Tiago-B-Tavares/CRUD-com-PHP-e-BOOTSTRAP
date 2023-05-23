<?php
include_once("dao/manipuladados.php");

$busca = new manipuladados();

$busca->setTable("tb_personagens");


$personagens = $busca->getAllDataTable();

foreach ($personagens as $persona) {

?>


  </div>
  <section class=" py-3">
    <div class="container-fluid card mb-3" >
      <div class="row g-0">
        <figure class="col-md-4 figure-img-personagem w-75">
          <img src="<?= $persona['url']; ?>" class=" rounded-start img-personagem w-50" alt="...">
        </figure>
        <div class="col-md-8">
          <div class="card-body text-light">
            <h5 class="card-title"><?= $persona['nome']; ?></h5>
            <p class="card-text"><?= $persona['descricao']; ?></p>
          </div>
        </div>
      </div>
    </div>




</section>
<?php
          }
            ?>