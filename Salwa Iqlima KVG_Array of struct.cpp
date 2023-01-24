#include <stdio.h>

typedef struct {
	int x [12] [12];
	int y [12] [12];
	int angka;
	char angkaPertama, angkaKedua;
	
} koordinat;

int main (){
	koordinat angka, angkaPertama, angkaKedua, jmlSisi;
int i;
	printf ("Bidang Pertama \n");
	printf ("Tentukan jumlah sisinya= ");
	scanf ("%d", &jmlSisi.angka);
	
	for (i=0; i<jmlSisi.angka; i++){
		printf ("Koordinat x %d= ", i+1);
		scanf("%s", &angkaPertama.x[i] );
		printf ("Koordinat y %d= ", i+1);
		scanf("%s", &angkaPertama.y[i] );
	}
	printf ("\n ");
	
	printf ("Bidang Kedua \n");
	printf ("Tentukan jumlah sisinya= ");
	scanf ("%d", &jmlSisi.angka);
	
	for (i=0; i<jmlSisi.angka; i++){
		printf ("Koordinat x %d= ", i+1);
		scanf("%s", &angkaKedua.x[i] );
		printf ("Koordinat y %d= ", i+1);
		scanf("%s", &angkaKedua.y[i] );
	}
	
		printf ("\n Koordinat yang digunakan pada bidang pertama adalah \n");
			for (i=0; i<jmlSisi.angka; i++){
				printf ("(%s, %s)", angkaPertama.x[i], angkaPertama.y[i]);
			}

		printf ("\n Koordinat yang digunakan pada bidang kedua adalah \n");
			for (i=0; i<jmlSisi.angka; i++){
				printf ("(%s, %s)", angkaKedua.x[i], angkaKedua.y[i]);
			}
	return 0;
}
