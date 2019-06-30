<?php
    include_once "./header.php";

  echo "<div class='col-md-12' style='padding-top:80px; text-align:center'>
            <h3>Cadastro de Terceiros</h3>";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastro</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="form.css" >
        <script src="form.js"></script>
        <script>
        </script>
    </head>
    <body >
        <div class="container">
            <div class="container form-top">
                <div class="row">
                    <div class="col-md-12 col-md-offset-3 col-sm-12 col-xs-12">
                        <div class="panel panel-danger">
                            <div class="panel-body" >
                                <?php
    if (isset($_GET["resposta"])) {
        $resposta = $_GET["resposta"];
        $situacao = $_GET["situacao"];
        echo "<div class='$situacao' role='alert'>
                                <CENTER>
                                $resposta
                                </CENTER>
                            </div>";
    }
    ?>
                                <form id="reused_form" method="POST" action="terceiros_salvar.php">
                                    <div class="form-group">
                                        <label >CPF_CNPJ</label>
                                        <input type="text" name="cpf_cnpj" required class="form-control" placeholder="Enter CPF_CNPJ">
                                    </div>
                                    <div class="form-group">
                                        <label >Nome_Razão_Social</label>
                                        <input type="text" name="nome_razao_social" required class="form-control" placeholder="Enter Nome_Razão_Social">
                                    </div>
                                     <div class="form-group">
                                        <label >Telefone</label>
                                        <input type="text" name="telefone" required class="form-control" placeholder="Enter Telefone">
                                    </div>
                                    <div class="form-group">
                                        <label >E_mail</label>
                                        <input type="text" name="e_mail" required class="form-control" placeholder="Enter E_mail">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-raised btn-lg btn-warning" type="submit">Salvar</button>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>