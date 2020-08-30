<?php

ob_start();

session_start();
//session_destroy();

defined("DS") ? null : define ("DS",DIRECTORY_SEPARATOR);

defined("TEMPLATE_FRONT") ? null : define ("TEMPLATE_FRONT",__DIR__.DS."templates".DS."front");
defined("TEMPLATE_BACK") ? null : define ("TEMPLATE_BACK",__DIR__.DS."templates".DS."back");


defined("DB_HOST") ? null : define ("DB_HOST","localhost");
defined("DB_USER") ? null : define ("DB_USER","root");
defined("DB_PASSWORD") ? null : define ("DB_PASSWORD","");
defined("DB_NAME") ? null : define ("DB_NAME","ecom_page");

$conexion = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("error1");
            @mysqli_select_db($conexion, DB_NAME) or die ("BASE");

require_once("functions.php");

if($_SERVER['PHP_SELF']!= "/PAGINA/public/admin/index.php")
{
    require_once("carrito.php"); 
}


?>