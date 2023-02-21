// Saya Ayesha Ali Firdaus (NIM 2101990) mengerjakan evaluasi LATIHAN 2 dalam mata kuliah Desain Pemrograman Berorientasi Objek
// untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

// Import Library
#include <iostream>
#include <string>

// Using standard namespace
using namespace std;

/* Membuat kelas Human */
// kelas ini direpresentasikan untuk atribut NIK, Nama, dan Jenis Kelamin
class Human{
    /* Private */
    private:
        string NIK;
        string Nama;
        string jenisKelamin;

    /* Public */
    public:
        // Konstruktor
        Human(string NIK, string Nama, string jenisKelamin){
            this->NIK = NIK;
            this->Nama = Nama;
            this->jenisKelamin = jenisKelamin;
        }

        /* Getter */
        // Get NIK
        string getNIK(){
            return this->NIK;
        }
        // get Nama
        string getNama(){
            return this->Nama;
        }
        // Get Gender
        string getJenisKelamin(){
            return this->jenisKelamin;
        }
        // Destruktor
        ~Human(){

        }
};


/*  Membuat Kelas Civitas Akademik */
// Kelas ini merepresentasikan asal_univ dan email_education
// Kelas ini merupakan anak dari kelas Human, alasannnya karena civitas akademik adalah
// komunitas yang aktif di bidang akademik, yang pasti merupakan seorang manusia
class SivitasAkademik : public Human{
    /* Private */
    private:
        string asalUniversitas;
        string emailEdu;

    /* Public */
    public:
        // Konstruktor
        SivitasAkademik(string NIK, string Nama, string jenisKelamin, string asalUniv, string emailEdu) 
        : Human(NIK, Nama, jenisKelamin){
            this->asalUniversitas = asalUniv;
            this->emailEdu = emailEdu;
        }

        /* Getter */
        // Get AsalUniv
        string getAsalUniv(){
            return this->asalUniversitas;
        }
        // GetEmail
        string getEmailEdu(){
            return this->emailEdu;
        }

        // Destruktor
        ~SivitasAkademik(){

        }
};


/* Membuat kelas Mahasiswa */
// Kelas ini merepresentasikan NIM, Fakultas, dan Prodi
// Alasan kelas ini menjadi anak dari civitas akademik adalah
// karena civitas akademik berisi mahasiswa dan dosen.
class Mahasiswa : public SivitasAkademik{
    /* Private */
    private:
        string NIM;
        string fakultas;
        string prodi;

    /* Public */
    public:
        // kosntruktor
        Mahasiswa(string NIK, string Nama, string jenisKelamin, string asalUniv, string emailEdu, string NIM, string fakultas, string prodi)
        : SivitasAkademik(NIK, Nama, jenisKelamin, asalUniv, emailEdu){
            this->NIM = NIM;
            this->fakultas = fakultas;
            this->prodi = prodi;
        }

        /* Getter */
        // Get NIM
        string getNIM(){
            return this->NIM;
        }
        // Get Fakultas
        string getFakultas(){
            return this->fakultas;
        }
        // Get Prodi
        string getProdi(){
            return this->prodi;
        }

        // Destruktor
        ~Mahasiswa(){

        }
};