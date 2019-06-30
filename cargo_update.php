<?php
	include_once "./header.php";

  echo "<div class='col-md-12' style='padding-top:80px; text-align:center'>
            <h3>Alteração de  Cargo</h3>";

	include_once 'conexao.php';
	$id_cargo = $_GET["id_cargo"];
	//$famosos = new stdClass;
	//executa uma instrução SQL de seleção
	$result = $conn -> query("SELECT * FROM cargo WHERE id_cargo = '{$id_cargo}'");
	if ($result){
		$row = $result->fetch();
		$id_cargo = $row["id_cargo"];
		$descricao = $row["descricao"];
		$salario = $row["salario"];
		$atribuicoes = $row["atribuicoes"];
	}
	
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
                                <form id="reused_form" method="POST" action="cargo_alterar.php">
                                	<div class="form-group">
                                        <label ></label>
                                        <input type="hidden" name="id_cargo" value = "<?php echo $id_cargo; ?>"required class="form-control" placeholder="Enter Descrição">
                                    </div>
                                    <div class="form-group">
                                        <label >Descriçao</label>
                                        <input type="text" name="descricao" value = "<?php echo $descricao; ?>"required class="form-control" placeholder="Enter Descrição">
                                    </div>
                                    <div class="form-group">
                                        <label >Salario</label>
                                        <input type="text" name="salario" value ="<?php echo $salario; ?>"required class="form-control" placeholder="Enter Salario">
                                    </div>
                                     <div class="form-group">
                                        <label >Atribuicões</label>
                                        <input type="text" name="atribuicoes"  value="<?php echo $atribuicoes; ?>"required class="form-control" placeholder="Enter atribuicoes">
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
