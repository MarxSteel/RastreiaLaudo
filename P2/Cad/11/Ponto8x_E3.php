<?php
require("../../../restritos.php");
require_once '../../../init.php';
$PDO = db_connect();
 $query = $PDO->prepare("SELECT * FROM login WHERE login='$login'");
 $query->execute();
  $row = $query->fetch();
  $MetaPrevista = $row['MetaPrevista'];
  $Distrito = $row['MetaRealizada'];
  $Nick = $row['Nome'];
  $PermMontagem = $row['P2Montagem'];
  $Valida = $_GET['Sec'];
  $MeuIP = $row['MeuIP'];
  $Mifare = $row['CMif'];
  $Abatrack = $row['CAba'];
  $Wiegand =  $row['CWieg'];
  //DECLARANDO ENVIO DE COLABORADOR NA MATRICULA 1
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>LiberaREP - Henry Equipamentos e Sistemas</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../../../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../../../dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../../../dist/css/skins/_all-skins.min.css">
</head>
<body class="hold-transition skin-blue layout-top-nav">
 <div class="wrapper">
  <header class="main-header">
   <nav class="navbar navbar-static-top">
    <div class="container">
     <div class="navbar-header">
      <span class="logo-lg"><img src="../../../dist/img/logo/henry-top.png" width="200"></span>
     </div>
     <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
       <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <span class="hidden-xs">Olá, <?php echo $Nick; ?></span></a>
       </li>
      </ul>
     </div>
    </div>
   </nav>
  </header>
  <div class="content-wrapper">
   <div class="container">
    <section class="content-header">
     <ol class="breadcrumb">
      <li>CADASTRO DE EQUIPAMENTO: PRIMME PONTO 8X</li>
     </ol>
    </section>
    <?php
    if ($Valida == '1123') {
      echo '<section class="content">';
      echo '<div class="box box-default">';
      echo '<div class="box-header with-border">';
      echo '<h2 class="box-title"><strong> PASSO 2: </strong>ENVIO DE CARTÕES</h2>';
      echo '</div>';
      echo '<div class="box-body">';
      echo '<h3 class="page-title">Cadastro de Referência</h3>';
      ?>
      <div class="col-xs-3">
       <a data-toggle="modal" data-target="#EnviaBio">
        <span class="btn btn-info btn-block btn-md">
          <h4>BIO/BARRAS</h4>
        </span>
       </a>
      </div>
      <div class="col-xs-3">
       <a data-toggle="modal" data-target="#EnviaProx">
        <span class="btn bg-red btn-block btn-md">
          <h4>PROXIMIDADE</h4>
        </span>
       </a>
      </div>
      <div class="col-xs-3">
       <a data-toggle="modal" data-target="#ESmart">
        <span class="btn bg-green btn-block btn-md">
          <h4>SMARTCARD</h4>
        </span>
       </a>
      </div>
      <div class="col-xs-3">
       <a data-toggle="modal" data-target="#Card">
        <span class="btn bg-purple btn-block btn-md">
          <h4>DIGITAR CARTÃO</h4>
        </span>
       </a>
      </div>
      <div class="col-xs-12"><br /><br /><br />
       <a class="btn btn-success btn-block btn-flat" href="Ponto8X_E4.php?Sec=1123">Próximo passo</a>
      </div>
<!-- INICIO MODAL DE CADASTRO DE BIO/BARRAS -->
<div clss="main-box-body clearfix">
 <div class="modal fade" id="EnviaBio" tabindex"-1" role="dialog" aria-abeledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
   <div class="modal-content">
    <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><code>&times;</code></span></button>
      <h4 class="modal-title">Envio de Matrícula<strong><code>Biometria + Barras</code></strong></h4>
    </div>
    <div class="box-body">
    <div class="col-xs-6">
    Colaborador: <br />
    PIS: <br />
    Matricula 1: <br />
    Matricula 2: <br />
    </div>
    <div class="col-xs-6">
    HENRY TESTE <br />
    <code>
     900000000023
     <br />001 
     <br />002</code>
    </div>
    <div class="col-xs-12">
     <form name="EBio" id="EBio" method="post" action="" enctype="multipart/form-data">
      <div class='col-xs-12'><br /><br />
       <input name="EBio" type="submit" class="btn btn-danger btn-block btn-lg" id="EBio" value="Enviar Referências de Biometria/Barras" />
      </div>
     </form>
     <?php
     if(@$_POST["EBio"]){
      $cod_msg = "03+EU+00+1+I[900000000023[TESTE DE FABRICA 01[0[2[1}2";
      $cod_asc = gerar($cod_msg);
      $gera_asc = str_replace(" ","",$cod_asc);
      $port    = 3000;
      $msg = hex2str($gera_asc);
      $socket = socket_create(AF_INET, SOCK_STREAM, 0) or die("Could not create socket\n");
      socket_set_option($socket, SOL_SOCKET, SO_RCVTIMEO, array('sec' => 1, 'usec' => 0));
      socket_set_option($socket, SOL_SOCKET, SO_SNDTIMEO, array('sec' => 1, 'usec' => 0));
      $result = socket_connect($socket, $MeuIP, $port) or die($M006);
      socket_write($socket, $msg, strlen($msg)) or die($M002);
      $msg1 = socket_read($socket,8192);
      socket_close($socket);
      if ($msg1 == "03+EU+00") {
       echo '<script type="text/JavaScript">alert("Cadastrado com Sucesso");</script>';      
      }
      elseif ($msg1 <> "03+EU+00") {
       echo '<script type="text/JavaScript">alert("Cadastrado com Sucesso");</script>';      
      }
     }
    ?>
    </div>
    </div>
   </div>
  </div>
 </div>
</div>
<!-- FINAL MODAL DE CADASTRO DE BIO/BARRAS -->
<!-- INICIO MODAL DE CADASTRO DO PROXIMIDADE WIEGAND E ABATRACK -->
<div clss="main-box-body clearfix">
 <div class="modal fade" id="EnviaProx" tabindex"-1" role="dialog" aria-abeledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
   <div class="modal-content">
    <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><code>&times;</code></span></button>
      <h4 class="modal-title">Envio de Matrícula<strong><code>Proximidade Wiegand / Abatrack</code></strong></h4>
    </div>
    <div class="box-body">
    <div class="col-xs-6">
    Colaborador1: <br />
    Tipo de Proximidade: <br /> 
    PIS: <br />
    Matricula 1: <br />
    Matricula 2: <br /><br />
    Colaborador2: <br />
    Tipo de Proximidade: <br /> 
    PIS: <br />
    Matricula 1: <br />
    Matricula 2: <br />
    </div>
    <div class="col-xs-6">
    HENRY TESTE WIEGAND<br />
    <strong>Wiegand</strong> <br />
    <code>
     900000000024
     <br /><?php echo $Wiegand; ?> 
     <br /><?php echo $Wteste; ?></code><br /><br />
    HENRY TESTE ABATRACK <br />
    <strong>Abatrack</strong> <br />
    <code>
     900000000025
     <br /><?php echo $Abatrack; ?> 
     <br /><?php echo $Ateste; ?></code>
    </div>
    <div class="col-xs-12">
     <form name="Prox" id="Prox" method="post" action="" enctype="multipart/form-data">
      <div class='col-xs-12'><br /><br />
       <input name="Prox" type="submit" class="btn btn-danger btn-block btn-lg" id="Prox" value="Enviar Referências de Proximidade" />
      </div>
     </form>
     <?php
     if(@$_POST["Prox"]){
      $cod_msg = "04+EU+00+2+I[900000000024[HENRY TESTE WIEGAND[0[2[" . $Wiegand . "}" . $Wteste . "]I[900000000025[HENRY TESTE ABATRACK[0[2[" . $Abatrack . "}" . $Ateste;
      $cod_asc = gerar($cod_msg);
      $gera_asc = str_replace(" ","",$cod_asc);
      $port    = 3000;
      $msg = hex2str($gera_asc);
      $socket = socket_create(AF_INET, SOCK_STREAM, 0) or die("Could not create socket\n");
      socket_set_option($socket, SOL_SOCKET, SO_RCVTIMEO, array('sec' => 1, 'usec' => 0));
      socket_set_option($socket, SOL_SOCKET, SO_SNDTIMEO, array('sec' => 1, 'usec' => 0));
      $result = socket_connect($socket, $MeuIP, $port) or die($M006);
      socket_write($socket, $msg, strlen($msg)) or die($M002);
      $msg1 = socket_read($socket,8192);
      socket_close($socket);
      if ($msg1 == "04+EU+00") {
       echo '<script type="text/JavaScript">alert("Cadastrado com Sucesso");</script>';      
      }
      elseif ($msg1 <> "04+EU+00") {
       echo '<script type="text/JavaScript">alert("Cadastrado com Sucesso");</script>';      
      }
     }
    ?>
    </div>
    </div>
   </div>
  </div>
 </div>
</div>
<!-- FINAL MODAL DE CADASTRO DO PROXIMIDADE WIEGAND E ABATRACK -->
<!-- INICIO MODAL DE CADASTRO DE SMARTCARD -->
<div clss="main-box-body clearfix">
 <div class="modal fade" id="ESmart" tabindex"-1" role="dialog" aria-abeledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
   <div class="modal-content">
    <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><code>&times;</code></span></button>
      <h4 class="modal-title">Envio de Matrícula <strong><code>SMARTCARD</code></strong></h4>
    </div>
    <div class="box-body">
    <div class="col-xs-6">
    Colaborador: <br />
    PIS: <br />
    Matricula 1: <br />
    Matricula 2: <br />
    </div>
    <div class="col-xs-6">
    HENRY TESTE SMARTCARD<br />
    <code>
     900000000026
     <br /><?php echo $Mifare; ?>
     <br /><?php echo $MTeste; ?></code>
    </div>
    <div class="col-xs-12">
     <form name="mif" id="mif" method="post" action="" enctype="multipart/form-data">
      <div class='col-xs-12'><br /><br />
       <input name="mif" type="submit" class="btn btn-danger btn-block btn-lg" id="mif" value="Enviar Referências de Biometria/Barras" />
      </div>
     </form>
     <?php
     if(@$_POST["mif"]){
      $cod_msg = "03+EU+00+1+I[900000000026[HENRY TESTE SMARTCARD[0[2[" . $Mifare . "}" . $MTeste;
      $cod_asc = gerar($cod_msg);
      $gera_asc = str_replace(" ","",$cod_asc);
      $port    = 3000;
      $msg = hex2str($gera_asc);
      $socket = socket_create(AF_INET, SOCK_STREAM, 0) or die("Could not create socket\n");
      socket_set_option($socket, SOL_SOCKET, SO_RCVTIMEO, array('sec' => 1, 'usec' => 0));
      socket_set_option($socket, SOL_SOCKET, SO_SNDTIMEO, array('sec' => 1, 'usec' => 0));
      $result = socket_connect($socket, $MeuIP, $port) or die($M006);
      socket_write($socket, $msg, strlen($msg)) or die($M002);
      $msg1 = socket_read($socket,8192);
      socket_close($socket);
      if ($msg1 == "03+EU+00") {
       echo '<script type="text/JavaScript">alert("Cadastrado com Sucesso");</script>';      
      }
      elseif ($msg1 <> "03+EU+00") {
       echo '<script type="text/JavaScript">alert("Cadastrado com Sucesso");</script>';      
      }
     }
    ?>
    </div>
    </div>
   </div>
  </div>
 </div>
</div>
<!-- FINAL MODAL DE CADASTRO DE SMARTCARD -->

     <?php

      }
      else{
      echo '<section class="content">';
      echo '<div class="box box-default">';
      echo '<div class="box-header with-border">';
      echo '<h2 class="box-title"><strong> PASSO 3: </strong>ENVIO DE CARTÕES</h2>';
      echo '</div>';
      echo '<div class="box-body">';
      echo '<div class="alert alert-danger alert-dismissible">';
      echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
      echo '<h4><i class="icon fa fa-ban"></i> Erro!</h4>';
      echo '<h3>Você não seguiu os passos corretos para Cadastro do equipamento. Feche a tela e refaça novamente. </h3><br />';
      echo '</div>';
      echo '</div>';
      echo '</div>';
      echo '</section>';  
      }
      ?>
       </div>
      </div>
     </div>
    </section>
  </div>
 </div>
<?php
include_once '../../../footer.php'; ?>
</div>
<script src="../../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="../../../bootstrap/js/bootstrap.min.js"></script>
<script src="../../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="../../../dist/js/app.min.js"></script>
</body>
</html>
