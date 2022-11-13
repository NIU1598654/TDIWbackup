<?php
class conexion{
    public function __construct()
    {
        $con = pg_connect("host=127.0.0.1 port=5432 dbname=tdiw-k7 user=tdiw-k7 password=vH1Pmnp5");
    }
    if(!$con){
            echo 'No se ha realizado la conexión';
    }
}