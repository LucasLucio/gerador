<?php
include("class/ClassCrud.php");
 ?>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $Crud=new ClassCrud();
      $IdUser=filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);
      $BFetch = $Crud->selectDB(
        "*",
        "contrato",
        "where id_contrato=?",
        array($IdUser)
      );
      $Fetch = $BFetch->fetch(PDO::FETCH_ASSOC);
    ?>
    <h1><?php echo $Fetch['id_contrato']; ?></h1>
    <h1><?php echo $Fetch['data_solicitacao']; ?></h1>
  </body>
</html>
