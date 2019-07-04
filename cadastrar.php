
<?php
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];

    include_once 'conexao.php';
    $stmt = $conn->prepare("INSERT INTO cliente (id,nome, email, tel)
    VALUES (null,'$nome', '$email', '$tel')");

    $stmt->execute();
        

      $response = array('return'=> true);
      echo json_encode($response);


?>

