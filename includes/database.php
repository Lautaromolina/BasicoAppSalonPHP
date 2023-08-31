<?php

$db = mysqli_connect('localhost', 'root', 'root','appsalon');

if(!$db) {
 echo "Conexion incorrecta";
 exit;
}