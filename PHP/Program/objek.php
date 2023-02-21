<?php
// Saya Ayesha Ali Firdaus (NIM 2101990) mengerjakan evaluasi LATIHAN 2 dalam mata kuliah Desain Pemrograman Berorientasi Objek
// untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

/* Membuat kelas Human */
// kelas ini direpresentasikan untuk atribut NIK, Nama, dan Jenis Kelamin
class Human{
    /* Private */
    private $NIK;
    private $nama;
    private $jenisKelamin;

    /* Public */
    // Konstrucktor
    function __construct($nik, $nama, $jenisKelamin){
        $this->NIK = $nik;
        $this->nama = $nama;
        $this->jenisKelamin = $jenisKelamin;
    }


    /* Getter */
    // Get NIK
    public function getNIK(){
        return $this->NIK;
    }
    // Get Nama
    public function getNama(){
        return $this->nama;
    }
    // Get Jenis Kelamin
    public function getJenisKelamin(){
        return $this->jenisKelamin;
    }

    // Destructor
    function __destruct()
    {
        
    }
}

/*  Membuat Kelas Civitas Akademik */
// Kelas ini merepresentasikan asal_univ dan email_education
// Kelas ini merupakan anak dari kelas Human, alasannnya karena civitas akademik adalah
// komunitas yang aktif di bidang akademik, yang pasti merupakan seorang manusia
class SivitasAkademik extends Human{
    // Private
    private $asalUniv;
    private $emailEdu;

    /* Public */
    // Konstruktor
    function __construct($nik, $nama, $jenisKelamin, $asalUniv, $emailEdu)
    {
        parent::__construct($nik, $nama, $jenisKelamin);
        $this->asalUniv = $asalUniv;
        $this->emailEdu = $emailEdu;
    }

    /* Getter */
    // Get Asal Universitas
    public function getAsaluniv()
    {
        return $this->asalUniv;
    }
    // Get Email Education
    public function getEmail()
    {
        return $this->emailEdu;
    }
    // Destructor
    function __destruct()
    {
        
    }
}

/* Membuat kelas Mahasiswa */
// Kelas ini merepresentasikan NIM, Fakultas, dan Prodi
// Alasan kelas ini menjadi anak dari civitas akademik adalah
// karena civitas akademik berisi mahasiswa dan dosen.
class Mahasiswa extends SivitasAkademik{
    // Private
    private $NIM;
    private $fakultas;
    private $prodi;
    private $foto;

    /* Public */
    // Konstruktor
    function __construct($nik, $nama, $jenisKelamin, $asalUniv, $emailEdu, $Nim, $fakultas, $prodi, $foto)
    {
        parent::__construct($nik, $nama, $jenisKelamin, $asalUniv, $emailEdu);
        $this->NIM = $Nim;
        $this->fakultas = $fakultas;
        $this->prodi = $prodi;
        $this->foto = $foto;
    }

    /* Getter */
    // Get Nim
    public function getNIM()
    {
        return $this->NIM;
    }
    // Get fakultas
    public function getFakultas()
    {
        return $this->fakultas;
    }
    // Get Prodi
    public function getProdi()
    {
        return $this->prodi;
    }
    // Get path Foto
    public function getFoto(){
        return $this->foto;
    }
    // Konstruktor
    function __destruct()
    {
        
    }
}
?>