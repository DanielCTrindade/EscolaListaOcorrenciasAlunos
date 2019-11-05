<?php
$arquivo = fopen("ocorrencias.csv","r");
fgetcsv($arquivo, 100, ',');

$pessoas =[];
	while(($linha = fgetcsv($arquivo, 100, ',')) !== false){
		$pessoas[] = $linha;
	}
fclose($arquivo);	

$arquivo = fopen("ocorrencias.csv","w");

fwrite($arquivo, "Nome,Data,Periodo,Motivo" . PHP_EOL, 100);

	foreach($pessoas as $pessoa){
		if($pessoa[0] === $_GET['nome']) continue;
	
		fwrite($arquivo, "{$pessoa[0]},{$pessoa[1]},{$pessoa[2]},{$pessoa[3]}" . PHP_EOL, 100);
	}

fclose($arquivo);
header("location:index.php");
?>