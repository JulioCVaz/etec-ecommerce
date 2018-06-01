/***
* Lógica para adicionar produto no carrinho
* 
*
*
***/


var comprar = document.querySelectorAll('.buy');

// essa não é a lógica ideal para atribuir eventos a elementos do nodelist, será melhorada em breve

for (var i = 0; i < comprar.length; i++) {
	comprar[i].addEventListener('click', function (event) {
        console.log(event.target.parentNode);
	}, false);
}
