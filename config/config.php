<?php

$connection = new mysqli('localhost', 'root', '', 'sistema_facturacion');

if ($connection === false) {
    die('Error: No se pudo conectar. ' . $connection->connect_error);
}

echo 'Conexion exitosa. ' . $connection->host_info;

?>