<?php
require("../restritos.php"); 
require_once '../init.php';
$cReteste = "active";
$PDO = db_connect();
require_once '../QueryUser.php';
require_once '../queryDashboard.php';


$Chama1510 = "SELECT * FROM cadastro_1510 WHERE Status='1' ORDER BY DataCadastro DESC";
$Qry1510 = $PDO->prepare($Chama1510);
$Qry1510->execute();

$Chama373 = "SELECT * FROM cadastro_373 WHERE Status='1' ORDER BY DataCadastro DESC";
$Qry373 = $PDO->prepare($Chama373);
$Qry373->execute();

$ChamaAcc = "SELECT * FROM cadastro_acesso WHERE Status='1' ORDER BY DataCadastro DESC";
$QryAcc = $PDO->prepare($ChamaAcc);
$QryAcc->execute();

$ChamaPlus = "SELECT * FROM cadastro_cartografico WHERE Status='1' ORDER BY DataCadastro ASC";
$QryPlus = $PDO->prepare($ChamaPlus);
$QryPlus->execute();
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <title><?php echo $titulo; ?></title>
 <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
 <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
 <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
 <link rel="stylesheet" href="../plugins/iCheck/flat/blue.css">
</head>
<body class="hold-transition skin-blue-light fixed sidebar-mini">
<div class="wrapper">
 <header class="main-header">
  <a href="#" class="logo">
   <span class="logo-mini"><img src="../dist/img/logo/logoWhite.png" width="50"/></span>
   <span class="logo-lg"><img src="../dist/img/logo/logoWhite.png" width="180" /></span>
  </a>
  <nav class="navbar navbar-static-top">
   <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
    <span class="sr-only">Minizar Navegação</span>
   </a>
   <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
     <li class="dropdown user user-menu">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
       <span class="hidden-xs"><?php echo $NomeUserLogado; ?></span>
      </a>
      <ul class="dropdown-menu">
       <li class="user-header">
        <p><?php echo $NomeUserLogado; ?></p>
       </li>
       <li class="user-footer">
        <div class="pull-left">
         <a href="user/perfil.php" class="btn btn-info">Dados de Perfil</a>
        </div>
        <div class="pull-right">
         <a href="../logout.php" class="btn btn-danger">Sair</a>
        </div>
       </li>
      </ul>
     </li>
     <li>
       <a href="../logout.php" class="btn btn-danger btn-flat">Sair</a>
     </li>
    </ul>
    </div>
    </nav>
  </header>
  <aside class="main-sidebar">
   <section class="sidebar">
    <?php include_once '../menuLateral.php'; ?>
    </section>
  </aside>
<div class="content-wrapper">
 <section class="content-header">
  <h1>Página Inicial<small><?php echo $titulo; ?></small></h1>
 </section>
 <section class="content">
  <div class="row">
  <?php if ($PermReteste === "9") { ?>
    <div class="col-md-12">
     <div class="box box-widget widget-user">
      <div class="info-box">
       <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
         <li class="active"><a href="#rep" data-toggle="tab">REP 1510/INMETRO</a></li>
         <li><a href="#373" data-toggle="tab">Ponto 373</a></li>
         <li><a href="#acesso" data-toggle="tab">Acesso</a></li>
         <li><a href="#cartografico" data-toggle="tab">Cartográficos</a></li>
         <li class="pull-right"><h3>Lista de Equipamentos Aguardando Reteste</h3></a></li>
        </ul>
        <div class="tab-content">
         <div class="tab-pane active" id="rep">
          <table id="cadREP" class="table table-responsive">
           <thead>
            <tr>
             <th>Data / Hora</th>
             <th>Modelo</th>
             <th>Nº de Série</th>
             <th></th>
            </tr> 
           </thead>
           <tbody>
            <?php while ($R1510 = $Qry1510->fetch(PDO::FETCH_ASSOC)): 
            echo '<tr>';
            echo '<td>' . $R1510['DataCadastro'] . ' - ' . $R1510['HoraCadastro'] .'</td>';
            echo '<td>' . $R1510['Modelo'] . '</td>';
            echo '<td>' . $R1510['NumREP'] . '</td>';
            echo '<td>';
            echo '<a class="btn btn-info btn-xs" href="javascript:abrir(';
            echo "'1510Detalhe.php?ID=" . $R1510['NumREP'] . "');";
            echo '"><i class="fa fa-search"> Visualizar </i></a>&nbsp;';
            echo '<a class="btn btn-success btn-xs" href="javascript:abrir(';
            echo "'1510Libera.php?ID=" . $R1510['NumREP'] . "');";
            echo '"><i class="fa fa-thumbs-up"> Liberar </i></a>&nbsp;';
            echo '<a class="btn btn-danger btn-xs" href="javascript:abrir(';
            echo "'1510Reprova.php?ID=" . $R1510['NumREP'] . "');";
            echo '"><i class="fa fa-remove"> Reprovar </i></a>&nbsp;';
            echo "</td>";
            echo "</tr>";
            endwhile;
            ?>
           </tbody>
          </table>  
         </div>
         <div class="tab-pane" id="373">
          <table id="cad373" class="table table-responsive">
           <thead>
            <tr>
             <th>Data / Hora</th>
             <th>Modelo</th>
             <th>Nº de Série</th>
             <th></th>
            </tr> 
           </thead>
           <tbody>
            <?php while ($R373 = $Qry373->fetch(PDO::FETCH_ASSOC)): 
            echo '<tr>';
            echo '<td>' . $R373['DataCadastro'] . ' - ' . $R373['HoraCadastro'] .'</td>';
            echo '<td>' . $R373['Modelo'] . '</td>';
            echo '<td>' . $R373['NumSerie'] . '</td>';
            echo '<td>';
            echo '<a class="btn btn-info btn-xs" href="javascript:abrir(';
            echo "'373Detalhe.php?ID=" . $R373['NumSerie'] . "');";
            echo '"><i class="fa fa-search"> Visualizar </i></a>&nbsp;';
            echo '<a class="btn btn-success btn-xs" href="javascript:abrir(';
            echo "'373Libera.php?ID=" . $R373['NumSerie'] . "');";
            echo '"><i class="fa fa-thumbs-up"> Liberar </i></a>&nbsp;';
            echo '<a class="btn btn-danger btn-xs" href="javascript:abrir(';
            echo "'373Reprova.php?ID=" . $R373['NumSerie'] . "');";
            echo '"><i class="fa fa-remove"> Reprovar </i></a>&nbsp;';
            echo "</td>";
            echo "</tr>";
              endwhile;
            ?>
           </tbody>
          </table>         
         </div>
         <div class="tab-pane" id="acesso">
          <table id="cadACESSO" class="table table-responsive">
           <thead>
            <tr>
             <th>Data / Hora</th>
             <th>Modelo</th>
             <th>Nº de Série</th>
             <th></th>
            </tr> 
           </thead>
           <tbody>
            <?php while ($RACC = $QryAcc->fetch(PDO::FETCH_ASSOC)): 
            echo '<tr>';
            echo '<td>' . $RACC['DataCadastro'] . ' - ' . $RACC['HoraCadastro'] .'</td>';
            echo '<td>' . $RACC['Modelo'] . '</td>';
            echo '<td>' . $RACC['NumSerie'] . '</td>';
            echo '<td>';
            echo '<a class="btn btn-info btn-xs" href="javascript:abrir(';
            echo "'AcessoDetalhe.php?ID=" . $RACC['NumSerie'] . "');";
            echo '"><i class="fa fa-search"> Visualizar </i></a>&nbsp;';
            echo '<a class="btn btn-success btn-xs" href="javascript:abrir(';
            echo "'AcessoLibera.php?ID=" . $RACC['NumSerie'] . "');";
            echo '"><i class="fa fa-thumbs-up"> Liberar </i></a>&nbsp;';
            echo '<a class="btn btn-danger btn-xs" href="javascript:abrir(';
            echo "'AcessoReprova.php?ID=" . $RACC['NumSerie'] . "');";
            echo '"><i class="fa fa-remove"> Reprovar </i></a>&nbsp;';
            echo "</td>";
            echo "</tr>";
              endwhile;
            ?>
           </tbody>
          </table>     
         </div>
         <div class="tab-pane" id="cartografico">
          <table id="carto" class="table table-responsive tabel-bordered">
           <thead>
            <tr>
             <th>Data / Hora</th>
             <th>Modelo</th>
             <th>Nº de Série</th>
             <th></th>
            </tr> 
           </thead>
           <tbody>
            <?php while ($plus = $QryPlus->fetch(PDO::FETCH_ASSOC)): 
            echo '<tr>';
            echo '<td>' . $plus['DataCadastro'] . ' - ' . $plus['HoraCadastro'] .'</td>';
            echo '<td>' . $plus['Modelo'] . '</td>';
            echo '<td>' . $plus['NumSerie'] . '</td>';
            echo '<td>';
            echo '<a class="btn btn-info btn-xs" href="javascript:abrir(';
            echo "'CartDetalhe.php?ID=" . $plus['NumSerie'] . "');";
            echo '"><i class="fa fa-search"> Visualizar </i></a>&nbsp;';
            echo '<a class="btn btn-success btn-xs" href="javascript:abrir(';
            echo "'CartLibera.php?ID=" . $plus['NumSerie'] . "');";
            echo '"><i class="fa fa-thumbs-up"> Liberar </i></a>&nbsp;';
            echo "</td>";
            echo "</tr>";
              endwhile;
            ?>
           </tbody>
          </table>
         </div>                        
        </div>
       </div>
      </div>
     </div>
    </div>
  <?php } else{ ?>
   <div class="col-md-12 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-red">
      <i class="fa fa-exclamation-triangle"></i>
      </span>
      <div class="info-box-content">
       <h4><strong><i>Atenção!</i></strong></h4>
       <h4>Você não possui privilégios suficientes para abrir esta página. Contate o Administrador!</h4>
      </div>
     </div>
    </div>
    <?php } ?>
  
  </div><!-- CLASS ROW -->
 </section>
</div><!-- CONTENT-WRAPPER -->
<?php include_once '../footer.php'; ?>
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="../plugins/fastclick/fastclick.js"></script>
<script src="../dist/js/app.min.js"></script>
<script src="../dist/js/demo.js"></script>
<script>
  $(function () {
    $('#cadREP').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true
    });
    $("#cad373").DataTable();
    $("#cadACESSO").DataTable();
    $("#carto").DataTable();
  });
</script>
<script language="JavaScript">
function abrir(URL) { 
  var width = 1200;
  var height = 650;
  var left = 99;
  var top = 99;
  window.open(URL,'janela', 'width='+width+', height='+height+', top='+top+', left='+left+', scrollbars=yes, status=no, toolbar=no, location=no, directories=no, menubar=no, resizable=no, fullscreen=no');
}
</script>
</html>
