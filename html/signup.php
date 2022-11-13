<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>WellFitted Diving Gear's Login</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/signup.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,400;0,700;1,900&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Six+Caps&display=swap" rel="stylesheet">
</head>
<body>
<div class="header">
  <div class="container">
    <div class="navbar">
      <div class="logo">
        <img src="../Captura de pantalla 2022-11-06 a las 13.14.06.png" width="150px">
      </div>
      <nav>
        <ul>
          <li><a href="indexOriginalhtml.php#home">Home</a></li>
          <li><a href="indexOriginalhtml.php#categorias">Categorías</a></li>
          <li><a href="productos.php">Productos</a></li>
          <li><a href="login.php">Log In</a></li>
        </ul>
      </nav>
    </div> <!--Final de navbar-->
    <!--<hr>-->
    <div class="fila">
      <div class="col-2">
        <h1>Nuestro deseo</h1>
        <p>Únete a nuestras filas, consigue créditos para ahorrar en tus próximas compras mientras
          te conviertes en
          todo un SeaDog.</p>

        <form class="form">

          <div class="grupo_form">
            <label for="nombre">Nombre</label>
            <input type="text" required name="nombre" id="nombre">
          </div> <!--Fin contenedor nombre-->

          <div class="grupo_form">
            <label for="apellidos">Apellidos</label>
            <input type="text" required name="apellidos" id="apellidos">
          </div>  <!--Fin contenedor apellidos-->

          <div class="grupo_form">
            <label for="email">Email</label>
            <input type="email" required name="email" id="email">
          </div>  <!--Fin contenedor email-->

          <div class="grupo_form">
            <label for="direccion">Dirección</label>
            <input type="text" maxlength="30" required name="direccion" id="direccion">
          </div>  <!--Fin contenedor dirección-->

          <div class="grupo_form">
            <label for="localidad">Localidad</label>
            <input type="text" maxlength="30" required name="localidad" id="localidad">
          </div>  <!--Fin contenedor localidad-->

          <div class="grupo_form">
            <label for="codPost">Código Postal</label>
            <input type="text" pattern="[0-9]*" maxlength="5" required name="codPost" id="codPost">
          </div>  <!--Fin contenedor código postal-->

          <div class="grupo_form">
            <label for="psswd">Contraseña</label>
            <input type="password" required name="psswd" id="psswd">
          </div>  <!--Fin contenedor password-->

          <!--<div class="grupo_form">
            <label for="psswdConf">ContraseñaConf</label>
            <input type="password" required name="psswdConf" id="psswdConf">
          </div>  &lt;!&ndash;Fin contenedor passwordConf&ndash;&gt;-->

          <button type="submit">Sign Up</button>

          <p id="crearcuenta">Accedo a los servicios y condiciones a los que tengo acceso mediante <a href="#">Servicios</a> y <a
                  href="#">Condiciones</a></p>
          <br>
        </form> <!--Final de form-->
      </div> <!--Final de col-2-->
    </div><!--Final de fila-->
  </div> <!--Final de container-->
</div> <!--Final de header-->
</body>
</html>



<!--HAY QUE MODIFICAR LOS CAMPOS DE LOS FORMULARIOS DE SIGNUP Y LOGIN PARA SEGUIR LAS DIRECTIVAS DEL PDF DE LA
PRÁCTICA 1, PÁGINA 13-->