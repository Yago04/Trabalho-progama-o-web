
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP </title>

    <!--Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!--font pra estilizar -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:#808080;">
        Painel de Produtos
    </nav>

 <div class="container">


 <?php 

 if(isset($_GET['msg']))  {
    $msg = $_GET['msg'];
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    '.$msg.'
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';


 }
 ?>

    <a href="add_new.php" class="btn btn-dark mb-3">Adicionar Novo Produto</a>


        <table class="table table-hover text-center">
    <thead  class="table-dark">
        <tr>
        <th scope="col">id</th>
        <th scope="col">PRODUTO</th>
        <th scope="col">MERCADO</th>
        <th scope="col">QUANTIDADE</th>
        <th scope="col">VALOR</th>
        <th scope="col">Editar</th>
        </tr>
    </thead>
    <tbody> 
<?php

include "db_conn.php";

$sql = "SELECT * FROM `crud_teste`";
$result =  mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)){


?>
        
    <tr>
    <td><?php  echo $row  ['id']?> </td>
    <td><?php  echo $row  ['produto']?> </td>
    <td><?php  echo $row  ['mercado']?> </td>
    <td><?php  echo $row  ['quantidade']?> </td>
    <td><?php  echo $row  ['valor'] ?> </td>
    <td>
        <a href="edit.php?id=<?php  echo $row['id']  ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
        <a href=" delete.php?id=<?php  echo $row['id'] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
    </td>       
    </tr>   

<?php 

}

?>
    </tbody>
    </table>
    </div>

<!--Bootstrap 5 -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
</body>
</html>