#include <stdio.h>

int main() {
	
	int dias, meses, anos, total;

	printf("Digite a idade em anos: ");
	scanf("%d", &anos);

	printf("Digite os meses: ");
	scanf("%d", &meses);

	printf("Digite os dias: ");
	scanf("%d", &dias);

	total = anos * 365 + meses * 30 + dias;

	printf("Idade total em dias: %d", total);
	printf("\n");

	return 0;

}