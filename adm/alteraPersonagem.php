<?php
include_once("../dao/manipuladados.php");

$id = $_POST["id"];
$nomecurso = $_POST["txtNome"];
$descricao = $_POST["txtDesc"];
$duracao = $_POST["txtDuracao"];

$diretorio = "adm/uploadImg";

if (isset($_FILES['arquivo'])) {
    $arquivo = $_FILES['arquivo']['name'];
    $arquivo = str_replace(' ', '_', $arquivo);

    $caminho_completo = "../" . $diretorio . "/" . $arquivo;

    if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $caminho_completo)) {
        echo "A imagem " . $arquivo . " foi enviada para o servidor!";
        $caminho_completo = str_replace('../', '',$caminho_completo ); 
    } else {
        echo "Erro ao enviar imagem.";
    }

    
/*  */
    $manipula = new manipuladados();
    $manipula->setTable("tb_personagen");
    $manipula->setFieldId('id');
    $manipula->setFields("nome='$nomecurso', descricao='$descricao', duracao='$duracao', url='$caminho_completo'");
    $manipula->setValueId($id);

    $manipula->update();
} else {
    $manipula = new manipuladados();
    $manipula->setTable("tb_personagen");
    $manipula->setFieldId('id');
    $manipula->setFields("nome='$nomecurso', descricao='$descricao', duracao='$duracao'");
    $manipula->setValueId($id);

    $manipula->update();
}

$status = $manipula->getStatus();
?>