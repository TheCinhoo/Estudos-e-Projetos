type Todo = {
	title: string;
	description: string;
	completed: boolean;
};

//Readonly transforma tudo que está dentro do objeto em Apenas Leitura
const todo: Readonly<Todo> = {
	title: "Assistir Dark",
	description: "Descanso",
	completed: false,
};

console.log(todo);

function updateTodo(todo: Todo, fieldsToUpdate: Partial<Todo>) {
	return { ...todo, ...fieldsToUpdate };
}

const todo2: Todo = updateTodo(todo, { completed: true });
console.log(todo2);

///Pick
//Pega somente as propriedades passadas dentro do Pick
type TodoPreview = Pick<Todo, "title" | "completed">;
const todo3: TodoPreview = {
	title: "Fechar a porta",
	completed: false,
};

console.log(todo3);

///OMIT
//Faz o contrário do Pick - Exclui a propriedade passada entre <>
type TodoPreview2 = Omit<Todo, "description">;
