<?php


function auth($conexao, $user, $senha){
    $query = "SELECT * FROM usuario WHERE usuario = '{$user}' AND senha = '{$senha}'";
    $response = mysqli_query($conexao, $query);

    return mysqli_fetch_assoc($response);
}

function insert($conexao, $user, $password, $category){
    $category2 = null;
    $category3 = null;

    if($category = 'cliente'){
        $category = 1;
        $category2 = 0;
        $category3 = 0;
    }
    if($category = 'funcionario'){
        $category = 0;
        $category2 = 1;
        $category3 = 0;
    }
    if($category = 'fornecedor'){
        $category = 0;
        $category2 = 0;
        $category3 = 1;
    }

    $query = "INSERT INTO usuario(usuario, senha, id_cliente, id_funcionario, id_fornecedor) VALUES ('{$user}', '{$password}', {$category}, {$category2}, {$category3})";

    return mysqli_query($conexao, $query);
}

?>