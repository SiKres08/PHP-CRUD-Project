<?php
 include "koneksi.php";

 $id = $_GET['id'];
 $query = mysqli_query($koneksi, "DELETE FROM `order` WHERE id=$id");
header("location:menu_dev.php");
?>
