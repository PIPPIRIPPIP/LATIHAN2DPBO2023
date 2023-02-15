// Saya Ayesha Ali Firdaus (NIM 2101990) mengerjakan evaluasi LATIHAN 2 dalam mata kuliah Desain Pemrograman Berorientasi Objek
// untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

/* Membuat kelas Human */
// kelas ini direpresentasikan untuk atribut NIK, Nama, dan Jenis Kelamin
class Human {
    /* Private */
    private String NIK;
    private String nama;
    private String jenis_kelamin;

    /* Public */
    public Human(String NIK, String nama, String jenis_kelamin) {
        this.NIK = NIK;
        this.nama = nama;
        this.jenis_kelamin = jenis_kelamin;
    }

    /* Getter */
    // Get NIK
    public String getNIK() {
        return NIK;
    }
    // get Nama
    public String getNama() {
        return nama;
    }
    // Get Gender
    public String getJenisKelamin() {
        return jenis_kelamin;
    }
}

/*  Membuat Kelas Civitas Akademik */
// Kelas ini merepresentasikan asal_univ dan email_education
// Kelas ini merupakan anak dari kelas Human, alasannnya karena civitas akademik adalah
// komunitas yang aktif di bidang akademik, yang pasti merupakan seorang manusia
class SivitasAkademik extends Human {
    /* Private */
    private String asal_universitas;
    private String email_edu;

    /* Public */
    // Konstruktor
    public SivitasAkademik(String NIK, String nama, String jenis_kelamin, String asal_universitas, String email_edu) {
        super(NIK, nama, jenis_kelamin);
        this.asal_universitas = asal_universitas;
        this.email_edu = email_edu;
    }

    /* Getter */
    // Get AsalUniv
    public String getAsalUniversitas() {
        return asal_universitas;
    }
    // GetEmail
    public String getEmailEdu() {
        return email_edu;
    }
}

/* Membuat kelas Mahasiswa */
// Kelas ini merepresentasikan NIM, Fakultas, dan Prodi
// Alasan kelas ini menjadi anak dari civitas akademik adalah
// karena civitas akademik berisi mahasiswa dan dosen.
class Mahasiswa extends SivitasAkademik {
    /* Private */
    private String NIM;
    private String fakultas;
    private String prodi;   

    /* Public */
    public Mahasiswa(String NIK, String nama, String jenis_kelamin, String asal_universitas, String email_edu, String NIM, String fakultas, String prodi) {
        super(NIK, nama, jenis_kelamin, asal_universitas, email_edu);
        this.NIM = NIM;
        this.fakultas = fakultas;
        this.prodi = prodi;
    }

    /* Getter */
    // Get NIM
    public String getNIM() {
        return NIM;
    }
    // Get Fakultas
    public String getFakultas() {
        return fakultas;
    }
    // Get Prodi
    public String getProdi() {
        return prodi;
    }
}