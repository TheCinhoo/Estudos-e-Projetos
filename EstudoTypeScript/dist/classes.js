"use strict";
var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (Object.prototype.hasOwnProperty.call(b, p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        if (typeof b !== "function" && b !== null)
            throw new TypeError("Class extends value " + String(b) + " is not a constructor or null");
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
//Abstract serve para que essa classe não possa ser usada diretamente só extendida.
var UserAccount = /** @class */ (function () {
    function UserAccount(name, age) {
        this.name = name;
        this.age = age;
    }
    UserAccount.prototype.logDetails = function () {
        console.log("O jogador ".concat(this.name, " tem ").concat(this.age, " anos"));
    };
    return UserAccount;
}());
var CharAccount = /** @class */ (function (_super) {
    __extends(CharAccount, _super);
    //Construtor da Classe com extensão deve ter todos os parametros das duas classes
    function CharAccount(name, age, nickname, level) {
        var _this = 
        //pega os atributos da classe superior (que extende a essa classe)
        _super.call(this, name, age) || this;
        _this.nickname = nickname;
        _this.level = level;
        return _this;
    }
    Object.defineProperty(CharAccount.prototype, "getLevel", {
        //----GET e SET ----//
        get: function () {
            return this.level;
        },
        enumerable: false,
        configurable: true
    });
    Object.defineProperty(CharAccount.prototype, "setLevel", {
        set: function (level) {
            // this.level = level;
        },
        enumerable: false,
        configurable: true
    });
    //-----Outros Métodos-----//
    CharAccount.prototype.logCharDetails = function () {
        console.log("O jogador ".concat(this.name, " dono do char ").concat(this.nickname, " que est\u00E1 no level ").concat(this.level));
    };
    return CharAccount;
}(UserAccount));
// const fabricio = new UserAccount("Fabrício", 31);
// console.log(fabricio);
var akroma = new CharAccount("Fabrício", 50, "Akroma Wars", 100);
console.log(akroma);
akroma.logCharDetails();
