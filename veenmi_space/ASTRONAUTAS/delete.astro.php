<?php include 'aside.php' ?>
<?php include 'conexion.php' ?>

<?php
if (isset($_GET['id_tripulante'])) {
    $ID_TRIPULANTE = $_GET['id_tripulante'];
    $sql = "DELETE FROM ASTRONAUTAS WHERE ID_TRIPULANTE = $ID_TRIPULANTE";
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
