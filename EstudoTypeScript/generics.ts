//Generic
//Praque serve? // para ter flexibilidade dentro de uma linguagem fortemente tipada
// S => State
// T => Type
// K => Key
// V => Value
// E => Element

function useState<S extends number | string = string>() {
	//<S> - Tipo que a função pode usar nas variáveis
	// Extends Bloqueia os unicos tipos que podem ser usados nesta function
	// = + o tipo, este tipo será o tipo padrão
	let state: S;

	function getState() {
		return state;
	}

	function setState(newState: S) {
		state = newState;
	}

	return { getState, setState };
}

const newState = useState<string>();

newState.setState("foo");
console.log(newState.getState());

const newState1 = useState<number>();

newState1.setState(123);
console.log(newState1.getState());
