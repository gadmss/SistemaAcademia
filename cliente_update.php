<?php
	include_once "./header.php";

  echo "<div class='col-md-12' style='padding-top:80px; text-align:center'>
            <h3>Alteração de  Cliente</h3>";

	include_once 'conexao.php';
	$codigo = $_GET["codigo"];
	//$famosos = new stdClass;
	//executa uma instrução SQL de seleção
	$result = $conn -> query("SELECT * FROM cliente WHERE codigo = '{$codigo}'");
	if ($result){
		$row = $result->fetch();
		$codigo = $row["codigo"];
		$status = $row["status"];
		$terceiros_id_cliente = $row["terceiros_id_cliente"];
	}
	
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Alterar</title>
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
                                <form id="reused_form" method="POST" action="cliente_alterar.php">
                                	<div class="form-group">
                                        <label ></label>
                                        <input type="hidden" name="codigo" value = "<?php echo $codigo; ?>"required class="form-control" placeholder="Enter codigo">
                                    </div>
                                    <div class="form-group">
                                        <label >Status</label>
                                        <input type="text" name="status" value = "<?php echo $status; ?>"required class="form-control" placeholder="Enter status">
                                    </div>
                                    <div class="form-group">
                                        <label >Id_terceiros</label>
                                        <input type="text" name="terceiros_id_cliente" value ="<?php echo $terceiros_id_cliente; ?>"required class="form-control" placeholder="Enter terceiros_id_cliente">
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
