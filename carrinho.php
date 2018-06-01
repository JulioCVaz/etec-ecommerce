<?php

include('cabecalho.php');

$produtos = json_decode($_POST['produto']);
var_dump($produtos);
$preco = json_decode($_POST['preco']);

?>

<div>Hello World</div>
<p><?php echo $produtos?></p>
<p><?php echo $preco?></p>

<?php
include('rodape.php');