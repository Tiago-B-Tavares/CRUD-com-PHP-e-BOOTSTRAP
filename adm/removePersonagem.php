<?php
include_once("../dao/manipuladados.php");
$id = $_POST["id"];
$manipula = new manipuladados();
$manipula->setTable("tb_personagen");
$manipula->setFieldId('id');
$manipula->setValueId($id);
$manipula->delete();

$status = $manipula->getStatus();

?>