<?php
include('connection.php');
$query = 'select id, phone_name as nama, price as harga from tbl_phone';
$result = mysqli_query($conn, $query) or die (mysqli_error($conn));
$data = array();
while($row = mysqli_fetch_object($result)){
    $data['handphone'][]= $row;
}
echo json_encode($data);
?>