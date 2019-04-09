<?php
    
    $SERVER = "localhost";
    $USERNAME = "root";
    $PASSWORD = "bict179311";
    $DB_NAME = "breed";

$link = mysqli_connect($SERVER,$USERNAME,$PASSWORD, $DB_NAME);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
// mysqli_close($link);
?>