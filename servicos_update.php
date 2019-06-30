<?php
	include_once "./header.php";

  echo "<div class='col-md-12' style='padding-top:80px; text-align:center'>
            <h3>Alteração de  Serviços</h3>";

	include_once 'conexao.php';
	$id_servicos = $_GET["id_servicos"];
	//$famosos = new stdClass;
	//executa uma instrução SQL de seleção
	$result = $conn -> query("SELECT * FROM servicos WHERE id_servicos = '{$id_servicos}'");
	if ($result){
		$row = $result->fetch();
		$id_servicos = $row["id_servicos"];
		$descricao = $row["descricao"];
		$modalidade = $row["modalidade"];
		$preco = $row["preco"];
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
                                <form id="reused_form" method="POST" action="servicos_alterar.php">
                                	<div class="form-group">
                                        <label ></label>
                                        <input type="hidden" name="id_servicos" value = "<?php echo $id_servicos; ?>"required class="form-control" placeholder="Enter id_servicos">
                                    </div>
                                    <div class="form-group">
                                        <label >Descriçao</label>
                                        <input type="text" name="descricao" value = "<?php echo $descricao; ?>"required class="form-control" placeholder="Enter Descrição">
                                    </div>
                                    <div class="form-group">
                                        <label >modalidade</label>
                                        <input type="text" name="modalidade" value ="<?php echo $modalidade; ?>"required class="form-control" placeholder="Enter modalidade">
                                    </div>
                                     <div class="form-group">
                                        <label >Preco</label>
                                        <input type="text" name="preco"  value="<?php echo $preco;?>"required class="form-control" placeholder="Enter preco">
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
