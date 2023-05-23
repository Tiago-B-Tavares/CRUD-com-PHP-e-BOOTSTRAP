<?php
include_once("../dao/manipuladados.php");
$diretorio = "../adm/uploadImg";

$arquivo = $_FILES['arquivo']['name'];

$arquivo = str_replace(' ', '_', $arquivo);

$caminho_completo = $diretorio . "/" . $arquivo;

if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $caminho_completo)) {
    echo "A imagem " . $arquivo . " foi enviada para o servidor!";
    $caminho_completo = str_replace('../', '',$caminho_completo ); 
} else {
    echo "Erro ao enviar imagem.";
}

$nomePersonagem = $_POST["txtNome"];
$descricao = $_POST["txtDesc"];



$manipula = new manipuladados();
$manipula->setTable("tb_personagens");
$manipula->setFields("nome,descricao,url");
$manipula->setDados("'$nomePersonagem','$descricao', '$caminho_completo'");
$manipula->insert();
echo $manipula->getStatus();
$status = $manipula->getStatus();

if ($status == "Cadastro com Sucesso!!!") {
    echo '<script>alert("Personagem cadastrado com sucesso!");</script>';
    header("Location: principal.php?");
    exit();

} else {
    echo '<script>alert("Erro ao Cadstrar personagem");</script>';
} 
?>