<?php
include_once "regra_tres.php";
include_once "conect_server.php";
$db = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
@$db ->set_charset('utf8');
date_default_timezone_set('America/Sao_Paulo');
# calculo do Bechmark
$agora = date('d/m/y');
$hora = date('H:i:s');
$sqltotalbenchmark = mysqli_query($db,"SELECT  id, benchmark 
FROM computador_cliente ORDER BY benchmark DESC LIMIT 1
");
while($rowtotalbenchmark = mysqli_fetch_array($sqltotalbenchmark)) {
$totalbenchmark = $rowtotalbenchmark['benchmark'];
$valorbenchmark = regra_de_tres_simples($totalbenchmark,$totalbenchmark);
}
echo 'Verificação presente <br>';
echo '<br>';
# contagem de tabelas: 
$sql = mysqli_query($db,"SELECT  id, benchmark 
FROM computador_cliente
");
while($row = mysqli_fetch_array($sql)) {
    $id = $row['id']; 
    $pbenchmark = $row['benchmark'];
    $var1 = 'SELECT dt, hora, serie FROM serie';
    $var2 =$id;
    $var3 =' WHERE dt = "';
    $var4 =$agora;
    $var5 = '" ORDER BY id DESC LIMIT 1;'; 
    $sql1 = $var1.$var2.$var3.$var4.$var5;
    $sql1 = mysqli_query($db, $sql1);
    while($row1 = mysqli_fetch_array($sql1)) {
        $vbenchmark = regra_de_tres_simples($pbenchmark,$totalbenchmark); 
        echo ("CPU percentual computador: ".$id." Data/Hora: ".$row1['dt']." - ".$row1['hora']." CPU ".$row1['serie']."%. Benchmark: ");
        echo round($vbenchmark,0);
        echo ('<br>');
} 
}
echo '<br>';
echo 'Metricas de analise <br>';
echo '<br>';
# contagem de tabelas: 
$sql = mysqli_query($db,"SELECT  id, benchmark 
FROM computador_cliente
");
while($row = mysqli_fetch_array($sql)) {
    $id = $row['id']; 
    $pbenchmark = $row['benchmark'];
    $var1 = 'SELECT dt, hora, serie FROM serie';
    $var2 =$id;
    $var3 =' WHERE dt = "';
    $var4 =$agora;
    $var5 = '" ORDER BY id DESC LIMIT 5;'; 
    $sql1 = $var1.$var2.$var3.$var4.$var5;
    $sql1 = mysqli_query($db, $sql1);
    while($row1 = mysqli_fetch_array($sql1)) {
        echo ("<div style='float:left;position: relative;padding-right: 15px;padding-left: 15px;display:block; '>");
        echo ("Computador: ".$id." CPU ");
        if ($row1['serie'] > 80) {
            echo ("<label style='color:red'>");
            echo ($row1['serie']."%");
            echo ("</label>");
        }elseif ($row1['serie'] > 40) {
            echo ("<label style='color:green'>");
            echo ($row1['serie']."%");
            echo ("</label>");
        }else {
            echo ("<label style='color:blue;'>");
            echo ($row1['serie']."%");
            echo ("</label>");
        }
        echo ('<br>');
        echo ('</div>');
} 
}
echo "<meta HTTP-EQUIV='refresh' CONTENT='0'>";
?>