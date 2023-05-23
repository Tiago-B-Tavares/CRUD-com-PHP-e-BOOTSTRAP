<?php
include_once("dao/manipuladados.php");

$busca = new manipuladados();

$busca->setTable("tb_personagen");


$personagens = $busca->getAllDataTable();

foreach ($personagens as $persona) {
  
  ?>
 
    
  </div> 
  <section class="container-fluid ">
  <div class="container card mb-3" style="max-width: 80%;">
<div class="row g-0">
  <div class="col-md-4">
    <img src="<?= $persona['url']; ?>" class="img-fluid rounded-start img-personagem" alt="...">
  </div>
  <div class="col-md-8">
    <div class="card-body">
      <h5 class="card-title"><?= $persona['nome']; ?></h5>
      <p class="card-text"><?= $persona['descricao']; ?></p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
</div>
  
      
    
  
   </section



  <?php
}
?>