#include <stdio.h>
#include <stdlib.h>
#include <locale.h>

float horas,salario,valhora,adicextra,horaext;

int main(int argc, char *argv[])
{
	setlocale(LC_ALL, "Portuguese");
	system("color 0E");
	printf("Qual o seu sal�rio? ");
	scanf("%f", &salario);
	printf("\nQuantas horas foram trabalhadas? ");
	scanf("%f", &horas);
	valhora = salario/200;
	adicextra = valhora*1.5;
	horaext = adicextra*(horas-200);
	salario = salario + horaext;
	printf("\nSeu sal�rio total ser�: %.2f\n", salario);
	system("pause");
	return 0;
}
