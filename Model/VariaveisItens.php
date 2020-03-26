<?php
#Id
if(isset($_POST['id'])){
  $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset($_GET['id'])) {
  $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
}else {
  $id = 0;
}
#id_documento
if(isset($_POST['id_documento'])){
  $id_documento = filter_input(INPUT_POST, 'id_documento', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset($_GET['id_documento'])) {
  $id_documento = filter_input(INPUT_GET, 'id_documento', FILTER_SANITIZE_SPECIAL_CHARS);
}else {
  $id_documento = 0;
}
#Quantidade
if(isset($_POST['quantidade'])){
  $quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset($_GET['quantidade'])) {
  $quantidade = filter_input(INPUT_GET, 'quantidade', FILTER_SANITIZE_SPECIAL_CHARS);
}else {
  $quantidade = 0;
}
#medida
if(isset($_POST['medida'])){
  $medida = filter_input(INPUT_POST, 'medida', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset($_GET['medida'])) {
  $medida = filter_input(INPUT_GET, 'medida', FILTER_SANITIZE_SPECIAL_CHARS);
}else {
  $medida = 0 ;
}
#descricao
if(isset($_POST['descricao'])){
  $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset($_GET['descricao'])) {
  $descricao = filter_input(INPUT_GET, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);
}else {
  $descricao = "";
}
#valor_unitario
if(isset($_POST['valor_unitario'])){
  $valor_unitario = filter_input(INPUT_POST, 'valor_unitario', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset($_GET['valor_unitario'])) {
  $valor_unitario = filter_input(INPUT_GET, 'valor_unitario', FILTER_SANITIZE_SPECIAL_CHARS);
}else {
  $valor_unitario = "";
}
