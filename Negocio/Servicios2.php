<!DOCTYPE html>
<html lang="es">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Registrarse</title>
     <link rel="stylesheet" href="StyleGuardería.css">
</head>
<body>
    <div class="container">
          <div class="form-box">
              <br><br><br><br>
              <a href="Guardería.php" class="button">Ir a página</a>
              <br><br><br><br>
              <h1 id="Title">Guardería de Yadhira</h1><br>

              <a class="EnReg" href="Index.php">Entrar</a>
              <a class="EnReg" href="hServicios2.php">Registrarme</a>
              <br><br><br>

              <div class="form">
                <form method="POST" action="server.php">
                    <input class="divisor" type="text" name="usuario" placeholder="Nombre" required><br><br>
                    <input class="divisor" type="text" name="correo" placeholder="Dirección de email" required><br><br>
                    <input class="divisor" type="contraseña" name="contraseña" placeholder="Contraseña" required>
                    <input class="envio" name="Registrar" type="submit" value="Registrar">
                </form>
          </div>
          </div>
     </div>
</body>
</html>