#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

int main(int argc, char *argv[])
{
	int idade;
	printf("Digite a sua idade: ");
	scanf("%d", &idade);
	//a linha abaixo executa uma estrutura de decis�o
	if (idade<18)
	{
		printf("Menor de idade\n");
	}
	if (idade>=18)
	{
		printf("Maior de idade\n");
	}
	system("pause");
	return 0;
}
