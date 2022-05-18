function calc(x1, x2, operator) {
    return eval(`${x1}  ${operator} ${x2}`);
}

let resultado = calc(1, 2, "+");

console.log(resultado);

//Função anonima
(function(x1, x2, operator) {
    return eval(`${x1}  ${operator} ${x2}`);
})(1, 2, "+");

//arrowFunction
let calc1 = (x1, x2, operator) => {
    return eval(`${x1}  ${operator} ${x2}`);
}


//referente a janela do navegador
window.addEventListener('focus', event => {
    console.log("Focus");
});

//referente a pagina do site
document.addEventListener('click', event => {
    console.log("Click");
});

let agora = new Date();

console.log(agora);
console.log(agora.toLocaleDateString("pt-BR"));

let carros = ["Palio", "Toro", "Marea", Date(), function() {}];

carros.forEach(function(value, index) {
    console.log(index, value);
})


console.log(carros);


//Orientação a Objetos

class celular {
    constructor() {
        this.cor = "Preto";

    };
    ligar = function() {
        console.log("Isto é uma lugação");
        return "Lingando";

    }
}

let objeto = new celular();
console.log(objeto.ligar());