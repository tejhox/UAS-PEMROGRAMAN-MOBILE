<?php
include('connection.php');
$id = (int)$_POST['id'];
$query = 'delete from tbl_phone where id = '.$id;
$result = mysqli_query($conn, $query) or (mysqli_error($conn));
if(mysqli_affected_rows($conn) > 0){
echo 'Delete Data Success';
}else{
echo '';
}
?>