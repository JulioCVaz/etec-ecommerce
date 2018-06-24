/***
* Lógica para adicionar produto no carrinho
* 
*
*
***/


var comprar = document.querySelectorAll('.buy');

// essa não é a lógica ideal para atribuir eventos a elementos do nodelist, será melhorada em breve

for (var i = 0; i < comprar.length; i++) {
	comprar[i].addEventListener('click',  (event) => {

		// logica para adicionar contador no carrinho;
		var cont = document.querySelector('.cli');

		if(cont.innerHTML != '' ){
			var textA = cont.innerHTML 
			var contar = parseInt(cont) +1;
			var textA = contar;
		}else{
			cont.innerHTML = 1;
		}
		
		var span = event.target.parentNode;

		var arrayContent = [];

		var teste = span.querySelectorAll('span');

		for(var y = 0; y < teste.length; y++){
			var contentSpan = teste[y].innerHTML;
			arrayContent.push(contentSpan);
		}
		console.log(span);
		console.log(arrayContent);

		var dados = arrayContent;
		enviaDados(dados);
	



	}, false);
}


// ajax
function enviaDados(dados){	
	var http = new XMLHttpRequest();
	var url = 'carrinho.php';
	var produto = dados[0];
	var preco = dados[1];
	var content = "{'produto':'"+produto+"','preco':'"+preco+"'}";
	
	http.open('POST', url, true);
	
http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

http.onreadystatechange = function(){
	if(http.readyState == 4 && http.status == 200){
		console.log('enviei os dados');
	}
}
http.send(content);
}
