<?php
/* Informa o nível dos erros que serão exibidos */
error_reporting(E_ALL);
/* Habilita a exibição de erros */
ini_set("display_errors", 1);
//Nome do servidor
 @$db_host = "localhost";
//Usuário do banco
 @$db_user = "root";
//Senha do banco
 @$db_pass = "";
//Nome do banco (database)
 @$db_name = "coletor";
//Passagem de parametros
 @$db = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!@$db) { 
 echo ("<p>Banco desconectado<p/>");
}else{
 mysqli_close(@$db);     
 }
?>