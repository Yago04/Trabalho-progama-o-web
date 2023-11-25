<?php

include "db_conn.php";
$id = $_GET['id'];


if (isset($_POST['enviar'])) {
    $produto = $_POST['produto'];
    $mercado = $_POST['mercado'];
    $quantidade = $_POST['quantidade'];
    $valor = $_POST['valor'];


    $sql = "UPDATE teste.crud_teste SET  produto= '$produto', mercado= '$mercado', quantidade= '$quantidade' , valor= '$valor' WHERE id=$id";

    $result = mysqli_query($conn, $sql);

    if ($result) {

        header("location: index.php?msg=Data update sucessfully");
    } else {

        echo "falha" . mysqli_error($conn);
    }
}
?>



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
        Editar Usuarios
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3>Editar informação do produto</h3>
            <p class="text-muted">clique em atualizar após alterar qualquer informação</p>

        </div>

        <?php
        $sql = "SELECT * FROM  `crud_teste` where id= $id LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_object($result);


        ?>
        <div class="container d-flex justify-content-center">

            <form action="" method="post" style="width: 50vw; min-width: 300px">

                <div class="row mb-3">
                    <div class="col">

                        <label class="form-label">PRODUTO:</label>
                        <input type="text" class="form-control" name="produto" value="<?php echo $row->produto ?>">
                    </div>

                    <div class="col">
                        <label class="form-label">MERCADO:</label>
                        <input type="text" class="form-control" name="mercado" value="<?php echo $row->mercado ?>">
                    </div>

                </div>

                <div class="row mb-3">

                    <div class=" col-md-6 mb-3" style="display:flex; align-items:center">
                        <label class="form-label">Quantidade:</label>
                        <input type="number" class="form-control" name="quantidade" placeholder="0">
                    </div>


                    <div class=" col-md-6 mb-2" style="display:flex; align-items:center">
                        <label>Valor$$:</label> &nbsp;
                        <input type="text" class="form-control" name="valor">
                    </div>
                </div>


        <div>
            <button type="submit" class=" btn btn-success" name="enviar">Atualizar</button>
            <a href="index.php " class="btn btn-danger" name="submit">Cancelar</a>

        </div>
        </form>


        </div>
    </div>

    </div>


    <!--Bootstrap 5 -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>