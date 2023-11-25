
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
    <link rel="stylesheet" href="style.css">
</head>

<body>

  
<nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:#808080;">
      TRABALHO DE PROGRAMAÇÃO WEB
    </nav>


    <div class="tela_cadastro">
        <form  method="post" action="cadastro_login_back.php">
        <h3>Cadastro de Usuario</h3>
        <input type="text" placeholder="nome" name="nome_login" require>
        <br><br>
        <input type="text" placeholder="email" name="email_login" require>
        <br><br>
        <input type="password" placeholder="senha" name="senha" require>
        <br><br>
       <button name="cadastrar"  type="submit" class=" btn btn-success">Cadastrar</button>
        <br><br>
        <a href="Login.php">Ir para o login</a>

    </form>
    </div>

    <!--Bootstrap 5 -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>