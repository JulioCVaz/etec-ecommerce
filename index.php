<?php

include('cabecalho.php');
include('banco-produto.php');
include('conecta.php');



?>

    <div class="row box-image">
        <div class="col title-products">
            <h3>Computadores</h3>
            <hr>
        </div>
    </div>
    <div class="content-computer">   
        <div class="row justify-content-md-around box-image">
            <div class="col col-md-3 chromebook"></div>
            <div class="col col-md-5 imac"></div>
            <div class="col col-md-3 samsung"></div>
        </div>
        <div class="row justify-content-md-around">
        <?php $produtos = listaProdutos($conexao);  ?>
            <?php foreach($produtos as $produto) : ?> 
                <?php if($produto['seguimento'] == '2') : ?>
            <div class="col col-md-3">
                <span hidden><?= $produto['id_produto']?></span>
                <strong><?= $produto['nome_produto'];?></strong>
                <p>Preço: R$ <?= $produto['valor'];?></p>
                <button class="btn btn-primary buy">Comprar</button>
            </div>
                <?php endif;?>
            <?php endforeach;?>
        </div>
    </div>
    <div class="row box-image">
        <div class="col title-products">
            <h3>Variados</h3>
            <hr>
        </div>
    </div>
    
    <div class="content-others">
       <div class="row justify-content-md-around">
            <div class="col col-md-3 agenda"></div>
            <div class="col col-md-5 fone"></div>
            <div class="col col-md-3 nutella"></div>
        </div>
        <div class="row justify-content-md-around">
            <?php foreach($produtos as $produto) :?>
                <?php if($produto['seguimento'] != "2") : ?>
                    <div class="col col-md-3">
                        <span hidden><?= $produto['id_produto'];?></span>
                        <strong><?= $produto['nome_produto']; ?></strong>
                        <p>Preço: R$ <?= $produto['valor'];?></p>
                        <button class="btn btn-primary buy">Comprar</button>
                    </div>
                <?php endif;?>
            <?php endforeach;?>
        </div>
    </div>
    <footer class="rodape">
        Júlio Vaz - RGM: 18846
    </footer>
<?php
include('rodape.php');