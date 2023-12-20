<?php include 'aside.php' ?>
<?php include 'conexion.php' ?>
<?php
$MATRICULA = $_POST['MATRICULA'];
$NOMBRE_NAVE = $_POST['NOMBRE_NAVE'];
$MODELO = $_POST['MODELO'];
$CAPACIDAD_TRIPULACION = $_POST['CAPACIDAD_TRIPULACION'];
$CAPACIDAD_CARGA = $_POST['CAPACIDAD_CARGA'];

    // ID_NAVE does not exist, proceed with the insert
    $query = "INSERT INTO NAVES_ESPACIALES (MATRICULA, NOMBRE_NAVE, MODELO, CAPACIDAD_TRIPULACION, CAPACIDAD_CARGA) VALUES ('$MATRICULA', '$NOMBRE_NAVE', '$MODELO', '$CAPACIDAD_TRIPULACION', '$CAPACIDAD_CARGA')";
    $result = sqlsrv_query($conn, $query);
    if ($result === false) {
        die(print_r(sqlsrv_errors(), true));
    }


?>
