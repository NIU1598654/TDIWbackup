<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WellFitted Diving Gear's Login</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/signup.css">
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
                <img src="../Logo.png" width="150px">
            </div>
            <nav>
                <ul>
                    <li><a href="inicio.php#home">Home</a></li>
                    <li><a href="listar_categorias.php">Categorías</a></li>
                    <li><a href="listar_productos_categoria.php">Productos</a></li>
                    <li><a href="registroSignUp.php">Sign Up</a></li>
                </ul>
            </nav>
        </div> <!--Final de navbar-->
        <!--<hr>-->
        <div class="fila">
            <div class="col-2">
                <h1>Bienvenido Diver!</h1>
                <p>Inicia sesión para acceder a tus datos de compra, créditos acumulados y para darnos feedback de
                    lo que te gustaría que mejoremos en la tienda.</p>
                <form class="form" method="post">
                    <div class="grupo_form">
                        <label for="email">Email</label>
                        <input type="email" required name="email" id="email">
                    </div>  <!--Fin contenedor email-->

                    <div class="grupo_form">
                        <label for="psswd">Contraseña</label>
                        <input type="password" required name="psswd" id="psswd">
                    </div>  <!--Fin contenedor password-->

                    <button type="submit">Log In</button>
                    <p id="crearcuenta">Aún no tengo cuenta <a href="registroSignUp.php">Crear cuenta</a></p>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                </form> <!--Final de form-->
            </div> <!--Final de col-2-->
        </div><!--Final de fila-->
    </div> <!--Final de container-->
</div> <!--Final de header-->
</body>
</html>