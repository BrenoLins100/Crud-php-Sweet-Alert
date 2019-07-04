<?php

include_once "conexao.php";

$id = $_POST['id'];

$sql = $conn->query("DELETE FROM cliente WHERE id = $id");

if($sql->execute() == TRUE){
    $response = array('return'=> TRUE);
    echo json_encode($response);
}
else{
    $response = array('return'=> FALSE);
    echo json_decode($response);
}

?>