<?php 
 include_once "conect.php";
 include_once "getServerLoad.php";
 include_once "getMacAdress.php";
 include_once "generateMME.php";
 include_once "generateMAPE.php";
 include_once "generateMediaTransmissao.php";
 $db = mysqli_connect($db_host, $db_user, $db_pass, $db_name); 
 @$db ->set_charset('utf8'); 
 date_default_timezone_set('America/Sao_Paulo');
    #criando o array com 15 previsões.
    $arr = array();
    for ($i=0; $i < 15 ; $i++) { 
    $cpuLoad = getServerLoad();
    $arr[]= $cpuLoad;
    }
    $agora = date('d/m/y');
    $hora = date('H:i:s');
    $mac = GetMAC(); 
$MME =array();
$MME = MediaMovelExp( $arr , 2 );
$MAPE = MAPE($arr, $MME);
$valor_transmissao = MediaTransmissao($MME);
   $value1 = 'SELECT COUNT(id) AS contador FROM computador_cliente WHERE mac=';
   $value2 = ($value1."'".$mac."';");
$sql00 = mysqli_query($db,$value2);
while($row00 = mysqli_fetch_array($sql00)) {
    $contador = $row00['contador'];
}
if ($contador == 0) {
    echo 'Cadastrar computador';
}else{
    $value3 = 'SELECT id FROM computador_cliente WHERE mac=';
    $value4 = ($value3."'".$mac."';");    
$sql0 = mysqli_query($db, $value4);
while($row0 = mysqli_fetch_array($sql0)) {
    $id = $row0['id'];
}
$sql = 'CREATE TABLE IF NOT EXISTS  serie'.$id.'(id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
fk int(11),
dt varchar(8),
hora varchar(8),
serie int(4)
);'; 
mysqli_query($db,$sql) or die("Algo deu errado cod:44");
$sql1 = 'INSERT INTO serie'.$id.'(fk, dt, hora, serie)
VALUES ("'.$id.'","'.$agora.'","'.$hora.'","'.$valor_transmissao.'")';
mysqli_query($db,$sql1) or die("Algo deu errado cod:47");
}
header('Refresh:0 ; url=script.php'); 
?>