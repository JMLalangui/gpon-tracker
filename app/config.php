<?php
//VARIABLES GLOBALES PARA CONEXION A LA BASE DE DATOS
define('SERVIDOR','localhost');
define('USUARIO','root');
define('PASSWORD','');
define('BD','gpon');
//VARIABLES GLOBALES PARA CONEXION A LA BASE DE DATOS

//VARIABLE DONDE SE CONTIENE A LA RUTA PARA AHORRAR CODIGO Y CONFIGURACION EN EL FUTURO
$URL = "http://localhost/gpon-tracker/";

//CONFIGURACION PARA OBTENER LA FECHA Y HORA REFERENTE A NUESTRO PAIS
date_default_timezone_set("America/Bogota");
$fechaHora = date('Y-m-d H:i:s');


//CONEXION A LA BASE DE DATOS TODO SE CONTIENE EN LA VARIABLE $pdo
$servidor = "mysql:dbname".BD.";host".SERVIDOR;
try{
    $pdo = new PDO($servidor, USUARIO, PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
}catch (PDOException $e){
    print_r($e);
}




?>