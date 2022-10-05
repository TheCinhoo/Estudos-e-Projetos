//AccontInfo
//CharInfo
//Player Info

// ? Significa que o item do Objeto é opcional.
type AccontInfo = {
	id: number;
	name: string;
	email?: string;
};

const account: AccontInfo = {
	id: 1,
	name: "Fabrício",
	email: "fabricio.silva@casacaresc.org.br",
};

type CharInfo = {
	nickname: string;
	level: number;
};

const char: CharInfo = {
	nickname: "Cleito",
	level: 100,
};

//Dizendo que o Player info é a junção dos dois tipos (Interceção)
type PlayerInfo = AccontInfo & CharInfo;

const player: PlayerInfo = {
	id: 1,
	name: "Fabrício Valtair da Silva",
	nickname: "Clovis",
	level: 100,
};
