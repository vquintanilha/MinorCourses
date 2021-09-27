#include <stdio.h>
#include <stdlib.h>
#include <time.h>

int main(int argc, char *argv[]) {
	
	int dado;
	srand(time(NULL));
	dado=("%d",rand()%6+1);
	printf("Jogo do dado\n");
	printf("Face: %d\n",dado);
	system("pause");
	return 0;
}
