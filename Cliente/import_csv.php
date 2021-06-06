<?php
include_once "conect.php";
$db = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
@$db ->set_charset('utf8');
$csv = fopen("benchmark.csv", "r");

$query0 = 'CREATE TABLE IF NOT EXISTS benchmark(id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
nome varchar(40),
benchmark int(8)
)';
mysqli_query($db,$query0) or die("Algo deu errado");

while (($row = fgetcsv($csv, 1000 , ";")) !== FALSE)
{
        $query = 'INSERT INTO `benchmark`(`nome`, `benchmark`) VALUES ("'.$row[0].'","'.$row[1].'")';
        mysqli_query($db,$query) or die("Algo deu errado");
}
fclose($csv);
header('Location: index.php#Modal1');   
?>