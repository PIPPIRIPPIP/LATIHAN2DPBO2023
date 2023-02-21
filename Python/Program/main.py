# Saya Ayesha Ali Firdaus (NIM 2101990) mengerjakan evaluasi LATIHAN 2 dalam mata kuliah Desain Pemrograman Berorientasi Objek
# untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

# Import library yang sudah dibuat dan diperlukan di main
from objek import Mahasiswa

# Membuat array untuk menampung data mahasiswa
data = []

# Menambahkan data #
# Mahasiswa 1
mhs1 = Mahasiswa("1234567890", "Ayesha", "Laki-laki", "Universitas XYZ", "Ayesha@xyz.ac.id", "123456789", "Fakultas Teknik", "Teknik Informatika")
data.append(mhs1)
# Mahasiswa 2
mhs2 = Mahasiswa("0987654321", "Ali", "Laki-laki", "Universitas XYZ", "Ali@xyz.ac.id", "987654321", "Fakultas Kedokteran", "Kedokteran Gigi")
data.append(mhs2)
# Mahasiswa 3
mhs3 = Mahasiswa("1938471938", "Firdaus", "Laki-laki", "Universitas XYZ", "Firdaus@xyz.ac.id", "293849283", "Fakultas MIPA", "Ilmu Komputer")
data.append(mhs3)

# // Mencetak data mahasiswa sebanyak data yang ada di array
print("           Daftar Mahasiswa           ")
print("--------------------------------------")
for i in range(len(data)):
    print(str(i+1) + f".NIK              : {data[i].getNim()}")
    print(          f"  Nama             : {data[i].getNama()}")
    print(          f"  Jenis Kelamin    : {data[i].getJenisKelamin()}")
    print(          f"  Asal Universitas : {data[i].getAsalUniv()}")
    print(          f"  Email Education  : {data[i].getEmail()}")
    print(          f"  NIM              : {data[i].getNim()}")
    print(          f"  Fakultas         : {data[i].getFakultas()}")
    print(          f"  Program Studi    : {data[i].getProdi()}")
    print("--------------------------------------")