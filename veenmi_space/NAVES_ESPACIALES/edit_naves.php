<?php ob_start(); ?>
<?php include 'aside.php' ?>
<?php include 'conexion.php' ?>

<?php
if (isset($_GET['id_nave'])) {
    $ID_NAVE = $_GET['id_nave'];
    $sql = "SELECT * FROM NAVES_ESPACIALES WHERE ID_NAVE = $ID_NAVE";
    $stmt = sqlsrv_query($conn, $sql);
    if ($stmt === false) {
        die(print_r(sqlsrv_errors(), true));
    }
    $row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
    $MATRICULA = $row['MATRICULA'];
    $NOMBRE_NAVE = $row['NOMBRE_NAVE'];
    $MODELO = $row['MODELO'];
    $CAPACIDAD_TRIPULACION = $row['CAPACIDAD_TRIPULACION'];
    $CAPACIDAD_CARGA = $row['CAPACIDAD_CARGA'];

}

if (isset($_POST['update'])) {
    $ID_NAVE = $_GET['id_nave'];
    $MATRICULA = $_POST['matricula'];
    $NOMBRE_NAVE = $_POST['nombre_nave'];
    $MODELO = $_POST['modelo'];
    $CAPACIDAD_TRIPULACION = $_POST['capacidad_tripulacion'];
    $CAPACIDAD_CARGA = $_POST['capacidad_carga'];


    $sql = "UPDATE NAVES_ESPACIALES SET MATRICULA = '$MATRICULA', NOMBRE_NAVE = '$NOMBRE_NAVE', MODELO = '$MODELO', CAPACIDAD_TRIPULACION = '$CAPACIDAD_TRIPULACION', CAPACIDAD_CARGA = '$CAPACIDAD_CARGA' WHERE ID_NAVE = $ID_NAVE";
    $stmt = sqlsrv_query($conn, $sql);
    if ($stmt === false) {
        die(print_r(sqlsrv_errors(), true));
    }
    header('Location: registro_nave_espacial.php');
    exit();
}

?>

<div class="formulario_Registro_Nave">
    <h3>Editar de Naves Espaciales</h3>

    <form action="edit_naves.php?id_nave=<?php echo $_GET['id_nave']; ?>" method="POST">

        <div class="form-group">
            <label for="nombre">Matrícula:</label>
            <input type="text" id="nombre" name="matricula" value="<?php echo $MATRICULA ?>">
        </div>

        <div class="form-group">
            <label for="modelo">Nombre:</label>
            <input type="text" id="modelo" name="nombre_nave" value="<?php echo $NOMBRE_NAVE ?>">
        </div>

        <div class="form-group">
            <label for="fabricante">Modelo:</label>
            <input type="text" id="fabricante" name="modelo" value="<?php echo $MODELO ?>">
        </div>

        <div class="form-group">
            <label for="capacidad">Capacidad de Tripulantes:</label>
            <input type="text" id="capacidad" name="capacidad_tripulacion" value="<?php echo $CAPACIDAD_TRIPULACION ?>">
        </div>

        <div class="form-group">
            <label for="carga">Capacidad de Carga:</label>
            <input type="text" id="carga" name="capacidad_carga" value="<?php echo $CAPACIDAD_CARGA ?>">
        </div>

    
        <button type="submit" name="update">Actualizar</button>

    </form>
</div>
