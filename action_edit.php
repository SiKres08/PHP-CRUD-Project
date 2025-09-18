<?php
include "koneksi.php";
if(isset($_POST['submit']))
{	
    $id               = $_POST['id'];
    $status           = $_POST['status'];

    // query SQL untuk insert data
    $query = mysqli_query($koneksi, "UPDATE `order` SET `status`='$status' WHERE id=$id");
    header("location:menu_dev.php");
} 
?>