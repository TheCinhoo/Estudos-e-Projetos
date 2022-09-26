var listaFilmes = [
  "https://upload.wikimedia.org/wikipedia/pt/thumb/6/62/Arrival_%28filme%29.jpg/230px-Arrival_%28filme%29.jpg",
  "https://upload.wikimedia.org/wikipedia/pt/a/af/Blade_Runner_2049.png",
  "https://upload.wikimedia.org/wikipedia/pt/2/20/2_Fast_2_Furious_2003.jpg",
];

//Adiciona no Array
listaFilmes.push(
  "https://upload.wikimedia.org/wikipedia/pt/1/10/Pok%C3%A9mon_2000.jpg ",
  "https://brasileirinhashd.uol.com.br/arquivos/filmes/filme-selecionado/12019.jpg"
);

for (let i = 0; i < listaFilmes.length; i++) {
  document.write("<img src=" + listaFilmes[i] + ">");
}

//Escolher o seu tema preferido para adaptar ao nosso código, ou seja, ao invés de filmes pode ser uma lista de animes, HQ's, cursos, capas de jogos...
//Tentar implementar outras versões da estrutura de repetição que fizemos com for, como por exemplo com foreach ou while
//Criar uma condição para não adicionar filmes repetidos, caso eles já tenham sido adicionados anteriormente
//Criar um campo e botão para adicionar a imagem pela tela, e não direto no código
