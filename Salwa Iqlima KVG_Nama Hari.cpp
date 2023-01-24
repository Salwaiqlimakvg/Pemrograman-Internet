#include <stdio.h>
#include <string.h>
typedef struct {
	char hari [20];
	int tanggal;
	int bulan;
	int tahun;
	}waktu;
int main()
{
	waktu yesterday;
	strcpy(yesterday.hari, "senin");
	yesterday.tanggal = 8;
	yesterday.bulan = 2;
	yesterday.tahun = 2021;
	printf("kemarin adalah hari ");
	printf("%s, %d - %d - %d \n", yesterday.hari, yesterday.tanggal, yesterday.bulan, yesterday.tahun);
	
	waktu tomorrow;
	strcpy(tomorrow.hari, "rabu");
	tomorrow.tanggal = 10;
	tomorrow.bulan = 2;
	tomorrow.tahun = 2021;
	printf("Setelah hari selasa adalah hari ");
	printf("%s, %d - %d - %d \n", tomorrow.hari, tomorrow.tanggal, tomorrow.bulan, tomorrow.tahun);
	
	return 0;
}
