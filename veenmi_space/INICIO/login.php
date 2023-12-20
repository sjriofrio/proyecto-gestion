<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Acceder</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .login-container {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      width: 300px;
    }

    h2 {
      text-align: center;
      color: #333;
    }

    label {
      display: block;
      margin: 10px 0 5px;
      color: #555;
    }

    input {
      width: 100%;
      padding: 8px;
      margin-bottom: 15px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    button {
      width: 30%;
      padding: 10px;
      background-color: #127ff3;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      
    }

    button:hover {
      background-color: rgb(11, 244, 236);
    }

    .register-link {
      text-align: center;
      margin-top: 15px;
    }

    .register-link a {
      color: #007bff;
      text-decoration: none;
    }

    .register-link a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Veenmi Space</h2>
    <form action="index.php" method="get">
      <label for="username">Usuario:</label>
      <input type="text" id="username" name="username" required>

      <label for="password">Contraseña:</label>
      <input type="password" id="password" name="password" required>

      <button type="submit">Acceder</button>
      
    </form>
  </div>
</body>
</html>



