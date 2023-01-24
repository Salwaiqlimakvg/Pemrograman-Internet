#include <stdio.h>

typedef struct {
	char nama[30], kelas;
	int nim, usia;
	}mahasiswa;
int main()
{
	//input 3 data mahasiswa
	for(int a= 1; a<=3; a++){
	mahasiswa upi;
	printf("Input data mahasiswa upi: \n");
	printf("Nama(tanpa_spasi): "); scanf("%s", &upi.nama);
	printf("Kelas: "); scanf("%s", &upi.kelas);
	printf("Nim: "); scanf("%d", &upi.nim);
	printf("Usia: "); scanf("%d", &upi.usia);
	printf("----------selesai(terinput)----------\n");
	printf("\n");
	}
	
	printf("TERIMA KASIH");
return 0;
}
