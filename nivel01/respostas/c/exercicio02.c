//inclusao da biblioteca input/output
#include <stdio.h>

int main(){

	//variavel que vai armazenar o numero
	int numero;

	//mensagem para requisitar numero
	printf("Digite um numero inteiro qualquer: ");
	//com scanf armazenamos o valor digitado pelo usuario a uma variavel qualquer, no caso numero. como estamos
	//esperando uma variavel do tipo inteiro utilizado o %d
	scanf("%d", &numero);

	//impressao do antecessor do numero inserido pelo usuario
	printf("Antecessor do numero %d: %d ",numero, numero-1);
	printf("\n");

	return 0;
}