<?php
require '../db_connectioin/dataconn.php';
mysqli_set_charset($link, "utf8");

$id = (int)$_GET['id'];

$sql = "SELECT * FROM rice_table WHERE rice_ta_id = $id";

$result = mysqli_query($link, $sql);
while($row = mysqli_fetch_assoc($result)){
    //print(implode("|",$row));
    $output[] = $row;
}
echo json_encode($output, JSON_UNESCAPED_UNICODE);
mysqli_close($link);
