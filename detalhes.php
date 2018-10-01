<!DOCTYPE html>
<html>
<?php 
	$NOMEURNA = $_GET['NOMEURNA'];
	$NOME = $_GET['NOME'];
	$CARGO = $_GET['CARGO'];
	$PARTIDO = $_GET['PARTIDO'];
	$NUMERO = $_GET['NUMERO'];
	$SITUACAO = $_GET['SITUACAO'];
	$ANO = $_GET['ANO'];
	$NOMECOLIGACAO = $_GET['NOMECOLIGACAO']
?>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title></title>
</head>
<body>
		<div class="jumbotron jumbotron-fluid">
			<div class="container">
			 <h1 class="display-4">Projeto Democraticamente</h1>
			 <p class="lead">Informações detalhadas do candidato.</p>
			</div>
		</div>
		<div class="container">
		<div class="card mb-3">
			<div class="card-header">
         		<center>mais informações do candidado :<?php echo $NOMEURNA;?></center>
     		</div>
			<div class="card-body">
				<dl>

					<center>
						
		             <dt>Nome completo do candidato</dt>
		             <dd><?php echo $NOME;?></dd>

		             <dt>Cargo disputado</dt>
		             <dd><?php echo $CARGO;?></dd>

		             <dt>Partido</dt>
		             <dd><?php echo $PARTIDO;?></dd>

		             <dt>Número de candidatura</dt>
		             <dd><?php echo $NUMERO;?></dd>

		             <dt>Candidatura</dt>
		             <dd><?php echo $SITUACAO;?></dd>

		             <dt>Ano de eleição</dt>
		             <dd><?php echo $ANO;?></dd>

		             <dt>Coligação</dt>
		             <dd><?php echo $NOMECOLIGACAO;?></dd>
		             </center>
	        	 </dl>
        	</div>
        	<button type="button" class="btn btn-secondary" onclick="anterior()">voltar</button>
        	
     	</div></div>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript">
	function anterior(){
		location.href="index.php";
	}
</script>
</body>
</html>
