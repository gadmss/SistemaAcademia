<?php
    include_once "./header.php";

  echo "<div class='col-md-12' style='padding-top:80px; text-align:center'>
            <h3>Cadastro de Turma</h3>";

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
                                <form id="reused_form" method="POST" action="turma_salvar.php">
                                    <div class="form-group">
                                        <label >Horario</label>
                                        <input type="text" name="horario" required class="form-control" placeholder="Enter Horario">
                                    </div>
                                    <div class="form-group">
                                        <label >Turno</label>
                                        <input type="text" name="turno" required class="form-control" placeholder="Enter Turno">
                                    </div>
                                     <div class="form-group">
                                        <label >Qtd_Vagas</label>
                                        <input type="text" name="qtd_vagas" required class="form-control" placeholder="Enter Qtd_Vagas">
                                    </div>
                                    <div class="form-group">
                                        <label >Id_servicos</label>
                                        <input type="text" name="id_servicos" required class="form-control" placeholder="Enter Id_servicos">
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