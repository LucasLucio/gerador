<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        include("class/ClassCrud.php");

        $Crud = new ClassCrud();
        $BFetch = $Crud->selectDB("*","contrato","where id=?", array($_GET['id']));
        $Fetch = $BFetch->fetch(PDO::FETCH_ASSOC);

        //Map da Classe
        $id = $Fetch['id'];
        $tipo_documento = $Fetch['tipo_documento'];
        $empresa = $Fetch['empresa'];
        $cliente = $Fetch['cliente'];
        $cpf_cnpj = $Fetch['cpf_cnpj'];
        $endereco = $Fetch['endereco'];
        $bairro = $Fetch['bairro'];
        $numero = $Fetch['numero'];
        $cidade = $Fetch['cidade'];
        $estado = $Fetch['estado'];
        $valortotal = $Fetch['valor_total'];
        $desconto = $Fetch['desconto'];
        $acrescimo = $Fetch['acrescimo'];
        $observacao = $Fetch['observacao'];
     ?>
     <div class="Formulario">
       <form name="FormularioCadastro" id="FormularioCadastro" method="post" action="Controller/ControllerContrato.php">
        <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
        <input type="text" id="tipo_documento" name="tipo_documento" value="<?php echo $tipo_documento; ?>">
        <input type="text" id="empresa" name="empresa" value="<?php echo $empresa; ?>">
        <input type="text" id="cliente" name="cliente" value="<?php echo $cliente; ?>">
        <input type="text" id="cpf_cnpj" name="cpf_cnpj" value="<?php echo $cpf_cnpj; ?>">
        <input type="text" id="endereco" name="endereco" value="<?php echo $endereco; ?>">
        <input type="text" id="bairro" name="bairro" value="<?php echo $bairro; ?>">
        <input type="number" id="numero" name="numero" value="<?php echo $numero; ?>">
        <input type="text" id="cidade" name="cidade" value="<?php echo $cidade; ?>">
        <input type="text" id="estado" name="estado" value="<?php echo $estado; ?>">
        <input type="number" id="valortotal" name="valortotal" value="<?php echo $valortotal; ?>">
        <input type="number" id="desconto" name="desconto" value="<?php echo $desconto; ?>">
        <input type="number" id="acrescimo" name="acrescimo" value="<?php echo $acrescimo; ?>">
        <input type="text" id="observacao" name="observacao" value="<?php echo $observacao; ?>">
       <input type="submit" value="Cadastrar">
       </form>
     </div>
  </body>
</html>
