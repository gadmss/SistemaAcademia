
<?php
	include_once "./header.php";
		if(isset($_GET['msg'])){
			$msg = $_GET['msg'];
			echo "
			<div class='alert alert-success' role='alert'>
				$msg
			</div> ";
		}
		if(isset($_GET['msg_erro'])){
			$msg = $_GET['msg_erro'];
			echo "
			<div class='alert alert-danger' role='alert'>
				$msg
			</div> ";
		}
		//incluindo as funcionalidaes do arquivo mysql_conexao_pdo.php
		include_once 'conexao.php';
		include_once 'EnderecoDAO.php';

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pesquisar Endereço</title>
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
                                <form id="" method="POST" action="endereco_listar.php">
                                    <div class="form-group">
                                        <label >Id do Terceiro vinculado</label>
                                        <input type="text" name="id_terceiro" required class="form-control" placeholder="Enter Id_terceiro">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-raised btn-lg btn-warning" type="submit">Pesquisar</button>
                                    </div>
                                </form>
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

