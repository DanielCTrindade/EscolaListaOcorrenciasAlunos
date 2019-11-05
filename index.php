<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Trabalho 2</title>


	<style>
		#centralizar{
			position:relative; 
			padding: 2px;
			left: 100px;
			top: -60.5px;
	
		}
	</style>
  </head>
  <body>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<form action="inserir.php" method="post">
				<div class="form-group">
					<label for="nome">Nome:</label>
					<input type="text" name="nome" class="form-control" id="nome" placeholder="Digite o nome do aluno">
				</div>
				<div class="form-group">
					<label for="data">Data:</label>
					<input type="date" name="data" class="form-control" id="data" placeholder="Digite a data da ocorrência">
				</div>
				<div class="form-group">
					<label for="periodo">Período:</label>
					<input type="number" name="periodo" class="form-control" id="periodo" placeholder="Digite o periodo da ocorrência">
				</div>
				<div class="form-group">
					<label for="motivo">Motivo:</label>
					<input type="text"  name="motivo" class="form-control" id="motivo" placeholder="Digite o motivo da ocorrência">
				</div>
				<button class="btn btn-success" type="submit">Adicionar</button>
			</form>
			
		</div>
	</div>
	<div class="row" style='margin-top:20px'>  
		<div class="col-sm-12">
			<table class="table">
				<thead>
					<tr><th>Nome</th><th>Data</th><th>Periodo</th><th>Motivo</th><th>Ação</th>
					</tr>
				</thead>
				
<?php
  
$arquivo = fopen("ocorrencias.csv","r");
fgetcsv($arquivo, 100, ',');
while(($linha = fgetcsv($arquivo, 200, ',')) !== false){
	print "
		<tr>
			<td>{$linha[0]}</td>
			<td>{$linha[1]}</td>
			<td>{$linha[2]}</td>
			<td>{$linha[3]}</td>
			<td><a href='excluir.php?nome={$linha[0]}' class='btn btn-danger btn-sm'>Remover</a></td>
		</tr>";
}
fclose($arquivo);
?>	
	<div class="container">
		<div class="row">
			<form action='gerarLista.php' method='post'>
				<div id="centralizar">
					<button class="btn btn-primary" type="submit">Gerar lista</button>
				</div>
		</div>
	</div>
	</form>
		
	</div>  
</div>  
  
  </body>
</html>