<?php
include_once "regra_tres.php";
include_once "conect_server.php";
$db = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
@$db ->set_charset('utf8');
# calculo do Bechmark
$agora = date('d/m/Y');
$hora = date('H:i:s');
$sqltotalbenchmark = mysqli_query($db,"SELECT  id, benchmark 
FROM computador_cliente ORDER BY benchmark DESC LIMIT 1
");
while($rowtotalbenchmark = mysqli_fetch_array($sqltotalbenchmark)) {
$totalbenchmark = $rowtotalbenchmark['benchmark'];
$valorbenchmark = regra_de_tres_simples($totalbenchmark,$totalbenchmark);
echo $valorbenchmark;
}
# contagem de tabelas: 
$sql = mysqli_query($db,"SELECT  id, benchmark 
FROM computador_cliente
");
while($row = mysqli_fetch_array($sql)) {
    $id = $row['id']; 
    $pbenchmark = $row['benchmark'];
    $var1 = 'SELECT dt, hora, serie FROM serie';
    $var2 =$id;
    $var3 ='WHERE dt = ';
    $var4 =$agora;
    $var5 = 'ORDER BY id DESC LIMIT 10'; 
    $sql1 = $var1.$var2.$var3.$var4.$var5;
    echo $sql1;
    while($row1 = mysqli_fetch_array($sql1)) {
        $vbenchmark = regra_de_tres_simples($pbenchmark,$totalbenchmark); 
        echo $vbenchmark;
}}

header('Refresh:2222'); 
?>