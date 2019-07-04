<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/estilo2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css">

    <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">

    <script src="excluir.js"></script>
    
    <title>Olá, mundo!</title>
</head>

<body>
<?php include "conexao.php"; ?>
<header>
        <nav class="menu">
            <div class="links">
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <div class="dropdown">
                            <a class="" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Cadastrar
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="cadastraCliente.html">Cliente</a>
                                <a class="dropdown-item" href="#">Funcionário</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown">
                            <a class="" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Listar
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="listarCliente.php">Cliente</a>
                                <a class="dropdown-item" href="#">Funcionário</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="table-responsive animated fadeInUp">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            </thead>

            <?php
            $sql = $conn->query("SELECT * FROM cliente");
            while($users = $sql->fetch(PDO::FETCH_OBJ)){
            ?>
             <tbody>
                <tr>
                    <th scope="row"><?php echo $users->id;?></th>
                    <td><?php echo $users->nome;?></td>
                    <td><?php echo $users->email;?></td>
                    <td><?php echo $users->tel;?></td>
                    <td><button type="button" class="btn btn-warning" onclick="javascript: location.href='confirmaAlterarCliente.php?id=<?php echo$users->id;?>'" id="btn1">Alterar</button></td>
                    <td><button type="button" class="btn btn-danger" id="btn2" value="<?php echo $users->id;?>">Excluir</button></td>
                </tr>
            </tbody>
        <?php
            }
        ?>  
        </table>
    </div>

</body>

</html>