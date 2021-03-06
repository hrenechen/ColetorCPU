<!DOCTYPE HTML>
<meta http-equiv="Content-Language" content="pt-br">
<HTML ng-app lang="pt-br">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta charset="utf-8">
<!-- CSS -->
<link href="css/estilo.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<!-- Javascript -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
<head>
<title>Benchmark</title>
</head>
<body>
<form>
<?php 
 include_once "menu.php";
 include_once "conect_server.php";
?>
<div class="container">
<h3 class='titulo .font-weight-bolder'>
Tabela de Benchmark
</h3>
</div>
<br><br>
  <div class="container">
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th class="text-center">Processador</th>
        <th class="text-center">Benchmark</th>
      </tr>
    </thead>
   <tbody>
    <?php
    include_once "table_benchmark.php";
    ?>
   </tbody>
   </table>
    </div>
</form>    
</body>
</html> 