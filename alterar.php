<?php
    include "conexao.php";

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $id = $_POST["id"];

    $stmt = $conn->prepare("UPDATE cliente SET nome = '$nome' , email = '$email' , tel = '$tel' WHERE id = '$id' ");

    if($stmt->execute() === TRUE){
        $response = array('return'=>TRUE);
        echo json_encode($response);
    }else {
        $response = array('return'=>FALSE);
        echo json_encode($response);
    }
?>
