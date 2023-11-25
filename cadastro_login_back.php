<?php
 

    include_once "db_conn.php";
    if (isset($_POST['cadastrar'])){

        $name_login = $_POST['nome_login'];
        $email_login = $_POST['email_login'];
        $password = $_POST['senha'];
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO teste.users (id, name_login, email_login, password) VALUES ( NULL,'$name_login','$email_login','$password')";

        $result = mysqli_query($conn, $sql);
    
     
        if ($result == false) {

            
            header("Location: /CRUD/cadastro_login.php?msg=false");
        } else {

            header("Location: /CRUD/Login.php?msg=true");
           
        }
    }

   
    