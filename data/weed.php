<?php
require '../db_connectioin/dataconn.php';
mysqli_set_charset($link, "utf8");

$sql = "SELECT weed_id, weed_name FROM weed";

$result = mysqli_query($link, $sql);

while($row = mysqli_fetch_assoc($result)){
    //print(implode("|",$row));
    $output[] = $row;
}
echo json_encode($output, JSON_UNESCAPED_UNICODE);
mysqli_close($link);