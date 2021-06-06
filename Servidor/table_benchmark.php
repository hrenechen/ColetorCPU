<?php
include_once "conect_server.php";
$db = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
@$db ->set_charset('utf8');
$sql = mysqli_query($db,"SELECT  nome, benchmark
FROM benchmark
");
while($row = mysqli_fetch_array($sql)){
     echo("<tr>");
     echo("<td style='text-align: center'>");
     echo $row["nome"];
     echo("</td>");
     echo("<td style='text-align: center'>");
     echo $row["benchmark"];
     echo("</td>");
     echo("</tr>");
}
mysqli_close($db);
?>