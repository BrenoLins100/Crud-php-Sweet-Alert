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

    <script src="alterar.js"></script>
    <script src="limpar.js"></script>

    <script>
        $(document).ready(function() {
            $('#btn-confirma').click(function() {
                $('#botoesConfirma,small,#linhaBotoes').toggleClass('active')
            });
        });

        $(document).ready(function() {
            $('.btn.btn-danger').click(function() {
                $('#botoesConfirma,small,#linhaBotoes').removeClass('active')
            });
        });
    </script>
    <title>Olá, mundo!</title>
</head>

<body>

    <header>
        <nav class="menu">
            <div class="links">
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <div class="dropdown">
                            <a class="" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                            <a class="" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

    <main>
       
        <?php

            $style = "";

            $id = $_GET['id'];

            include_once 'conexao.php';

            $sql = $conn->query("SELECT * FROM cliente WHERE id = $id");

            $users = $sql->fetch(PDO::FETCH_OBJ);

            if($users->id == null)
            {
                echo "<p style='color:red;'>O registro foi excluido, retorne a página de cadastro.</p>";
                $style='style="display:none;"';
            }
            ?>
            <div <?php echo $style; ?> class="container" id="confirmaAlterar">
                <div class="alerta">
                    <?php echo"<p style='color:#3498db;margin:20px 20px;'>Olá: $users->nome</p>"?>
                </div>
                <div class="form-group">
                    <label for="nome">Código:</label>
                    <input type="number" class="form-control" readonly="true" id="id" name="id" value="<?php echo $users->id;?>">
                </div>

                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="nome" class="form-control" id="nome" name="nome" value="<?php echo $users->nome?>">
                </div>

                <div class="form-group">
                    <label for="email">Endereço de email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $users->email?>">
                </div>

                <div class="form-group">
                    <label for="tel">Telefone:</label>
                    <input type="number" class="form-control" id="tel" name="tel"value="<?php echo $users->tel?>">
                </div>

                <div class="container" id="linhaBotoes">
                    <button onclick="return false;" id="btn-confirma" class="btn btn-primary">Confirmar
                        alteração</button>
                    <button onclick="return false;"id="btn-limpar" class="btn btn-primary">Limpar</button>
                </div>

            </div>

            <small class="animated slideInLeft">Confimar:</small>

            <div class="container animated zoomIn" id="botoesConfirma">
                <div class="row">
                    <div class="col-md-12">
                        <button id="alterar" class="btn btn-success">&#10003;</button>
                        <button onclick="return false;" class="btn btn-danger">&#x2716;</button>
                    </div>
                </div>
            </div>

    </main>


</body>

</html>