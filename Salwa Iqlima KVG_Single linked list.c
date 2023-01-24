#include <stdio.h>
#include <stdlib.h>
#include <string.h>

typedef struct list {
	int id;
	char nama [50];
	long int harga;
	struct list *nextAddress;
}list;

list *addList (int ID, char NAMA [50], long int HARGA){
	list *listBaru = NULL;
	listBaru= (list*) malloc (sizeof (list));
	listBaru->id=ID;
	strcpy(listBaru->nama, NAMA);
	listBaru->harga=HARGA;
	listBaru->nextAddress = NULL;
	return listBaru;
}

void addAwal (int ID, char NAMA [50], long int HARGA, list **listProduk){
	list *newList = addList (ID, NAMA, HARGA);
	newList -> nextAddress = (*listProduk);
	(*listProduk) = newList;
	newList = NULL;
}

void addTengah (int ID, char NAMA [50], long int HARGA, list *listProduk, int A){
	list *newList = addList (ID, NAMA, HARGA);
	list *cek = NULL;
	cek = (listProduk);
	while (cek->id != A){
		cek = cek -> nextAddress;
	}
	newList -> nextAddress = cek -> nextAddress;
	cek -> nextAddress = newList;
	newList = NULL;
}
	
void addAkhir (int ID, char NAMA [50], long int HARGA, list *listProduk){
	list *newList = addList (ID, NAMA, HARGA);
	list *cek = NULL;
	cek = (listProduk);
	while (cek-> nextAddress != NULL){
		cek = cek -> nextAddress;
	}
	cek ->nextAddress = newList;
	newList = NULL;
}

int main (){
	list *barang;
	printf ("List Produk: \n");
	barang = addList (8, "Mie", 2300);
	addAwal(2, "sabun", 20000, &barang);
	addAkhir(10, "kecap", 8700, barang);
	addAwal(1, "Mie", 7600, &barang);
	addTengah (9, "kopi", 7600, barang, 8);
	
	show (barang);
	return 0;
}
