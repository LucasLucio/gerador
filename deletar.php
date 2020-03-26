<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php include("Class/ClassCrud.php");

$Crud=new ClassCrud();
$IdUser=filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);

$Crud->deleteDB(
    "contrato",
    "id=?",
    array(
       $IdUser
    )
);

echo "Dado deletado com sucesso!";
 ?>
  </body>
</html>
