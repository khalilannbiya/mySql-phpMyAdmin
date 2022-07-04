<?php
//memasukan file koneksi di dalam file menampilkan-database.php    
include_once("koneksi.php");
//$query menyimpan hasil query    
//kamu akan menghapus nama_lengkap Mario dengan jenis_kelamin laki-laki pada id nomor 1          
$query = mysqli_query($koneksi, "DELETE FROM karyawan WHERE id='1'");
//jika nilai benar    
if ($query) {
  echo "Data berhasil dihapus, silahkan lihat database perusahaan dan lihat table karyawan, kamu tidak akan melihat lagi id nomor 1";
} else {
  echo "Data gagal di hapus";
}
