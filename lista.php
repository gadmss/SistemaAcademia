<?php
    include_once "./header.php";

  echo "<div class='col-md-12' style='padding-top:80px; text-align:center'>
            <h3>Escolha uma Opção</h3>";

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 12px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myUL {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
  border: 1px solid #ddd;
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block
}

#myUL li a:hover:not(.header) {
  background-color: #eee;
}
</style>
</head>
<body>

<!--input type="text" id="myInput" onkeyup="myFunction()" placeholder="" title=""-->

<ul id="myUL">
  <li><a href="aluno_listar.php">Aluno</a></li>
  <li><a href="cargo_listar.php">Cargo</a></li>
  <li><a href="cliente_listar.php">Cliente</a></li>
  <!--li><a href="contrato_listar.php">Contrato</a></li-->
  <li><a href="endereco_listar.php">Endereço</a></li>
  <li><a href="funcionario_listar.php">Funcionario</a></li>
  <li><a href="servicos_listar.php">Serviços</a></li>
  <li><a href="terceiros_listar.php">Terceiros</a></li>
  <li><a href="turma_listar.php">Turma</a></li>
   </ul>

<script>
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>

</body>
</html>
