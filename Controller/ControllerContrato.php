<?php
include("../Model/Variaveis.php");
include("../Class/ClassCrud.php");

$Crud=new ClassCrud();
if ($id == null || $id == 0) {
  $date = new DateTime();
$Crud->insertDB(
        "contrato",
        "?,?,?,?,?,?,?,?,?,?,?,?,?,?,?",
        array(
            $id,
            $tipo_documento,
            $empresa,
            $cliente,
            $cpf_cnpj,
            $endereco,
            $bairro,
            $numero,
            $cidade,
            $estado,
            $valortotal,
            $desconto,
            $acrescimo,
            $data_solicitacao,
            $observacao
        )
);
echo "<script>window.location='../Views/Itens/inserir.php';alert('Criado com Sucesso, Agora só falta os Itens');</script>";
//echo = "<meta http-equiv='Refresh' content='0;URL=../Views/inserir.php>';
}

if ($id != null && $id != 0) {
  $Crud->updateDB(
    "contrato",
    "tipo_documento=?,empresa=?,cliente=?,cpf_cnpj=?,endereco=?,bairro=?,numero=?,cidade=?,estado=?,valor_total=?,desconto=?,acrescimo=?,data_solicitacao=?,observacao=?",
    "id=?",
    array(
        $tipo_documento,
        $empresa,
        $cliente,
        $cpf_cnpj,
        $endereco,
        $bairro,
        $numero,
        $cidade,
        $estado,
        $valortotal,
        $desconto,
        $acrescimo,
        $data_solicitacao,
        $observacao,
        $id
      )
    );
    echo "Atualizado com Sucesso";
}