"use strict";
// @Component
// @Selector
// @useState("foon")
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
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
// Factory
function logger(prefix) {
    return function (target) {
        console.log("".concat(prefix, " - ").concat(target));
    };
}
function setAPIVersion(apiVersion) {
    return function (constructor) {
        return /** @class */ (function (_super) {
            __extends(class_1, _super);
            function class_1() {
                var _this = _super !== null && _super.apply(this, arguments) || this;
                _this.version = apiVersion;
                return _this;
            }
            return class_1;
        }(constructor));
    };
}
// decorator - anotar a versão da API
var API = /** @class */ (function () {
    function API() {
    }
    API = __decorate([
        setAPIVersion("1.0.0")
    ], API);
    return API;
}());
console.log(new API());
// Property decorator
function minlength(length) {
    return function (target1, key) {
        var val = target1[key];
        var getter = function () { return val; };
        var setter = function (value) {
            if (value.length < length) {
                console.log("Error - Voc\u00EA n\u00E3o pode criar um ".concat(key, " com menos de ").concat(length, "."));
            }
            else {
                val = value;
            }
        };
        Object.defineProperty(target1, key, {
            get: getter,
            set: setter,
        });
    };
}
var Movie = /** @class */ (function () {
    function Movie(t) {
        this.title = t;
    }
    __decorate([
        minlength(10)
    ], Movie.prototype, "title", void 0);
    return Movie;
}());
var movie = new Movie("Inception");
console.log(movie);
// Method decorator
function delay(ms) {
    return function (target, key, descriptor) {
        var originalMethod = descriptor.value;
        descriptor.value = function () {
            var _this = this;
            var args = [];
            for (var _i = 0; _i < arguments.length; _i++) {
                args[_i] = arguments[_i];
            }
            console.log("esperando ".concat(ms, "..."));
            setTimeout(function () {
                originalMethod.apply(_this, args);
            }, ms);
            return descriptor;
        };
    };
}
var Greeter = /** @class */ (function () {
    function Greeter(g) {
        this.greeting = g;
    }
    //Espera um tempo e roda o método(ms)
    Greeter.prototype.greet = function () {
        console.log("Ola! ".concat(this.greeting));
    };
    __decorate([
        delay(1000)
    ], Greeter.prototype, "greet", null);
    return Greeter;
}());
var pessoainha = new Greeter("Pessoa");
pessoainha.greet();
// Parameter decorator
//Acessor decorator
