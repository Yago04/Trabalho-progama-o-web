<?php

include_once ("db_conn.php");


$id = $_GET['id'];
$sql = "DELETE FROM `crud_teste`  WHERE id = $id";
$result = mysqli_query($conn, $sql);
if($result){

    header("Location: index.php?msg=Delete realizado com sucesso");

}
else{
    echo "falha  " . mysqli_error($conn);


}

?>