<?php
require '../db_connectioin/dataconn.php';
mysqli_set_charset($link, "utf8");

$sql = "SELECT rice_ta_id, rice_ta_name FROM rice_table";

$result = mysqli_query($link, $sql);

while($row = mysqli_fetch_assoc($result)){
    //print(implode("|",$row));
    $output[] = $row;
}
echo json_encode($output, JSON_UNESCAPED_UNICODE);
mysqli_close($link);