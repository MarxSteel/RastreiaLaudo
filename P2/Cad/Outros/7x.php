<?php
require("../../../restritos.php");
require_once '../../../init.php';
$PDO = db_connect();
 $query = $PDO->prepare("SELECT * FROM login WHERE login='$login'");
 $query->execute();
  $row = $query->fetch();
  $Distrito = $row['MetaRealizada'];
  $Nick = $row['Nome'];
  $PermMontagem = $row['P2Montagem'];
  $Valida = "1";
  $Montagens = $row['MontOK'];
   $NovaMontagem = $Montagens+1;
  $Meta = $row['MetaRealizada'];
   $NovaMeta = $Meta+1;
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
      <li>CADASTRO DE EQUIPAMENTO: <strong>LINHA 7X</strong></li>
     </ol>
    </section>
    <section class="content">
     <div class="box box-default">
      <div class="box-header with-border">
       <h2 class="box-title">CADASTRANDO EQUIPAMENTO</h2>
     </div>
     <div class="box-body">
      <form name="cadastrar_anuncio" id="name" method="post" action="" enctype="multipart/form-data">
       <table width="400" border="0" align="center">
        <tr>
         <div class="col-xs-4">NÚMERO DE SÉRIE
          <input name="numREP" type="text" class="form-control" id="numREP" minlength="1" maxlength="7" required="required"/>
         </div>
        </tr>
        <tr>
         <div class="col-xs-8">Modelo
          <select class="form-control" name="modelo" id="modelo" required="required">
           <option value="" checked="checked"> >>SELECIONE<<</option>
           <option disabled="disabled">----LINHA ORION----</option>
           <option value="ORION II">Orion 2</option>
           <option value="ORION V">Orion 5</option>
           <option value="ORION CR">Orion CR</option>
           <option value="ORION SF">Orion Super Fácil</option>
           <option disabled="disabled">----LINHA CARD----</option>
           <option value="CARD II">Card 2</option>
           <option value="CARD 5">Card 5</option>
           <option value="CARD SIRENE">Card Sirene</option>
           <option value="CARD +">Card +</option>
           <option value="CARD SF">Card SF</option>
          </select>
         </div>
        </tr>
        <tr>
         <div class="col-xs-4">HOS
          <input class="form-control" type="text" id="hos" name="hos">
         </div>
         <div class="col-xs-4">Bateria
           <select class="form-control" name="bateria" id="bateria" required="required">
            <option value=""> >>SELECIONE<<</option>
            <option value="11">Possui Bateria</option>
            <option value="22">Não Possui Bateria</option>
          </select>
        </div>
        <div class="col-xs-4">Cartucho USB
          <select class="form-control" name="usb" id="usb" required="required">
           <option value=""> >>SELECIONE<<</option>
           <option value="1">1MB</option>
           <option value="2">2MB</option>
           <option value="8">8MB</option>
           <option value="N">NÃO POSSUI</option>
         </select>
       </div>
        </tr>
        <tr>
          <div class="col-xs-4">Quantidade de Reles
            <select class="form-control" name="reles" id="reles" required="required">
             <option value=""> >>SELECIONE<<</option>
             <option value="0">Nenhum Relé</option>
             <option value="1">1 Relé</option>
             <option value="2">2 Relés</option>
             <option value="3">3 Relés</option>
             <option value="3">3 Relés</option>
             <option value="4">4 Relés</option>
             <option value="5">5 Relés</option>
           </select>
         </div>
        </div>
         <div class="col-xs-8">Biometria
          <select class="form-control" name="biometria" id="biometria" required="required">
           <option value="" checked="checked"> >>SELECIONE<<</option>
           <option value="99">NENHUMA</option>
           <option value="01"> (512K) - 0300 Digitais<code> SUPREMA </code></option>
           <option value="02"> (4MB) - 9600 Digitais<code> SUPREMA </code></option>
           <option value="03"> (8MB) - 15000 Digitais<code> SUPREMA </code></option>
           <option value="04"> (1MB) - 1.900 Digitais<code> CAPACITIVA </code></option>
           <option value="05"> (4MB) - 9.600 Digitais<code> CAPACITIVA </code></option>
           <option value="06"> (4MB) - 9.600 Digitais DEDO VIVO<code> LFD </code></option>
           <option value="07">  1.000 Digitais<code> FS (FINCHOS) </code></option>
          </select>
         </div>
        </tr>
        <tr>
         <div class="col-xs-4">Proximidade
          <select class="form-control" name="proximidade" id="proximidade" required="required">
           <option value="" checked="checked"> >>SELECIONE<<</option>
           <option value="01"> WIE - WIEGAND</option>
           <option value="02"> ABA - ABATRACK</option>
           <option value="03"> IND - INDALA</option>
           <option value="04"> HID </option>
           <option value="05"> ACU - Acura</option>
           <option value="06"> PHID </option>
          </select>
         </div>
         <div class="col-xs-4">Mifare (SmartCard)
          <select class="form-control" name="mifare" id="mifare" required="required">
           <option value="" checked="checked"> >>SELECIONE<<</option>
           <option value="11"> Possui Mifare</option>
           <option value="22"> Não possui</option>
          </select>
         </div>
         <div class="col-xs-4">Barras
          <select class="form-control" name="barras" id="barras" required="required">
           <option value="" checked="checked"> >>SELECIONE<<</option>
           <option value="11"> Possui barras</option>
           <option value="22"> Não Possui barras</option>
          </select>
         </div>
        </tr>
        <tr>
         <div class="col-xs-12">Observações
           <textarea name="descricao" cols="45" rows="3" class="form-control" id="descricao"></textarea>
         </div>
        </tr>
        <tr>
         <div class="col-xs-12"><br />
           <input name="enviar" type="submit" class="btn btn-success btn-block" id="enviar" value="Cadastrar"  />
         </div>
        </tr>
       </table>
      </form>
      <?php
      if(@$_POST["enviar"]){
       $numREP = $_POST["numREP"];
       $Modelo = $_POST["modelo"];
       $Bat = $_POST["bateria"];
       $Usb = $_POST["usb"];
       $Rele = $_POST["reles"];
       $Mifare = $_POST["mifare"];
       $Barras = $_POST["barras"];
       $HOS = $_POST["hos"];
       $Bio = $_POST["biometria"];
       $Prox = $_POST["proximidade"];
        $data = date("Y/m/d");
        $hora = date("H:i:s");
       $Obseracao = str_replace("\r\n", "<br/>", strip_tags($_POST["descricao"]));
        //GRAVANDO NO BANCO DE DADOS
       $executa = $PDO->query("INSERT INTO cadastro_acesso (Modelo, NumSerie, DataCadastro, HoraCadastro, Status, UserCadastro, LeiMifare, LeiProx, LeiBarras, LeiBio, Observa) VALUES ('$Modelo', '$numREP', '$data', '$hora', '1', '$Nick', '$Mifare', '$Prox', '$Barras', '$Bio', '$Obseracao')");
        if($executa)
        {
         echo '<script type="text/javascript">alert("Equipamento Cadastrado com Sucesso");</script>';
         $executa2 = $PDO->query("UPDATE login SET MetaRealizada='$NovaMeta', MontOK='$NovaMontagem' WHERE login='$login'");
          if ($executa2) {
           echo '<script type="text/javascript">alert("Metas Atualizadas com sucesso");</script>';
           echo '<script type="text/javascript">window.close();</script>';
          }
          else{
           echo '<script type="text/javascript">alert("NÃO FOI POSSÍVEL ATUALIZAR METAS");</script>';
          }
         }
         else{
          echo $M005;
         }
       }
     ?>
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
