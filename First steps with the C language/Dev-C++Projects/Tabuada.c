#include <stdio.h>
#include <stdlib.h>
#include <locale.h>

int numero,resposta;
int contador=0;

int main(int argc, char *argv[]) {
	do
	{
	setlocale(LC_ALL,"Portuguese");
	system("cls");
	printf("Tabuada\n\n");
	printf("Digite o n�mero da tabuada: ");
	scanf("%d",&numero);
	for(contador=0;contador<=10;contador++)
	{
		printf("%d x %d = %d\n",numero,contador,numero*contador);
	}
	printf("\n1- Novo C�lculo\n");
	printf("2- Sair\n");
	printf("Digite a op��o desejada: ");
	scanf("%d",&resposta);
}while(resposta != 2);
	system("PAUSE");
	return 0;
}
