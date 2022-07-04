<?php
//memasukan file koneksi di dalam file menampilkan-database.php    
include_once("koneksi.php");
//$query menyimpan hasil query    
//kamu akan merubah nama_lengkap menjadi Panji dan jenis_kelamin menjadi laki-laki pada id nomor 5    
$query = mysqli_query($koneksi, "UPDATE karyawan SET nama_lengkap='Panji', jenis_kelamin='Laki-laki' WHERE id='5'");
//jika nilai benar    
if ($query) {
  echo "Data berhasil di rubah, silahkan lihat database perusahaan dan lihat table karyawan dan lihat id 5";
} else {
  echo "Data gagal di ubah";
}
