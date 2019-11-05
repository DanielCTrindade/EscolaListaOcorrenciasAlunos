<?php
$arquivo = fopen("ocorrencias.csv","a");

fwrite($arquivo, "{$_POST['nome']},{$_POST['data']},{$_POST['periodo']},{$_POST['motivo']}" . PHP_EOL, 100);
fclose($arquivo);
header("location:index.php");
?>