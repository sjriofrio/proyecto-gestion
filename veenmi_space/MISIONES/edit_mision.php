<?php ob_start(); ?>
<?php include 'aside.php'; ?>
<?php include 'conexion.php' ?>
<?php
If (isset ($_GET ['id_mision' ]) ) {
    $ID_MISION = $_GET ['id_mision' ];
    $sql = "SELECT * FROM MISIONES_ESPACIALES WHERE ID_MISION = $ID_MISION" ;
    $stmt = sqlsrv_query ($conn, $sql);
    if ($stmt === false ) {
        die (print_r (sqlsrv_errors (), true ));
    }
    $row = sqlsrv_fetch_array ($stmt, SQLSRV_FETCH_ASSOC);
    $NOMBRE_MISION = $row ['NOMBRE_MISION' ];
    $FECHA_LANZAMIENTO = $row ['FECHA_LANZAMIENTO' ];
    $DURACION = $row ['DURACION' ];
    $DESCRIPCION = $row ['DESCRIPCION' ];

}
if (isset ($_POST ['update' ]) ) {
    $ID_MISION = $_GET ['id_mision' ];
    $NOMBRE_MISION = $_POST ['NOMBRE_MISION' ];
    $FECHA_LANZAMIENTO = $_POST ['FECHA_LANZAMIENTO' ];
    $DURACION = $_POST ['DURACION' ];
    $DESCRIPCION = $_POST ['DESCRIPCION' ];
    $sql = "UPDATE MISIONES_ESPACIALES SET NOMBRE_MISION = '$NOMBRE_MISION' , FECHA_LANZAMIENTO = '$FECHA_LANZAMIENTO' , EDDURACIONAD = '$DURACION' , DESCRIPCION = '$DESCRIPCION' WHERE ID_MISION = $ID_MISION" ;
    $stmt = sqlsrv_query ($conn, $sql);
    if ($stmt === false ) {
        die (print_r (sqlsrv_errors (), true ));
    }
    header ('Location: registro_misiones.php' );
    exit ();
}
?>
<div class="formulario_Registro_Nave1">
    <h3>Editar de MISIONES</h3>
    <form action="edit_mision.php?id_mision=<?php echo $_GET['id_mision']; ?>" method="POST">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="NOMBRE_MISION" value="<?php echo $NOMBRE_MISION ?>">
        </div>
        <div class="form-group">
            <label for="fecha_lanzamiento">Fecha de Lanzamiento:</label>
            <input type="date" id="FECHA_LANZAMIENTO" name="FECHA_LANZAMIENTO" value="<?php echo $FECHA_LANZAMIENTO ?>">
        </div>
        <div class="form-group">
            <label for="duracion">Duracion:</label>
            <input type="time" id="duracion" name="DURACION" value="<?php echo $DURACCION ?>">
        </div>
        <div class="form-group">
            <label for="descripcion">Descripcion:</label>
            <input type="text" id="descripcion" name="DESCRIPCION" value="<?php echo $DESCRIPCION ?>">
        </div>  
          <button type="submit" name="update">Actualizar</button>
    </form>
</div>
</div>

