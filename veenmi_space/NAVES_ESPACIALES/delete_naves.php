
<?php include 'aside.php' ?>
<?php include 'conexion.php' ?>

<?php
if (isset($_GET['id_nave'])) {
    $ID_NAVE = $_GET['id_nave'];

    // Verificar si hay registros en MISION_NAVE que dependen del ID_NAVE
    $sql_check = "SELECT COUNT(*) AS count FROM MISION_NAVE WHERE NAVES_ESPACIALES_ID_NAVE = $ID_NAVE";
    $stmt_check = sqlsrv_query($conn, $sql_check);
    $row_check = sqlsrv_fetch_array($stmt_check, SQLSRV_FETCH_ASSOC);

    if ($row_check['count'] > 0) {
        echo "No se puede eliminar la nave espacial porque tiene misiones asociadas. Elimina primero las misiones asociadas.";
    } else {
        // No hay dependencias, se puede eliminar la nave espacial
        $sql_delete = "DELETE FROM NAVES_ESPACIALES WHERE ID_NAVE = $ID_NAVE";
        $stmt_delete = sqlsrv_query($conn, $sql_delete);

        if ($stmt_delete === false) {
            die(print_r(sqlsrv_errors(), true));
        } else {
            echo "El registro se ha borrado exitosamente.";
        }
    }
}
?>

