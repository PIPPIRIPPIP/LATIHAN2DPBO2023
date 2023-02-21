// Saya Ayesha Ali Firdaus (NIM 2101990) mengerjakan evaluasi LATIHAN 2 dalam mata kuliah Desain Pemrograman Berorientasi Objek
// untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

// Import Library
import java.util.ArrayList;

public class main {
    public static void main(String[] args) {

        // Membuat list untuk menyimpan data mahasiswa
        ArrayList<Mahasiswa> data = new ArrayList<>();

        /* Menambahkan data */
        // Mahasiswa 1
        Mahasiswa mhs = new Mahasiswa("1234567890", "Ayesha", "Laki-laki", "Universitas XYZ", "Ayesha@xyz.ac.id", "123456789", "Fakultas Teknik", "Teknik Informatika");
        data.add(mhs);
        // Mahasiswa 2
        Mahasiswa mhs1 = new Mahasiswa("0987654321", "Ali", "Laki-laki", "Universitas XYZ", "Ali@xyz.ac.id", "987654321", "Fakultas Kedokteran", "Kedokteran Gigi");
        data.add(mhs1);
        // Mahasiswa 3
        Mahasiswa mhs2 = new Mahasiswa("1938471938", "Firdaus", "Laki-laki", "Universitas XYZ", "Firdaus@xyz.ac.id", "293849283", "Fakultas MIPA", "Ilmu Komputer");
        data.add(mhs2);

        // Mencetak data mahasiswa sebanyak data yang ada di array
        System.out.println("           Daftar Mahasiswa           ");
        System.out.println("--------------------------------------");
        for (int i = 0; i < data.size(); i++) {
                System.out.println((i+1) + ".NIK              : " + data.get(i).getNIK());
                System.out.println(       "  Nama             : " + data.get(i).getNama());
                System.out.println(       "  Jenis Kelamin    : " + data.get(i).getJenisKelamin());
                System.out.println(       "  Asal Universitas : " + data.get(i).getAsalUniversitas());
                System.out.println(       "  Email Education  : " + data.get(i).getEmailEdu());
                System.out.println(       "  NIM              : " + data.get(i).getNIM());
                System.out.println(       "  Fakultas         : " + data.get(i).getFakultas());
                System.out.println(       "  Program Studi    : " + data.get(i).getProdi());
                System.out.println("--------------------------------------");
            }

    }
}