<?php
include("class/ClassCrud.php");
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>

    </title>
    <script type="text/javascript">
    /* Confirmar antes de deletar os dados */
$('.Deletar').on('click',function(event){
    event.preventDefault();

    var Link=$(this).attr('href');

    if(confirm("Deseja mesmo apagar esse dado?")){
        window.location.href=Link;
    }else{
        return false;
    }
});
    </script>
  </head>
  <body>
    <!-- Estrutura e Loop -->
    <?php
      $Crud=new ClassCrud();
      $BFetch = $Crud->selectDB(
        "*",
        "contrato",
        "",
        array()
      );
      while ($Fetch = $BFetch->fetch(PDO::FETCH_ASSOC)) {
     ?>
     <tr>
       <td><?php echo $Fetch['id'] ?></td>
       <td><?php echo $Fetch['tipo_documento'] ?></td>
       <td>
         <a href="<?php echo "visualizar.php?id={$Fetch['id']}"; ?>">ver</a>
         <a href="<?php echo "editar.php?id={$Fetch['id']}"; ?>">editar</a>
         <a class="Deletar" href="<?php echo "deletar.php?id={$Fetch['id']}"; ?>">Deletar</a>
       </td>
     </tr>
     <?php
      }
      ?>
  </body>
</html>
