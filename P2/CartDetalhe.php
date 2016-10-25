<?php
require("../restritos.php"); 
require_once '../init.php';
$PDO = db_connect();
require_once '../QueryUser.php';
$NumeroREP = $_GET['ID']; 
$DadosREP = $PDO->prepare("SELECT * FROM cadastro_cartografico WHERE NumSerie='$NumeroREP'");
$DadosREP->execute();
$QryREP = $DadosREP->fetch();
$Modelo = $QryREP['Modelo'];
$DataCadastro = $QryREP['DataCadastro'];
$HoraCadastro = $QryREP['HoraCadastro'];
$DataLiberado = $QryREP['DataLibera'];
$HoraLiberado = $QryREP['HoraLibera'];
$RespTeste = $QryREP['UserCadastro'];
$RespReteste = $QryREP['UserLibera'];
$Status = $QryREP['Status'];
$Descricao = $QryREP['Obs'];
$DataHoje = date("Y/m/d H:i:s");



//CONCATENANDO DATA DE MONTAGEM COM HORA DE MONTAGEM
$DataMontagem = $DataCadastro . ' ' . $HoraCadastro;

//CONCATENANDO DATA DE LIBERAÇÃO COM HORA DE LIBERAÇÃO
$Liberado = $DataLiberado . ' ' . $HoraLiberado;
$Imprime = "C[4[" . $NumeroREP . "[" . $DataLiberado . "[" . $Modelo;


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>LiberaREP - Henry Equipamentos e Sistemas</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
</head>
<body class="hold-transition skin-blue layout-top-nav">
 <div class="wrapper">
  <header class="main-header">
   <nav class="navbar navbar-static-top">
    <div class="container">
     <div class="navbar-header">
      <span class="logo-lg"><img src="../dist/img/logo/henry-logo-branco.png" width="200"></span>
     </div>
     <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
       <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <span class="hidden-xs">Olá, <?php echo $NomeUserLogado; ?></span></a>
       </li>
      </ul>
     </div>
    </div>
   </nav>
  </header>
  <div class="content-wrapper">
   <div class="container">
    <section class="content">
     <div class="box box-default">
     <div class="box-header with-border">
      <div class="col-xs-12">
       <h2 class="page-header">
        LIBERAÇÃO DE EQUIPAMENTO. Nr.: </strong><?php echo $NumeroREP; ?>
        <small class="pull-right">
          <form name="cadastrar_anuncio" id="name" method="post" action="" enctype="multipart/form-data">
           <input name="enviar" type="submit" class="btn btn-default btn-block" id="enviar" value="Imprimir Etiqueta">
         </form>
      <?php 
      if(@$_POST["enviar"]){
      $port = 3000;
      $socket = socket_create(AF_INET, SOCK_STREAM, 0) or die($M000);
      socket_set_option($socket, SOL_SOCKET, SO_RCVTIMEO, array('sec' => 1, 'usec' => 0));
      socket_set_option($socket, SOL_SOCKET, SO_SNDTIMEO, array('sec' => 1, 'usec' => 0));
       $result = socket_connect($socket, $IPImpressora, $port) or die($M001);
        socket_write($socket, $Imprime, strlen($Imprime)) or die($M002);
       $msg1 = socket_read($socket,8192);
       socket_close($socket);
          echo '<script type="text/javascript">alert("TICKET IMPRESSO COM SUCESSO");</script>';
          }
          else{
          }
      ?>
        </small>
       </h2>
      </div>
     </div>
     <div class="box-body">
      <div class="col-xs-6">
       <li class="list-group-item">
        <b>Modelo:</b> 
        <a class="pull-right"><strong><code><?php echo $Modelo; ?></code></strong></i></a>
       </li>
       <li class="list-group-item">
        <b>Montagem:</b> 
        <a class="pull-right"><strong><code><?php echo $DataMontagem; ?></code></strong></i></a>
       </li>
       <li class="list-group-item">
        <b>Resp. Teste:</b> 
        <a class="pull-right"><strong><code><?php echo $RespTeste; ?></code></strong></i></a>
       </li>
      </div>
      <div class="col-xs-6">
       <li class="list-group-item">
        <b>Resp. Reteste:</b> 
        <a class="pull-right"><strong><code><?php echo $RespReteste; ?></code></strong></i></a>
       </li>
       <li class="list-group-item">
        <b>Data Liberado:</b>
        <a class="pull-right"><strong><code><?php echo $DataLiberado; ?> </code></strong></a>
       </li>
       <li class="list-group-item">
        <b>Data Liberado:</b>
        <a class="pull-right"><strong><code><?php echo $HoraLiberado; ?> </code></strong></a>
       </li>
       </div>
      <div>
     <div class="col-xs-12"> 
      <h4>HISTÓRICO DE CORREÇÕES DO EQUIPAMENTO</h4>
     </div>
      <div class="col-xs-12">
       <li class="list-group-item">
        <?php echo $Descricao; ?>
      </li>
      </div>
      </div>
      </div>
     </div>


    </section>
  </div>
 </div>
<?php 
include_once '../footer.php'; ?>
</div>
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="../dist/js/app.min.js"></script>
</body>
</html>
