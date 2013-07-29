#include <stdio.h>

int main(){
	
	float totalEleitores, numVotosBrancos, numVotosNulos, numVotosValidos;
	float porcentagemVotosBrancos, porcentagemVotosNulos, porcentagemVotosValidos;

	printf("Digite o numero total de eleitores: ");
	scanf("%f", &totalEleitores);

	printf("Digite o numero total de votos em branco: ");
	scanf("%f", &numVotosBrancos);

	printf("Digite o numero total de votos nulos: ");
	scanf("%f", &numVotosNulos);

	printf("Digite o numero total de votos validos: ");
	scanf("%f", &numVotosValidos);

	porcentagemVotosBrancos = (numVotosBrancos / totalEleitores) * 100;
	porcentagemVotosNulos = (numVotosNulos / totalEleitores) * 100;
	porcentagemVotosValidos = (numVotosValidos / totalEleitores) * 100;

	printf("Porcentagem de votos brancos: %0.f", porcentagemVotosBrancos);
	printf("\n");
	printf("Porcentagem de votos nulos: %0.f", porcentagemVotosNulos);
	printf("\n");
	printf("Porcentagem de votos validos: %0.f", porcentagemVotosValidos);
	printf("\n");

	return 0;

}