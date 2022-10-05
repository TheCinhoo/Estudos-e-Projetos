"use strict";
var tlou = {
    title: "The Last Of Us",
    description: "The Best Game in The World",
    genre: "survive",
    plataform: ["PS3", "PS4", "PS%"],
    getSimilar: function (title) {
        console.log("Similar games to ".concat(title, ": Uncharted, A Plage Tale, Metro"));
    },
};
if (tlou.getSimilar) {
    tlou.getSimilar(tlou.title);
}
console.log(tlou.description);
var leftbehind = {
    title: "The Last Of Us - Left Behind",
    description: "You Play as Ellie before the original game",
    genre: "Action",
    originalGame: tlou,
    newContent: ["Mais 3 horas de gameplay", "Novos Personagens", "Novas Aventuras"],
};
//Classe Baseada na Interface
var CreateGame = /** @class */ (function () {
    function CreateGame(t, d, g) {
        this.title = t;
        this.description = d;
        this.genre = g;
    }
    return CreateGame;
}());
