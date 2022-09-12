<?php
extract($_POST);
$file = fopen("CADASTRO/$id.txt", 'a+');
fwrite($file, "Id: $id\nNome: $nome\nCargo: $cargo\nSalário: $salá\nDependentes: $depend\n");
$arquivo = scandir('CADASTRO');
array_shift($arquivo);
array_shift($arquivo);
foreach($arquivo as $linha){
    echo '<a href=readinfo.php?id='.$linha.'>'.$linha.'<br>';
}
fclose($file);
?>