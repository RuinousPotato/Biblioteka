<?php

print_r($_REQUEST);
$id = $_REQUEST[id];

include("../DBConnection.php");
$deleteQuery = "DELETE FROM ksiazki_arkonska
                WHERE ID IN $id";
print_r($deleteQuery);

mysqli_query(OpenCon(),$deleteQuery);
?>
