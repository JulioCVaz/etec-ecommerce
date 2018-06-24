<?php


function listaProdutos($conexao){
    $produtos = array();
    $query = "SELECT prod.id_produto, prod.nome_produto, prod.valor, forn.seguimento FROM produtos as prod INNER JOIN fornecedor as forn ON prod.fornecedor_prod=forn.id_fornecedor";
    $response = mysqli_query($conexao, $query);
    while($produto = mysqli_fetch_assoc($response)){
        array_push($produtos, $produto);
    }
    return $produtos;
}


?>