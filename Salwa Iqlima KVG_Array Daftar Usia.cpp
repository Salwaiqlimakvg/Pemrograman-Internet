#include<iostream>
//mengalokasikan daftar usia
using namespace std;
int main(){
	int daftar_usia[8];
		daftar_usia[0]= 19;
		daftar_usia[1]= 20;
		daftar_usia[2]= 21;
		daftar_usia[3]= 21;
		daftar_usia[4]= 20;
		daftar_usia[5]= 19;
		daftar_usia[6]= 20;
		daftar_usia[7]= 20;
	
	int dewasa1= daftar_usia[0];
	int dewasa1a= daftar_usia[5]; 
	
	int dewasa2= daftar_usia[1]; 
	int dewasa2a= daftar_usia[4];
	int dewasa2b= daftar_usia[6];
	int dewasa2c= daftar_usia[7]; 
	
	
	int dewasa3= daftar_usia[2]; 
	int dewasa3a= daftar_usia[3];
	
	
	cout<<"Usia (dewasa_awal) & jumlahnya :"<<dewasa3 <<","<<dewasa3a<<endl;
	cout<<"Usia (dewasa_kedua) & jumlahnya :"<<dewasa2<<","<<dewasa2a<<","<<dewasa2b<<","<<dewasa2c<<endl;
	cout<<"Usia (dewasa_terakhir) & jumlahnya :"<<dewasa1<<","<<dewasa1a<<endl;

return 0;
}
