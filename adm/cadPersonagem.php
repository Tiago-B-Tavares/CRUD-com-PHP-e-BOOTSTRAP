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

$nomecurso = $_POST["txtNome"];
$descricao = $_POST["txtDesc"];
$duracao = $_POST["txtDuracao"];


$manipula = new manipuladados();
$manipula->setTable("tb_personagen");
$manipula->setFields("nome,descricao,duracao,url");
$manipula->setDados("'$nomecurso','$descricao','$duracao', '$caminho_completo'");
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