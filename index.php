
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Candidatos</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.js"></script>
        <script src="script.js" type="text/javascript"></script>
        <script src="comportamento.js" type="text/javascript"></script>
</head>
<body onload="carregarItens()">
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
		 <h1 class="display-4">Projeto Democraticamente</h1>
		 <p class="lead">Pesquise as informações sobre seu candidato.</p>
		</div>
	</div>
	<h2 id="h2"></h2>
	<select id="caminhos">
		<option>Selecione um tipo de candidato</option>
		<option value="PRESIDENTE">Presidente</option>
		<option value="GOVERNADOR">Governador</option>
		<option value="SENADOR">Senador</option>
		<option value="DEPUTADOF">Deputado federal</option>
		<option value="DEPUTADOE">Deputado estadual</option>
	</select>
	<table class="table">
		<div style="border-width: 1px;">
			<tr>
				<th scope="col" style=" width: 210px">#</th>
				<th scope="col" style=" width: 460px">Nome na urna</th>
				<th scope="col" style="width: 980px">Nome completo</th>
				<th scope="col" style="width: 190px">Número</th>
			</tr>
		</div>
	</table>
	<table class="table" id="id_da_tabela">
		<div id="items_table">
		</div>
	</table>
</body>
</html>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
  <script>
  	$(document).ready(function(){
  		$('#id_da_tabela').DataTable();
  	});
  </script>