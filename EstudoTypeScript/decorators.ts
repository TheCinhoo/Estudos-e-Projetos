// @Component
// @Selector
// @useState("foon")

// Factory
function logger(prefix: string) {
	return (target: any) => {
		console.log(`${prefix} - ${target}`);
	};
}
@logger("top")
// class foo {}

// Class decorator

function setAPIVersion(apiVersion: string) {
	return (constructor: any) => {
		return class extends constructor {
			version = apiVersion;
		};
	};
}

// decorator - anotar a versão da API
@setAPIVersion("1.0.0")
class API {}
console.log(new API());

// Property decorator

function minlength(length: number) {
	return (target1: any, key: string) => {
		let val = target1[key];

		const getter = () => val;

		const setter = (value: string) => {
			if (value.length < length) {
				console.log(`Error - Você não pode criar um ${key} com menos de ${length}.`);
			} else {
				val = value;
			}
		};

		Object.defineProperty(target1, key, {
			get: getter,
			set: setter,
		});
	};
}

class Movie {
	// validação - se for < 5 - erro
	@minlength(10)
	title: string;

	constructor(t: string) {
		this.title = t;
	}
}

const movie = new Movie("Inception");

console.log(movie);

// Method decorator
function delay(ms: number) {
	return (target: any, key: string, descriptor: PropertyDescriptor) => {
		const originalMethod = descriptor.value;
		descriptor.value = function (...args) {
			console.log(`esperando ${ms}...`);
			setTimeout(() => {
				originalMethod.apply(this, args);
			}, ms);

			return descriptor;
		};
	};
}

class Greeter {
	greeting: string;

	constructor(g: string) {
		this.greeting = g;
	}
	//Espera um tempo e roda o método(ms)
	@delay(1000)
	greet() {
		console.log(`Ola! ${this.greeting}`);
	}
}

const pessoainha = new Greeter("Pessoa");

pessoainha.greet();

// Parameter decorator
//Acessor decorator
