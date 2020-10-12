<!DOCTYPE html>
<html lang="es">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Iniciar Sesion</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.0/css/bulma.min.css">
     <link rel="stylesheet" href="StyleGuardería.css">

     <style>
        .hero {
	        background: black url(img/Completo.png) center / cover;
        }

        @media (max-width: 800px) {
            .hero { background: black url(img/tablet.jpg) center / cover; 
        }}
        @media (max-width:  360px) {
            .hero { background: black url(img/phone.jpg) center / cover; 
        }}
    </style>
</head>
<body>
    <div class="container">
          <div class="form-box">
              <br><br><br><br>
              <a href="Guardería.php" class="button">Ir a página</a>
              <br><br><br><br>
              <h1 id="Title">Guardería de Yadhira</h1><br>

              <a class="EnReg" href="Index.php">Entrar</a>
              <a class="EnReg" href="Servicios2.php">Registrarme</a>
              <br><br><br>

              <div class="form">
                    <form method="POST">
                         <input class="divisor" type="text" name="correo" placeholder="Dirección de email" required><br><br>
                         <input class="divisor" type="text" name="contraseña" placeholder="Contraseña" required><br><br><br><br><br>
                         <a href="Pagina.php">Ingresar</a>
                    </form>
               </div>
          </div>
     </div>
</body>
</html>