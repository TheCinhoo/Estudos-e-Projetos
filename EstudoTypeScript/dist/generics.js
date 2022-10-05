"use strict";
//Generic
//Praque serve? // para ter flexibilidade dentro de uma linguagem fortemente tipada
// S => State
// T => Type
// K => Key
// V => Value
// E => Element
function useState() {
    //<S> - Tipo que a função pode usar nas variáveis
    // Extends Bloqueia os unicos tipos que podem ser usados nesta function
    // = + o tipo, este tipo será o tipo padrão
    var state;
    function getState() {
        return state;
    }
    function setState(newState) {
        state = newState;
    }
    return { getState: getState, setState: setState };
}
var newState = useState();
newState.setState("foo");
console.log(newState.getState());
var newState1 = useState();
newState1.setState(123);
console.log(newState1.getState());
