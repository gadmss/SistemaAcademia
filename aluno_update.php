<?php
	include_once "./header.php";

  echo "<div class='col-md-12' style='padding-top:80px; text-align:center'>
            <h3>Alteração de  Cargo</h3>";

	include_once 'conexao.php';
	$matricula = $_GET["matricula"];
	
	$result = $conn -> query("SELECT * FROM aluno WHERE matricula = '{$matricula}'");
	if ($result){
		$row = $result->fetch();
		$matricula = $row["matricula"];
		$id_terceiros = $row["id_terceiros"];
		$id_turma = $row["id_turma"];
	}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Alteração</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
                                <form id="reused_form" method="POST" action="aluno_alterar.php">
                                	<div class="form-group">
                                        <label ></label>
                                        <input type="hidden" name="matricula" value = "<?php echo $matricula; ?>"required class="form-control" placeholder="Enter matricula">
                                    </div>
                                    <div class="form-group">
                                        <label >Id_terceiros</label>
                                        <input type="text" name="id_terceiros" value = "<?php echo $id_terceiros; ?>"required class="form-control" placeholder="Enter id_terceiros">
                                    </div>
                                    <div class="form-group">
                                        <label >Id_turma</label>
                                        <input type="text" name="id_turma" value ="<?php echo $id_turma; ?>"required class="form-control" placeholder="Enter id_turma">
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
