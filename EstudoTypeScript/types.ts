//Tipos no TypeScript

//boolean (true / false)

let isOpen: boolean;
isOpen = true;

//String ('foo', "foo" `foo`) aceita todos os exemplos
let message: string;
message = `foo ${isOpen}`;

//Number (int, float, hex, binary)
let total: number;
total = 20.3;

//Array
let items: number[];
items = [1, 2, 3];

let values: Array<number>;

//tupla - array que já sabemos o numero de elementos dentro do array e o tipo.
let tittle: [number, string];
tittle = [1, "Titulo Nome"];

//enum - serve pra criar um conjunto de chave e valor (enunciado)
enum Colors {
	white = "#FFF",
	black = "#000",
}

//any - qualquer coisa - não é legal de usar.
let coisa: any;
coisa = 0;
coisa = true;

//void - Para tipar funções que não retornam nada.
function logger(): void {
	console.log("foo");
}

//null | undefined

//never - Nunca vai retornar basicamente para erros
function error(): never {
	throw new Error("error");
}

//object - tudo que não é os outros tipos primitivos
let cart: object;
cart = { key: "foo" };

//Type Inferece - inferencia de tipo - TS já aceita o tipo passado por primeiro.
let message2 = "Mensagem Definida";

//Aqui o TS já entende que a função é um MouseEvent
window.addEventListener("click", (e) => {
	console.log(e.target);
});
