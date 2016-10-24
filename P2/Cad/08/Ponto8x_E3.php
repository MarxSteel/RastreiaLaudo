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
     <?php
     include_once 'Cartoes8X.php';
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
