<?php include 'aside.php' ?>
<?php include 'conexion.php' ?>
<?php
$NOMBRE_MISION = $_POST['NOMBRE_MISION'];
$FECHA_LANZAMIENTO = $_POST['FECHA_LANZAMIENTO'];
$DURACCION = $_POST['DURACCION'];
$DESCRIPCION = $_POST['DESCRIPCION'];

    // ID_NAVE does not exist, proceed with the insert
    $query = "INSERT INTO MISIONES_ESPACIALES (NOMBRE_MISION, FECHA_LANZAMIENTO, DURACION, DESCRIPCION) VALUES ('$NOMBRE_MISION', '$FECHA_LANZAMIENTO', '$DURACION', '$DESCRIPCION')";
    $result = sqlsrv_query($conn, $query);
    if ($result === false) {
        die(print_r(sqlsrv_errors(), true));
    }


?>
