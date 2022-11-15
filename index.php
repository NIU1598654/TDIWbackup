<?php
$action = $_GET['action'] ?? null;
switch ($action){
    case 'productos':
        require __DIR__.'resource_listar_productos.php';
        break;
    case 'detalles':
        require __DIR__.'resource_detalle_producto.php';
        break;
    case 'login':
        require __DIR__.'resource_login.php';
        //Podríamos poner un control por si hemos conectado antes, que nos muestre otros datos.
        break;
    case 'signup':
        require __DIR__.'resource_registroSignUp.php';
        break;
    case 'categorias':
        require __DIR__.'resource_listar_categorias.php';
        break;
    case 'inicio':
        require __DIR__.'resource_inicio.php';
        break;
}