<?php
include_once("../dao/manipuladados.php");
$id = $_POST["idDelete"];
$manipula = new manipuladados();
$manipula->setTable("tb_personagens");
$manipula->setFieldId('id');
$manipula->setValueId($id);
$manipula->delete();

$status = $manipula->getStatus();

?>