<?php
	include_once "./header.php";

  echo "<div class='col-md-12' style='padding-top:80px; text-align:center'>
            <h3>Alteração de  Turma</h3>";

	include_once 'conexao.php';
	$id_turma = $_GET["id_turma"];
	//$famosos = new stdClass;
	//executa uma instrução SQL de seleção
	$result = $conn -> query("SELECT * FROM turma WHERE id_turma = '{$id_turma}'");
	if ($result){
		$row = $result->fetch();
		$id_turma = $row["id_turma"];
		$horario = $row["horario"];
		$turno = $row["turno"];
		$qtd_vagas = $row["qtd_vagas"];
		$id_servicos = $row["id_servicos"];
	}
	
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Alteração</title>
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
                                <form id="reused_form" method="POST" action="turma_alterar.php">
                                	<div class="form-group">
                                        <label ></label>
                                        <input type="hidden" name="id_turma" value = "<?php echo $id_turma; ?>"required class="form-control" placeholder="Enter id_turma">
                                    </div>
                                    <div class="form-group">
                                        <label >Horario</label>
                                        <input type="text" name="horario" value = "<?php echo $horario; ?>"required class="form-control" placeholder="Enter horario">
                                    </div>
                                    <div class="form-group">
                                        <label >Turno</label>
                                        <input type="text" name="turno" value ="<?php echo $turno; ?>"required class="form-control" placeholder="Enter turno">
                                    </div>
                                     <div class="form-group">
                                        <label >Qtd_vagas</label>
                                        <input type="text" name="qtd_vagas"  value="<?php echo $qtd_vagas;?>"required class="form-control" placeholder="Enter qtd_vagas">
                                    </div>
                                    <div class="form-group">
                                        <label >Id_servicos</label>
                                        <input type="text" name="id_servicos"  value="<?php echo $id_servicos;?>"required class="form-control" placeholder="Enter id_servicos">
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
