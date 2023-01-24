#include<stdio.h>

typedef struct{
	int x;
	int y;
}Titik;

typedef struct{
	Titik awal;
	Titik akhir;
}garis;

int main () {
	garis A[3];
	int i,j;
	
for (i=0; i<3; i++) {
	printf("Input nilai untuk garis ke-%d \n", i+1);
	printf("Input nilai X1= ");
	scanf("%d", &A[i].awal.x);
	
	printf("Input nilai y1= ");
	scanf("%d", &A[i].awal.y);
	
	printf("Input nilai X2= ");
	scanf("%d", &A[i].akhir.x);
	
	printf("Input nilai y2= ");
	scanf("%d", &A[i].akhir.y);
	printf("\n");
	for (i=0; i<3; i++){
		printf("Garis ke%d ada pada kordinat titik (%d, %d) \n", i+1, A [i].awal.x, A[i].awal.y, A[i].akhir.x, A[i].akhir.y); 
	}
	}
	
}

