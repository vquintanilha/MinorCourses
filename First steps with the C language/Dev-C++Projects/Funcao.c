#include <stdio.h>
#include <stdlib.h>
#include <locale.h>

void teste(void);

int main(int argc, char *argv[])
{
	setlocale(LC_ALL,"Portuguese");
	printf("Exemplo de função\n\n");
	teste();
	teste();
	printf("Fim\n");
	system("pause");
	return 0;
}

void teste(void)
{
	printf("Victor Juan Bernardo Quintanilha\n");
}
