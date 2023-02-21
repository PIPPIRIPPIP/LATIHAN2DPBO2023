// Saya Ayesha Ali Firdaus (NIM 2101990) mengerjakan evaluasi LATIHAN 2 dalam mata kuliah Desain Pemrograman Berorientasi Objek
// untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

// Import Library
#include <iostream>
#include <string>
#include <vector>
#include "objek.cpp"

// Using standard namespace
using namespace std;

int main(){
    // Membuat list untuk menyimpan data mahasiswa
    vector<Mahasiswa> data;

    /* Menambahkan data */
    // Mahasiswa 1
    Mahasiswa mhs1("1234567890", "Ayesha", "Laki-laki", "Universitas XYZ", "Ayesha@xyz.ac.id", "123456789", "Fakultas Teknik", "Teknik Informatika");
    data.push_back(mhs1);
    // Mahasiswa 2
    Mahasiswa mhs2("0987654321", "Ali", "Laki-laki", "Universitas XYZ", "Ali@xyz.ac.id", "987654321", "Fakultas Kedokteran", "Kedokteran Gigi");
    data.push_back(mhs2);
    // Mahasiswa 3
    Mahasiswa mhs3("1938471938", "Firdaus", "Laki-laki", "Universitas XYZ", "Firdaus@xyz.ac.id", "293849283", "Fakultas MIPA", "Ilmu Komputer");
    data.push_back(mhs3);

    // Mencetak data mahasiswa sebanyak data yang ada di array
    cout << "           Daftar Mahasiswa           \n";
    cout << "--------------------------------------\n";
    for(int i = 0; i < data.size(); i++){
        cout << i+1 << ".NIK              : " << data[i].getNIK() << endl;
        cout <<       "  Nama             : " << data[i].getNama() << endl;
        cout <<       "  Jenis Kelamin    : " << data[i].getJenisKelamin() << endl;
        cout <<       "  Asal Universitas : " << data[i].getAsalUniv() << endl;
        cout <<       "  Email Education  : " << data[i].getEmailEdu() << endl;
        cout <<       "  NIM              : " << data[i].getNIM() << endl;
        cout <<       "  Fakultas         : " << data[i].getFakultas() << endl;
        cout <<       "  Program Studi    : " << data[i].getProdi() << endl;
        cout << "--------------------------------------\n";
    }
}