<?php
$servername = "MUSILU" ;
$connectioninfo = array( "Database"=>"Delta_Test", "UID"=>"sa", "PWD"=>"john");
$conn = sqlsrv_connect( $servername, $connectioninfo);
//$warehouse = "AUTOMOBILE";
if ($conn) {echo "";

}else{
echo "Connection Failed<br/>";
die(print_r( sqlsrv_errors(), true));

}
?>