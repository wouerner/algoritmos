//inclusao da biblioteca input/output
#include <stdio.h>

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

	printf("Valor inicial de a: %d", a);
	//quebra de linha
	printf("\n");
	//impressao de b
	printf("Valor inicial de b: %d", b);
	//quebra de linha
	printf("\n");

	//damos o valor de b para a e da variavel auxiliar, que guarda o valor inicial de a, para b
	a = b;
	b = aux;

	//impressao do valor de a
	printf("Valor final de a: %d", a);
	//quebra de linha
	printf("\n");
	//impressao de b
	printf("Valor final de b: %d", b);
	//quebra de linha
	printf("\n");

	//retorno e fim da funcao
	return 0;
}