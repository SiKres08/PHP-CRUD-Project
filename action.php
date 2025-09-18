
<?php
include "koneksi.php";
// menyimpan data kedalam variabel
$email            = $_POST['email'];
$tanggal          = date("Y-m-d H:i:s");
$nama             = $_POST['nama'];
$desain           = $_POST['desain'];
$deskripsi        = $_POST['deskripsi'];
$status           = $_POST['status'];

if($email=="")
{
  echo "<script>alert('E-mail belum diisi');history.go(-1);</script>";
}
 
if($nama=="")
{
  echo "<script>alert('Nama belum diisi');history.go(-1);</script>";
}
 
if($deskripsi=="")
{
  echo "<script>alert('Deskripsi belum diisi');history.go(-1);</script>";
}
else{
// query SQL untuk insert data
$query = mysqli_query($koneksi, "INSERT INTO `order` (`id`, `tanggal`, `email`, `nama`, `desain`, `deskripsi`, `status`) VALUES ('','$tanggal','$email','$nama','$desain','$deskripsi','waiting..')");
// mengalihkan ke halaman index.php
header("location:berhasil.php");
}
?>