<?php

session_start();

include"db_conn.php";

if (isset($_POST['Logar'])) {

  
   $email_login = $_POST['email_login'];
   $password = $_POST['password'];


$login = mysqli_query($conn, "SELECT  email_login, password from teste.users where  email_login = '$email_login' and password =  '$password'");

$result = mysqli_fetch_row($login);


if($result == true){
    echo'sucesso';
 $_SESSION = $validado;
    header('Location: /CRUD/index.php');

}else{
    echo'falha';
    header('Location:/CRUD/Login.php?negado=sim');
  
}
}













