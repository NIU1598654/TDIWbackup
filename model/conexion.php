<?php
function conexion(){
    $con = pg_connect("host=127.0.0.1 port=5432 dbname=tdiw-k7 user=tdiw-k7 password=vH1Pmnp5");
    if($con){
        echo "exito";
    } else{
        echo "error".pg_last_error();
    }
}
/*echo conexion();Podemos comprobar que la conexión se ha realizado correctamente con este print*/
?>