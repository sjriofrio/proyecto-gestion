<?php
    include("conexion.php");

  ?>
  <?php include 'aside.php' ?>

<body>
formulario_Registro_Nave
   
    <div class="formulario_Registro_Nave1">
      <h3>Registro de Misiones</h3>

      <form id="registroMisionForm" action="../MISIONES/guardar_mision.php" method="post">
        <div class="form-group">
          <label for="nombre">Nombre:</label>
          <input type="text" id="NOMBRE_MISION" name="NOMBRE_MISION" required>
      </div>

        <div class="form-group">
          <label for="fecha_lanzamiento">Fecha de Lanzamiento</label>
          <input type="date" id="FECHA_LANZAMIENTO" name="FECHA_LANZAMIENTO" required>
        </div>

        <div class="form-group">
          <label for="fabricante">Duracion:</label>
          <input type="time" id="DURACCION" name="DURACCION" required>
        </div>

        <div class="form-group">
          <label for="capacidad">Descripcion:</label>
          <input type="text" id="DESCRIPCION" name="DESCRIPCION" required>
        </div>

        <button type="submit">Registrar Astronautas</button>

      </form>
    </div>
  </div>


  <table id="naveTable">
    <thead>
      <tr>
        <th>ID_MISION</th>
        <th>NOMBRE</th>
        <th>FECHA LANZAMIENTO</th>
        <th>DURACION</th>
        <th>DESCRIPCION</th>
        
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php
         $sql = "SELECT * FROM MISIONES_ESPACIALES";
         $result = sqlsrv_query($conn, $sql);
        while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
      ?>
      <tr>
        <td><?php echo $row['ID_MISION']; ?></td>
        <td><?php echo $row['NOMBRE_MISION']; ?></td>
        <td><?php echo $row['FECHA_LANZAMIENTO']->format('Y-m-d');  ?></td>
        <td><?php echo $row['DURACION']->format('H:i'); ; ?></td>
        <td><?php echo $row['DESCRIPCION']; ?></td>
        <td>
          <a  href="edit_mision.php?id_mision=<?php echo $row['ID_MISION'] ?>">
            <i class="fas fa-pencil-alt"></i>
        </a>
        <a href="delete.mision.php?id_mision=<?php echo $row['ID_MISION'] ?>">
            <i class="fas fa-trash-alt"></i>
        </a>
          
        </td>
      </tr>
      <?php
        }
      ?>
      
    </tbody>
  </table>


  <div class="custom-alert" id="updateAlert">
    <form id="updateForm">
      <p>Editar Registro:</p>
      <div class="form-group">
        <label for="update_nombre">Nombre:</label>
        <input type="text" id="update_nombre" name="update_nombre" required>
      </div>
      <div class="form-group">
        <label for="update_fecha_de_lanzamiento">Fecha de Lanzamiento:</label>
        <input type="date" id="update_fecha_de_lanzamiento" name="update_fecha_de_lanzamiento" required>
      </div>
      <div class="form-group">
        <label for="update_duracion">Duracion:</label>
        <input type="time" id="update_duracion" name="update_duracion" required>
      </div>
      <div class="form-group">
        <label for="update_descripcion">Descripcion</label>
        <input type="number" id="update_descripcion" name="update_descripcion" required>
      </div>
      <button type="button" id="confirmUpdate">Actualizar</button>
      <button type="button" id="cancelUpdate">Cancelar</button>
    </form>
  </div>
     
 
  <script src='https://unpkg.com/akar-icons-fonts'></script>
  <script src="./script.js"></script>
</body>

</html>
