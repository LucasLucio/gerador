<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        include("class/ClassCrud.php");
     ?>
     <div class="Formulario">
       <form name="FormularioCadastro" id="FormularioCadastro" method="post" action="Controller/ControllerContrato.php">
        <input type="number" id="tipo_documento" name="tipo_documento" value="">
        <input type="text" id="empresa" name="empresa" value="">
        <input type="text" id="cliente" name="cliente" value="">
        <input type="text" id="cpf_cnpj" name="cpf_cnpj" value="">
        <input type="text" id="endereco" name="endereco" value="">
        <input type="text" id="bairro" name="bairro" value="">
        <input type="number" id="numero" name="numero" value="">
        <input type="text" id="cidade" name="cidade" value="">
        <input type="text" id="estado" name="estado" value="">
        <input type="number" id="valortotal" name="valortotal" value="">
        <input type="number" id="desconto" name="desconto" value="">
        <input type="number" id="acrescimo" name="acrescimo" value="">
        <input type="text" id="observacao" name="observacao" value="">
       <input type="submit" value="Cadastrar">
       </form>
     </div>
  </body>
</html>
