<?php 

    if(isset($_POST['user'])){
        $nome = $_POST['user'];
    }
?>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-shopping-cart"></i>ETECOMMERCE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
            <div class="form-group">
                <label for="">Usuário: </label>
                <input type="text" class="form-control" placeholder="Digite seu usuário" name="user">
            </div>
            <div class="form-group">
                <label for="">Senha: </label>
                <input type="password" class="form-control" placeholder="Digite sua senha" name="password">
            </div>
            <div class="form-group">
                <p><a href="">Esqueceu sua senha ?</a></p>
                <p><a href="">Cadastrar-se</a></p>
                <p><a href=""><?php echo $nome;?></a></p>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>