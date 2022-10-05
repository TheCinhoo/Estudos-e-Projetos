"use strict";
//Tipos no TypeScript
//boolean (true / false)
var isOpen;
isOpen = true;
//String ('foo', "foo" `foo`) aceita todos os exemplos
var message;
message = "foo ".concat(isOpen);
//Number (int, float, hex, binary)
var total;
total = 20.3;
//Array
var items;
items = [1, 2, 3];
var values;
//tupla - array que já sabemos o numero de elementos dentro do array e o tipo.
var tittle;
tittle = [1, "Titulo Nome"];
//enum - serve pra criar um conjunto de chave e valor (enunciado)
var Colors;
(function (Colors) {
    Colors["white"] = "#FFF";
    Colors["black"] = "#000";
})(Colors || (Colors = {}));
//any - qualquer coisa - não é legal de usar.
var coisa;
coisa = 0;
coisa = true;
//void - Para tipar funções que não retornam nada.
function logger() {
    console.log("foo");
}
//null | undefined
//never - Nunca vai retornar basicamente para erros
function error() {
    throw new Error("error");
}
//object - tudo que não é os outros tipos primitivos
var cart;
cart = { key: "foo" };
//Type Inferece - inferencia de tipo - TS já aceita o tipo passado por primeiro.
var message2 = "Mensagem Definida";
//Aqui o TS já entende que a função é um MouseEvent
window.addEventListener("click", function (e) {
    console.log(e.target);
});
