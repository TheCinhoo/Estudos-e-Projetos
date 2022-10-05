//criando um tipo que aceita mais de um tipo primitivo - Type Alias
type Uid = number | string;

// | passa mais de 2 tipos para a variavel
function logDetails(uid: number | string, item: string) {
	console.log(`O produto com seu ${uid} tem o título de ${item}`);
}

function logInfo(uid: Uid, item: string) {
	console.log(`O seu ${uid} tem o título de ${item}`);
}

//Type Alias força que o usuário só aceite esses campos.
type Plataform = "Windows" | "Linux" | "Mac OS";

function renderPlatform(platform: Plataform) {
	return platform;
}

logDetails(1, "sapatinho");
