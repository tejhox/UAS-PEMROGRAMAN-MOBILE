<?php
include('connection.php');
$id = (int)$_POST['id'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$query = 'insert into tbl_phone (phone_name, price) values ("'.$nama.'", "'.
$harga.'")';
if($id > 0){
$query = 'update tbl_phone set phone_name = "'.$nama.'", price = "'.$harga.'"
where id
= '.$id;
}
mysqli_query($conn, $query) or die(mysqli_error($conn));
?>