<?php 
// Saya Ayesha Ali Firdaus (NIM 2101990) mengerjakan evaluasi LATIHAN 2 dalam mata kuliah Desain Pemrograman Berorientasi Objek
// untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

// Import library objek
include "objek.php";

// Mmebuat array untuk menyimpan data
$data = array();

// Add data
// Mahasiswa 1
$input = new Mahasiswa("1234567890", "Ayesha", "Laki-laki", "Universitas XYZ", "Ayesha@xyz.ac.id", "123456789", "Fakultas Teknik", "Teknik Informatika", "foto/1.jpeg");
array_push($data, $input);
// Mahasiswa 2
$input = new Mahasiswa("0987654321", "Ali", "Laki-laki", "Universitas XYZ", "Ali@xyz.ac.id", "987654321", "Fakultas Kedokteran", "Kedokteran Gigi", "foto/2.jpg");
array_push($data, $input);
// Mahasiswa 3
$input = new Mahasiswa("1938471938", "Firdaus", "Laki-laki", "Universitas XYZ", "Firdaus@xyz.ac.id", "293849283", "Fakultas MIPA", "Ilmu Komputer", "foto/3.jpeg");
array_push($data, $input);

// Mencetak data mahasiswa sebanyak yang ada di dalam array
echo "           Daftar Mahasiswa           " . "<br/>";
echo "--------------------------------------" . "<br/>";
for($i = 0; $i < sizeof($data); $i++){
    echo $i+1 . "<img src='" . $data[$i]->getFoto(). "'style='width:100px'>" . "<br/>";
    echo "  NIK              : " . $data[$i]->getNIK() . "<br/>";
    echo "  Nama             : " . $data[$i]->getNama() . "<br/>";
    echo "  Jenis Kelamin    : " . $data[$i]->getJenisKelamin() . "<br/>";
    echo "  Asal Universitas : " . $data[$i]->getAsaluniv() . "<br/>";
    echo "  Email Education  : " . $data[$i]->getEmail() . "<br/>";
    echo "  NIM              : " . $data[$i]->getNIM() . "<br/>";
    echo "  Fakultas         : " . $data[$i]->getFakultas() . "<br/>";
    echo "  Program Studi    : " . $data[$i]->getProdi() . "<br/>";
    echo "--------------------------------------" . "<br/>";
}
?>