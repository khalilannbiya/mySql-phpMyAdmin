<?php
//memasukan file koneksi di dalam file menampilkan-database.php    
include_once("koneksi.php");

//variable query menyimpan hasil query    
// mysqli_query($koneksi, " insert into nama_table (field table, field table, dan seterusnya) VALUES ("data", "data", dan seterusnya));
$query = mysqli_query($koneksi, "INSERT INTO karyawan (nama_lengkap, jenis_kelamin) VALUES ('Khalil','Laki-laki')");

//jika nilai benar    
if ($query) {
  echo "Data berhasil di masukan, silahkan lihat database perusahaan dan lihat table karyawan, disana kamu akan melihat nama Rudi dengan jenis kelamin laki-laki";
} else {
  echo "Data gagal di masukan";
}
