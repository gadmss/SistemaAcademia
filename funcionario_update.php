<?php
	include_once "./header.php";

  echo "<div class='col-md-12' style='padding-top:80px; text-align:center'>
            <h3>Alteração de  Funcionario</h3>";

	include_once 'conexao.php';
	$id_func = $_GET["id_func"];
	//$famosos = new stdClass;
	//executa uma instrução SQL de seleção
	$result = $conn -> query("SELECT * FROM funcionario WHERE id_func = '{$id_func}'");
	if ($result){
		$row = $result->fetch();
		$id_func = $row["id_func"];
		$data_admissao = $row["data_admissao"];
		$data_demissao = $row["data_demissao"];
		$id_terceiro = $row["id_terceiro"];
		$id_cargo = $row["id_cargo"];
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
                                <form id="reused_form" method="POST" action="funcionario_alterar.php">
                                	<div class="form-group">
                                        <label ></label>
                                        <input type="hidden" name="id_func" value = "<?php echo $id_func; ?>"required class="form-control" placeholder="Enter id_func">
                                    </div>
                                    <div class="form-group">
                                        <label >Data_admissao</label>
                                        <input type="text" name="data_admissao" value = "<?php echo $data_admissao; ?>"required class="form-control" placeholder="Enter data_admissao">
                                    </div>
                                    <div class="form-group">
                                        <label >Data_demissao</label>
                                        <input type="text" name="data_demissao" value ="<?php echo $data_demissao; ?>"required class="form-control" placeholder="Enter data_demissao">
                                    </div>
                                     <div class="form-group">
                                        <label >Id_terceiro</label>
                                        <input type="text" name="id_terceiro"  value="<?php echo $id_terceiro;?>"required class="form-control" placeholder="Enter id_terceiro">
                                    </div>
                                    <div class="form-group">
                                        <label >Id_cargo</label>
                                        <input type="text" name="id_cargo"  value="<?php echo $id_cargo;?>"required class="form-control" placeholder="Enter id_cargo">
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
