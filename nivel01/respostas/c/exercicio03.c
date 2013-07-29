#include <stdio.h>

int main(){
	
	int altura, base, area;

	printf("Digite a altura do retangulo: ");
	scanf("%d", &altura);

	printf("Digite a base do retangulo: ");
	scanf("%d", &base);

	area = base * altura;

	printf("A area do retangulo de altura %d e base %d eh: %d\n", altura, base, area);

	return 0;
}