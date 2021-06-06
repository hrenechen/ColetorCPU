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
<title>Cadastro da máquina</title>
</head>
<body>
<?php 
 include_once "menu.php";
 include_once "getMacAdress.php";
 ?>
 <form class="form-general" action="save_cadastro_maquina.php" method="post" enctype="multipart/form-data"> 
          <div class="container">
          <div class="row">
          <div class="col">
          <label for="nome" class="col-form-label"> Nome do Computador: </label>
          </div>
          <div class="col">
          <input type="text" class="form-control-sm" value="<?php echo getenv('COMPUTERNAME'); ?>" size="20" maxlength="20" id="nome" name="nome" required>
          </div>
          </div>
          <br>
          <div class="row">
          <div class="col">
          <label for="mac" class="col-form-label"> MAC: </label>
          </div>
          <div class="col">
          <input type="text" class="form-control-sm" value="<?php echo GetMAC(); ?>"  size="17" maxlength="17" id="mac" name="mac">
          </div> 
          </div>
          <br>
          <div class="row">
          <div class="col">
          <label for="benchmark" class="col-form-label"> Benchmark: </label>
          </div>
          <div class="col">
          <input type="text" class="form-control-sm"  size="8" maxlength="8" id="benchmark" name="benchmark"  pattern="[0-9]+" title="Somente números" required>
          </div> 
          </div>
          <br>
          </div>
          <div class="modal-footer">
            <button  type="submit" class="btn btn-primary" >Cadastrar</button>   
          </div>
</form>          
</body>
</html> 