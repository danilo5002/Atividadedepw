

<?php
$id =$_GET['id'];
$texto = file("CADASTRO/$id");
foreach($texto as $linha){
    echo "$linha <br>";
}