<?php
$serverName = "STEEVEN";
$connectionOptions = array(
    "Database" => "veenmi_space_3",
    "Uid" => "sa",
    "PWD" => "050702"
);

// Establecer la conexión
$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}

return $conn;
?>
