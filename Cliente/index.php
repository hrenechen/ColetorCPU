<!DOCTYPE HTML>
<meta http-equiv="Content-Language" content="pt-br">
<HTML ng-app lang="pt-br">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta charset="utf-8">
<!-- CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<!-- Javascript -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
<head>
<title>Coletor</title>
</head>
<body>
<?php 
 include_once "menu.php";
 ?>
<form>
<div class="container">
<div class='titulo'>
<b class='text-primary'>Informações </b>
</div>
</div>
  <div class="container">
 <?php 
 include_once "conect.php";
 include_once "getServerLoad.php";
 include_once "getMacAdress.php";
 include_once "generateMME.php";
 include_once "generateMAPE.php";
 include_once "generateMediaTransmissao.php";
    #criando o array com 15 previsões.
    $arr = array();
    for ($i=0; $i < 15 ; $i++) { 
    $cpuLoad = getServerLoad();
    $arr[]= $cpuLoad;
    }
    echo('<br><b>Data: </b>');
    $agora = date('d/m/Y');
    echo $agora;
    echo ('&nbsp&nbsp&nbsp&nbsp&nbsp');
    echo ('| |');
    echo ('&nbsp&nbsp&nbsp&nbsp&nbsp');
    echo ('<b>MAC: </b>');
    echo GetMAC(); 
    $dados = array($agora , $cpuLoad);
echo ('<br>');
$MME =array();
$MME = MediaMovelExp( $arr , 2 );
$MAPE = MAPE($arr, $MME);
echo ('<br>');
echo ('<br><b>MME: </b>');
print_r($MME);
echo ('<br>');
echo ('<br><b>Array Original: </b>');
print_r($arr);
echo ('<br>');
echo ('<br>');
echo('<b>MAPE: </b>');
print_r($MAPE);
echo ('<br>');
echo ('<br>');
$valor_transmissao = MediaTransmissao($MME);
echo('<b>Valor Media Transmissão: </b>');
print_r($valor_transmissao);
?>
    </div>
</form>    
</body>
</html> 