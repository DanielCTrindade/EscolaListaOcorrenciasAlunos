<?php

$arquivo = fopen("ocorrencias.csv","r");
fgetcsv($arquivo, 100, ',');
	$pessoas1 =[];
	$pessoas2 = [];

	while(($linha1 = fgetcsv($arquivo, 100, ',')) !== false){

		$pessoas1[] = $linha1;
		$pessoas2[] = $linha1[0];

	
	}

?>

<!doctype html>
<html lang="pt-br">
  <head>



    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
    <title>Lista de Ocorrências</title>

  </head>
  <body>
		<div class="row" style='margin-top:20px'>  
			<div class="col-sm-12">
				<table class="table">
					<thead>
						<tr><th>Nome do aluno</th><th style="text-align:right">Quantidade de Ocorrências</th>
							<?php
								print "<table class='table table-striped table-hover'>";

								$arr = array_count_values($pessoas2);
								$arquivo = fopen("listaOcorrencias.csv","a");
							

								foreach($arr as $key => $value){

								fwrite($arquivo, "{$key},{$value}" . PHP_EOL, 100);

									print"<tr>
											<td>{$key}</td>
											<td style='text-align:center'>{$value}</td>
									</tr>";
								
								}
								fclose($arquivo);

								print "</table>";
								
							?>
						</tr>
					</thead>
				</table>
			</div>	
		</div>
 
  </body>
</html>