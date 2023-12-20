<?php
    include("conexion.php");

  ?>
  <?php include 'aside.php' ?>

<body>

   
    <div class="formulario_Registro_Astronauta">
      <h3>Registro de ASTRONAUTAS</h3>

      <form id="registroAstroForm" action="../ASTRONAUTAS/guardar.php" method="post">
        <div class="form-group">
          <label for="nombre">Cedula:</label>
          <input type="text" id="CEDULA" name="CEDULA" required>
      </div>

        <div class="form-group">
          <label for="modelo">Nombre:</label>
          <input type="text" id="NOMBRE" name="NOMBRE" required>
        </div>

        <div class="form-group">
          <label for="fabricante">Edad:</label>
          <input type="text" id="EDAD" name="EDAD" required>
        </div>

        <div class="form-group">
          <label for="capacidad">Cargo:</label>
          <input type="text" id="CARGO" name="CARGO" required>
        </div>

        <div class="form-group">
          <label for="carga">Celular:</label>
          <input type="text" id="CELULAR" name="CELULAR" required>
        </div>

        <button type="submit">Registrar Astronautas</button>

      </form>

  </div>


  <table id="naveTable">
    <thead>
      <tr>
        <th>ID_TRIPULANTE</th>
        <th>CEDULA</th>
        <th>NOMBRE</th>
        <th>EDAD</th>
        <th>CARGO</th>
        <th>CELULAR</th>
        
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php
         $sql = "SELECT * FROM ASTRONAUTAS";
         $result = sqlsrv_query($conn, $sql);
        while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
      ?>
      <tr>
        <td><?php echo $row['ID_TRIPULANTE']; ?></td>
        <td><?php echo $row['CEDULA']; ?></td>
        <td><?php echo $row['NOMBRE']; ?></td>
        <td><?php echo $row['EDAD']; ?></td>
        <td><?php echo $row['CARGO']; ?></td>
        <td><?php echo $row['CELULAR']; ?></td>
      
        
        <td>
          <a  href="edit_astro.php?id_tripulante=<?php echo $row['ID_TRIPULANTE'] ?>">
            <i class="fas fa-pencil-alt"></i>
        </a>
        <a href="delete.astro.php?id_tripulante=<?php echo $row['ID_TRIPULANTE'] ?>">
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
