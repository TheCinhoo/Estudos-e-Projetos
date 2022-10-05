//Interfaces - Conjunto de dados para descrever a estrutura de um OBJETO
//Tudo que funciona na criação de Classes funciona na Interface - Protected Private Readonly Opcioinal e Extend...
interface Game {
	title: string;
	description: string;
	genre: string;
	plataform?: string[]; // interrogação é para mostrar que essa variavel é opcional

	getSimilar?: (title: string) => void;
}

const tlou: Game = {
	title: "The Last Of Us",
	description: "The Best Game in The World",
	genre: "survive",
	plataform: ["PS3", "PS4", "PS%"],
	getSimilar: (title: string) => {
		console.log(`Similar games to ${title}: Uncharted, A Plage Tale, Metro`);
	},
};

if (tlou.getSimilar) {
	tlou.getSimilar(tlou.title);
}
console.log(tlou.description);

interface DLC extends Game {
	originalGame: Game;
	newContent: string[];
}

const leftbehind: DLC = {
	title: "The Last Of Us - Left Behind",
	description: "You Play as Ellie before the original game",
	genre: "Action",
	originalGame: tlou,
	newContent: ["Mais 3 horas de gameplay", "Novos Personagens", "Novas Aventuras"],
};

//Classe Baseada na Interface

class CreateGame implements Game {
	title: string;
	description: string;
	genre: string;

	constructor(t: string, d: string, g: string) {
		this.title = t;
		this.description = d;
		this.genre = g;
	}
}
