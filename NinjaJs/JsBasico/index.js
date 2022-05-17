var olaMundo = "Olá Mundo!";
console.log(olaMundo);
olaMundo = "Hello World!"
console.log(olaMundo);

let a = 10;
const b = "10";
console.log(a == b || typeof a == 'string');

let cor = "amarelo";

//IF ELSE

if (cor === "verde") {
    console.log('Siga');
} else if (cor === "amarelo") {
    console.log('Atenção');
} else {
    console.log('Pare');
}

cor = "preto";

//SWITCH CASE
switch (cor) {
    case "verde":
        console.log('Siga!');
        break;
    case "amarelo":
        console.log('Atenção');
        break;
    case "vermelho":
        console.log('Pare');
        break;
    default:
        console.log("Não sei o que estou fazendo aqui, será que estou na lagoinha?");
        break;
}

//FOR