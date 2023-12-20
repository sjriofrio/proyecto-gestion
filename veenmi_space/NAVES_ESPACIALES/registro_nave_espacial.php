   <?php
    include("conexion.php");

    ?>
    <?php include 'aside.php' ?>

<body>


    <div class="formulario_Registro_Nave">
      <h3>Registro de Naves Espaciales</h3>

      <form id="registroNaveForm" action="guardar.php" method="post">

          <div class="form-group">
          <label for="nombre">Matrícula:</label>
          <input type="text" id="nombre" name="MATRICULA" required>
        </div>

        <div class="form-group">
          <label for="modelo">Nombre:</label>
          <input type="text" id="modelo" name="NOMBRE_NAVE" required>
        </div>

        <div class="form-group">
          <label for="fabricante">Modelo:</label>
          <input type="text" id="fabricante" name="MODELO" required>
        </div>

        <div class="form-group">
          <label for="capacidad">Capacidad de Tripulantes:</label>
          <input type="number" id="capacidad" name="CAPACIDAD_TRIPULACION" required>
        </div>

        <div class="form-group">
          <label for="carga">Capacidad de Carga:</label>
          <input type="number" id="carga" name="CAPACIDAD_CARGA" required>
        </div>
  
        <button type="submit">Registrar Nave</button>

      </form>
    </div>
  </div>

  <table id="naveTable">
    <thead>
      <tr>
        <th>ID</th>
        <th>Matricula</th>
        <th>Nombre de la Nave</th>
        <th>Modelo</th>
        <th>Capacidad Tripulacion</th>
        <th>Capacidad de carga</th>
        
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php
         $sql = "SELECT * FROM NAVES_ESPACIALES";
         $result = sqlsrv_query($conn, $sql);
        while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
      ?>
      <tr>
        <td><?php echo $row['ID_NAVE']; ?></td>
        <td><?php echo $row['MATRICULA']; ?></td>
        <td><?php echo $row['NOMBRE_NAVE']; ?></td>
        <td><?php echo $row['MODELO']; ?></td>
        <td><?php echo $row['CAPACIDAD_TRIPULACION']; ?></td>
        <td><?php echo $row['CAPACIDAD_CARGA']; ?></td>
        
        <td>
          <a  href="edit_naves.php?id_nave=<?php echo $row['ID_NAVE'] ?>">
            <i class="fas fa-pencil-alt"></i>
        </a>
        <a href="delete_naves.php?id_nave=<?php echo $row['ID_NAVE'] ?>">
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
        <label for="update_modelo">Modelo:</label>
        <input type="text" id="update_modelo" name="update_modelo" required>
      </div>
      <div class="form-group">
        <label for="update_fabricante">Fabricante:</label>
        <input type="text" id="update_fabricante" name="update_fabricante" required>
      </div>
      <div class="form-group">
        <label for="update_capacidad">Capacidad de Tripulantes:</label>
        <input type="number" id="update_capacidad" name="update_capacidad" required>
      </div>
      <div class="form-group">
        <label for="update_carga">Capacidad de Carga:</label>
        <input type="number" id="update_carga" name="update_carga" required>
      </div>
      <div class="form-group">
        <label for="update_descripcion">Descripción:</label>
        <textarea id="update_descripcion" name="update_descripcion" required></textarea>
      </div>
      <button type="button" id="confirmUpdate">Actualizar</button>
      <button type="button" id="cancelUpdate">Cancelar</button>
    </form>
  </div>
     
 
  <script src='https://unpkg.com/akar-icons-fonts'></script>
  <script src="./script.js"></script>
</body>

</html>
