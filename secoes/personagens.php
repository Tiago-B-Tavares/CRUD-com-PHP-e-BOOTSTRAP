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
        <figure class="col-sm-12 col-md-6 col-lg-6 figure-img-personagem w-auto py-3  ">
          <img src="<?= $persona['url']; ?>" class=" rounded-start img-personagem " alt="...">
        </figure>
        <div class="col-sm-12 col-md-6 col-lg-6">
          <div class="card-body text-dark">
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