//funcao principal 
int main(){
	
	//criacao das variaveis inteiras a, b e aux(auxiliar)
	int a, b, aux;

	//inicializacao dos valores de cada variavel
	a = 10;
	b = 20;
	aux = 0;

	//atribuindo o valor de a a variavel auxiliar
	aux = a;

	//damos o valor de b para a e da variavel auxiliar, que guarda o valor inicial de a, para b
	a = b;
	b = aux;

	//impressao dos valores
	printf("Valor de a: %d", a);
	printf("Valor de b: %d". b);

	//retorno e fim da funcao
	return 0;
}