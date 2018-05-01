<?php

print_r($_REQUEST);

include("../DBConnection.php");
$deleteQuery = "DELETE FROM ksiazki_arkonska
                WHERE ID IN $_REQUEST[id]";
print_r($deleteQuery);

mysqli_query(OpenCon(),$deleteQuery);
?>
