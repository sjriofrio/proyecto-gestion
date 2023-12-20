<?php ob_start(); ?>
<?php include 'aside.php'; ?>
<?php include 'conexion.php' ?>
<?php
If (isset ($_GET ['id_tripulante' ]) ) {
    $ID_TRIPULANTE = $_GET ['id_tripulante' ];
    $sql = "SELECT * FROM ASTRONAUTAS WHERE ID_TRIPULANTE = $ID_TRIPULANTE" ;
    $stmt = sqlsrv_query ($conn, $sql);
    if ($stmt === false ) {
        die (print_r (sqlsrv_errors (), true ));
    }
    $row = sqlsrv_fetch_array ($stmt, SQLSRV_FETCH_ASSOC);
    $CEDULA = $row ['CEDULA' ];
    $NOMBRE = $row ['NOMBRE' ];
    $EDAD = $row ['EDAD' ];
    $CARGO = $row ['CARGO' ];
    $CELULAR = $row ['CELULAR' ];
}
if (isset ($_POST ['update' ]) ) {
    $ID_TRIPULANTE = $_GET ['id_tripulante' ];
    $CEDULA = $_POST ['CEDULA' ];
    $NOMBRE = $_POST ['NOMBRE' ];
    $EDAD = $_POST ['EDAD' ];
    $CARGO = $_POST ['CARGO' ];
    $CELULAR = $_POST ['CELULAR' ];
    $sql = "UPDATE ASTRONAUTAS SET CEDULA = '$CEDULA' , NOMBRE = '$NOMBRE' , EDAD = '$EDAD' , CARGO = '$CARGO' , CELULAR = '$CELULAR' WHERE ID_TRIPULANTE = $ID_TRIPULANTE" ;
    $stmt = sqlsrv_query ($conn, $sql);
    if ($stmt === false ) {
        die (print_r (sqlsrv_errors (), true ));
    }
    header ('Location: registro_tripulcion.php' );
    exit ();
}
?>
<div class="formulario_Registro_Nave">
    <h3>Editar de ASTRONAUTAS</h3>
    <form action="edit_astro.php?id_tripulante=<?php echo $_GET['id_tripulante']; ?>" method="POST">
        <div class="form-group">
            <label for="nombre">CEDULA:</label>
            <input type="text" id="nombre" name="CEDULA" value="<?php echo $CEDULA ?>">
        </div>
        <div class="form-group">
            <label for="modelo">NOMBRE:</label>
            <input type="text" id="modelo" name="NOMBRE" value="<?php echo $NOMBRE ?>">
        </div>
        <div class="form-group">
            <label for="fabricante">EDAD:</label>
            <input type="text" id="fabricante" name="EDAD" value="<?php echo $EDAD ?>">
        </div>
        <div class="form-group">
            <label for="capacidad">CARGO:</label>
            <input type="text" id="capacidad" name="CARGO" value="<?php echo $CARGO ?>">
        </div>
        <div class="form-group">
            <label for="carga">CELULAR:</label>
            <input type="text" id="carga" name="CELULAR" value="<?php echo $CELULAR ?>">
        </div>
        <button type="submit" name="update">Actualizar</button>
    </form>
</div>
</div>
