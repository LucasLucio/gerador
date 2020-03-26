<?php
#Id
if(isset($_POST['id'])){
  $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset($_GET['id'])) {
  $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
}else {
  $id = 0;
}
#tipo_documento
if(isset($_POST['tipo_documento'])){
  $tipo_documento = filter_input(INPUT_POST, 'tipo_documento', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset($_GET['tipo_documento'])) {
  $tipo_documento = filter_input(INPUT_GET, 'tipo_documento', FILTER_SANITIZE_SPECIAL_CHARS);
}else {
  $tipo_documento = "";
}
#Empresa
if(isset($_POST['empresa'])){
  $empresa = filter_input(INPUT_POST, 'empresa', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset($_GET['empresa'])) {
  $empresa = filter_input(INPUT_GET, 'empresa', FILTER_SANITIZE_SPECIAL_CHARS);
}else {
  $empresa = "";
}
#cliente
if(isset($_POST['cliente'])){
  $cliente = filter_input(INPUT_POST, 'cliente', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset($_GET['cliente'])) {
  $cliente = filter_input(INPUT_GET, 'cliente', FILTER_SANITIZE_SPECIAL_CHARS);
}else {
  $cliente = "";
}
#cpf_cnpj
if(isset($_POST['cpf_cnpj'])){
  $cpf_cnpj = filter_input(INPUT_POST, 'cpf_cnpj', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset($_GET['cpf_cnpj'])) {
  $cpf_cnpj = filter_input(INPUT_GET, 'cpf_cnpj', FILTER_SANITIZE_SPECIAL_CHARS);
}else {
  $cpf_cnpj = "";
}
#endereco
if(isset($_POST['endereco'])){
  $endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset($_GET['endereco'])) {
  $endereco = filter_input(INPUT_GET, 'endereco', FILTER_SANITIZE_SPECIAL_CHARS);
}else {
  $endereco = "";
}
#bairro
if(isset($_POST['bairro'])){
  $bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset($_GET['bairro'])) {
  $bairro = filter_input(INPUT_GET, 'bairro', FILTER_SANITIZE_SPECIAL_CHARS);
}else {
  $bairro = "";
}
#numero
if(isset($_POST['numero'])){
  $numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset($_GET['numero'])) {
  $numero = filter_input(INPUT_GET, 'numero', FILTER_SANITIZE_SPECIAL_CHARS);
}else {
  $numero = 0;
}
#cidade
if(isset($_POST['cidade'])){
  $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset($_GET['cidade'])) {
  $cidade = filter_input(INPUT_GET, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS);
}else {
  $cidade = "";
}
#estado
if(isset($_POST['estado'])){
  $estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset($_GET['estado'])) {
  $estado = filter_input(INPUT_GET, 'estado', FILTER_SANITIZE_SPECIAL_CHARS);
}else {
  $estado = "";
}
#valortotal
if(isset($_POST['valortotal'])){
  $valortotal = filter_input(INPUT_POST, 'valortotal', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset($_GET['valortotal'])) {
  $valortotal = filter_input(INPUT_GET, 'valortotal', FILTER_SANITIZE_SPECIAL_CHARS);
}else {
  $valortotal = 0;
}
#desconto
if(isset($_POST['desconto'])){
  $desconto = filter_input(INPUT_POST, 'desconto', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset($_GET['desconto'])) {
  $desconto = filter_input(INPUT_GET, 'desconto', FILTER_SANITIZE_SPECIAL_CHARS);
}else {
  $desconto = 0;
}
#acrescimo
if(isset($_POST['acrescimo'])){
  $acrescimo = filter_input(INPUT_POST, 'acrescimo', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset($_GET['acrescimo'])) {
  $acrescimo = filter_input(INPUT_GET, 'acrescimo', FILTER_SANITIZE_SPECIAL_CHARS);
}else {
  $acrescimo = 0;
}
#data_solicitacao
if(isset($_POST['data_solicitacao'])){
  $data_solicitacao = filter_input(INPUT_POST, 'data_solicitacao', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset($_GET['data_solicitacao'])) {
  $data_solicitacao = filter_input(INPUT_GET, 'data_solicitacao', FILTER_SANITIZE_SPECIAL_CHARS);
}else {
  $data_solicitacao = date('d/m/y');
}
#observacao
if(isset($_POST['observacao'])){
  $observacao = filter_input(INPUT_POST, 'observacao', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset($_GET['observacao'])) {
  $observacao = filter_input(INPUT_GET, 'observacao', FILTER_SANITIZE_SPECIAL_CHARS);
}else {
  $observacao = "";
}
#acao
if(isset($_POST['acao'])){
  $observacao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset($_GET['acao'])) {
  $observacao = filter_input(INPUT_GET, 'acao', FILTER_SANITIZE_SPECIAL_CHARS);
}else {
  $observacao = "";
}
