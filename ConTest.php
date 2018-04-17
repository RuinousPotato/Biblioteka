<?php
include 'DBConnection.php';

$conn = OpenCon();

echo "Connected Successfully";

CloseCon($conn);
?>
