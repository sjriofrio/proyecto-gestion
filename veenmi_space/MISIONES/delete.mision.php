<?php include 'aside.php' ?>
<?php include 'conexion.php' ?>

<?php
if (isset($_GET['id_mision'])) {
    $ID_MISION = $_GET['id_mision'];
    $sql = "DELETE FROM MISIONES_ESPACIALES WHERE ID_MISION = $ID_MISION";
    $stmt = sqlsrv_query($conn, $sql);
    if ($stmt === false) {
        $errors = sqlsrv_errors();
        if ($errors) {
            $error_message = $errors[0]['message'];
            echo "No se pudo borrar el registro debido a un error: $error_message";
        } else {
            echo "No se pudo borrar el registro debido a un error desconocido.";
        }
    } else {
        echo "El registro se ha borrado exitosamente.";
    }
}
?>
