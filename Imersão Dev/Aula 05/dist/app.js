var listaLinks = [];
var listaFilmes = [];
var textofilme = 'Lala';

function adicionarFilme() {
	var filmeFavorito = document.getElementById('filme').value;
	var linkFilme = document.getElementById('titulo_filme').value;
	if (filmeFavorito.endsWith('.jpg')) {
		listaLinks.push(filmeFavorito);
		listaFilmes.push(linkFilme);

		listarFilmesNaTela();
		console.log(listaFilmess);
	} else {
		console.error('Não é imagem!');
		alert('O link precisa ser .jpg!!');
	}
	document.getElementById('filme').value = '';
	document.getElementById('titulo_filme').value = '';
}

function listarFilmesNaTela() {
	var elementoListaFilmes = document.getElementById('listaFilmes');

	elementoListaFilmes.innerHTML = '';
	for (var i = 0; i < listaFilmes.length; i++) {
		textofilme = listaFilmes[i];

		var elementoFilmeFavorito =
			'<a><img src=' +
			listaLinks[i] +
			'>  <p>' +
			String(textofilme) +
			"</p><button onClick='removerFilme(" +
			i +
			")' id='botaoremover'> Remover Filme</button> </a>";
		elementoListaFilmes.innerHTML += elementoFilmeFavorito;
	}
}

function removerFilme(indice) {
	console.log(indice);

	listaFilmes.splice(indice, 1);
	listaLinks.splice(indice, 1);

	listarFilmesNaTela();
}
