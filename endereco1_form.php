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
                    <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
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
                                <form id="reused_form" method="POST" action="endereco_salvar.php">
                                    <div class="form-group">
                                        <label >Pais</label>
                                        <input type="text" name="pais" required class="form-control" placeholder="Enter Pais">
                                    </div>
                                    <div class="form-group">
                                        <label >UF</label>
                                        <input type="text" name="uf" required class="form-control" placeholder="Enter UF">
                                    </div>
                                     <div class="form-group">
                                        <label >Cep</label>
                                        <input type="text" name="cep" required class="form-control" placeholder="Enter atribuicoes">
                                    </div>
                                    <div class="form-group">
                                        <label >Cidade</label>
                                        <input type="text" name="cidade" required class="form-control" placeholder="Enter Cidade">
                                    </div>
                                    <div class="form-group">
                                        <label >Bairro</label>
                                        <input type="text" name="bairro" required class="form-control" placeholder="Enter Bairro">
                                    </div>
                                     <div class="form-group">
                                        <label >Logradouro</label>
                                        <input type="text" name="logradouro" required class="form-control" placeholder="Enter Logradouro">
                                    </div>
                                    <div class="form-group">
                                        <label >Numero</label>
                                        <input type="text" name="numero" required class="form-control" placeholder="Enter Numero">
                                    </div>
                                    <div class="form-group">
                                        <label >Id_terceiros</label>
                                        <input type="text" name="id_terceiro" required class="form-control" placeholder="Enter Id_terceiros">
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