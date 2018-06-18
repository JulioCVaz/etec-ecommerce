<?php 

include('cabecalho.php');
include('conecta.php');


if(isset($_POST['nome'])){
    $nome= $_POST['nome'];
    $user = $_POST['user'];
    $password = $_POST['password'];
    $category = $_POST['category'];
    $response = insert($conexao, $user, $password, $category);

}



?>
<div class="row justify-content-center">
    <div class="col col-md-6">
        <h1>Cadastro de Usuários</h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="name">Nome: </label>
                <input type="text" id="name" name="nome" class="form-control" placeholder="Digite seu nome">
            </div>
            <div class="form-group">
                <label for="user">Usuario: </label>
                <input type="text" id="user" name="user" class="form-control" placeholder="Digite seu usuário">
            </div>
            <div class="form-group">
                <label for="password">Senha: </label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Digite sua senha">
            </div>
            <div class="form-group">
                <select class="form-control col-md-6" name="category" id="">
                    <option value="cliente">Cliente</option>
                    <option value="funcionario">Funcionário</option>
                    <option value="fornecedor">Fornecedor</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <button type="reset" class="btn btn-warning">Limpar</button>
        </form>
    </div>
</div>
