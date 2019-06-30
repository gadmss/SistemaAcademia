<?php
	include_once "./header.php";

  echo "<div class='col-md-12' style='padding-top:80px; text-align:center'>
            <h3>Alteração de  Endereco</h3>";

	include_once 'conexao.php';
	$id_end = $_GET["id_end"];
	//$famosos = new stdClass;
	//executa uma instrução SQL de seleção
	$result = $conn -> query("SELECT * FROM endereco WHERE id_end = '{$id_end}'");
	if ($result){
		$row = $result->fetch();
		$id_end = $row["id_end"];
		$pais = $row["pais"];
		$uf = $row["uf"];
		$cep = $row["cep"];
		$cidade = $row["cidade"];
		$bairro = $row["bairro"];
		$logradouro = $row["logradouro"];
		$numero = $row["numero"];
		$id_terceiro = $row["id_terceiro"];

	}
	
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Alteracao</title>
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
                                <form id="reused_form" method="POST" action="endereco_alterar.php">
                                	<div class="form-group">
                                        <label ></label>
                                        <input type="hidden" name="id_end" value = "<?php echo $id_end; ?>"required class="form-control" placeholder="Enter id_end">
                                    </div>
                                    <div class="form-group">
                                        <label >Pais</label>
                                        <input type="text" name="pais" value = "<?php echo $pais; ?>"required class="form-control" placeholder="Enter pais">
                                    </div>
                                    <div class="form-group">
                                        <label >UF</label>
                                        <input type="text" name="uf" value ="<?php echo $uf; ?>"required class="form-control" placeholder="Enter uf">
                                    </div>
                                     <div class="form-group">
                                        <label >Cep</label>
                                        <input type="text" name="cep"  value="<?php echo $cep; ?>"required class="form-control" placeholder="Enter cep">
                                    </div>
                                    <div class="form-group">
                                        <label >Cidade</label>
                                        <input type="text" name="cidade" value ="<?php echo $cidade; ?>"required class="form-control" placeholder="Enter cidade">
                                    </div>
                                     <div class="form-group">
                                        <label >Bairro</label>
                                        <input type="text" name="bairro"  value="<?php echo $bairro; ?>"required class="form-control" placeholder="Enter bairro">
                                    </div>
                                    <div class="form-group">
                                        <label >Logradouro</label>
                                        <input type="text" name="logradouro" value ="<?php echo $logradouro; ?>"required class="form-control" placeholder="Enter Logradouro">
                                    </div>
                                     <div class="form-group">
                                        <label >Numero</label>
                                        <input type="text" name="numero"  value="<?php echo $numero; ?>"required class="form-control" placeholder="Enter numero">
                                    </div>
                                    <div class="form-group">
                                        <label >Id_terceiro</label>
                                        <input type="text" name="id_terceiro" value ="<?php echo $id_terceiro; ?>"required class="form-control" placeholder="Enter id_terceiro">
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
