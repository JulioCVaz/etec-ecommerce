<?php

include('cabecalho.php');

$produtos = $_POST; // verificar json decode
var_dump($produtos);
$preco = json_decode($_POST['preco']);

?>

<div>Hello World</div>
<p><?php echo $produtos?></p>
<p><?php echo $preco?></p>

<?php
include('rodape.php');