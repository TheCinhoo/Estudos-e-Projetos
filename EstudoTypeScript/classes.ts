//Abstract serve para que essa classe não possa ser usada diretamente só extendida.
abstract class UserAccount {
	//Todos tem acesso
	public name: string;
	//Pode ser chamado dentro da classe ou da classe extendida, fora da classe não consegue chamar
	protected age: number;

	constructor(name: string, age: number) {
		this.name = name;
		this.age = age;
	}

	logDetails(): void {
		console.log(`O jogador ${this.name} tem ${this.age} anos`);
	}
}

class CharAccount extends UserAccount {
	//private Só pode ser acessado de dentro da Classe
	private nickname: string;

	//readonly Pode ser lido de fora da Classe mas não pode ser trocado.
	readonly level: number;

	//Construtor da Classe com extensão deve ter todos os parametros das duas classes
	constructor(name: string, age: number, nickname: string, level: number) {
		//pega os atributos da classe superior (que extende a essa classe)
		super(name, age);
		this.nickname = nickname;
		this.level = level;
	}

	//----GET e SET ----//
	get getLevel() {
		return this.level;
	}

	set setLevel(level: string) {
		// this.level = level;
	}

	//-----Outros Métodos-----//

	logCharDetails(): void {
		console.log(`O jogador ${this.name} dono do char ${this.nickname} que está no level ${this.level}`);
	}
}

// const fabricio = new UserAccount("Fabrício", 31);
// console.log(fabricio);

const akroma = new CharAccount("Fabrício", 50, "Akroma Wars", 100);

console.log(akroma);

akroma.logCharDetails();
