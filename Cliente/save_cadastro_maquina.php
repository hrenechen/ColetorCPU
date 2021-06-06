<?php
# conexão com o banco
  include_once "conect.php";
  $db = mysqli_connect($db_host, $db_user, $db_pass, $db_name); 
  @$db ->set_charset('utf8'); 
  @$nome = $_POST['nome'];
  @$mac = $_POST['mac'];
  @$benchmark = $_POST['benchmark'];
  $sql0 = mysqli_query($db,"SELECT COUNT(id) AS numreg FROM computador_cliente WHERE mac='$mac' or nome='$nome'");
while($row0 = mysqli_fetch_array($sql0)) {
    $valor = $row0['numreg'];
}
if ($valor == 0){
  $sql = "INSERT INTO computador_cliente (nome,mac,benchmark) 
  VALUES 
  ('$nome','$mac','$benchmark')";
  mysqli_query($db,$sql) or die("Algo deu errado");
}
  header('Location: index.php');  
  ?>