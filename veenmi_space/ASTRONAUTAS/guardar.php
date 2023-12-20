<?php include 'aside.php' ?>
<?php include 'conexion.php' ?>
<?php
$CEDULA = $_POST['CEDULA'];
$NOMBRE = $_POST['NOMBRE'];
$EDAD = $_POST['EDAD'];
$CARGO = $_POST['CARGO'];
$CELULAR = $_POST['CELULAR'];

    // ID_NAVE does not exist, proceed with the insert
    $query = "INSERT INTO ASTRONAUTAS (CEDULA, NOMBRE, EDAD, CARGO, CELULAR) VALUES ('$CEDULA', '$NOMBRE', '$EDAD', '$CARGO', '$CELULAR')";
    $result = sqlsrv_query($conn, $query);
    if ($result === false) {
        die(print_r(sqlsrv_errors(), true));
    }


?>
