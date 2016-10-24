<?php
require("../restritos.php"); 
require_once '../init.php';
$PDO = db_connect();
 $query = $PDO->prepare("SELECT * FROM login WHERE login='$login'");
 $query->execute();
  $row = $query->fetch();
  $NomeUserLogado = $row['Nome'];
  $foto = $row['Foto'];
  $ChamaLaudo = "SELECT * FROM laudo ORDER BY id DESC";
  $L1 = $PDO->prepare($ChamaLaudo);
  $L1->execute();
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
  <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
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
       <img src="../dist/img/user/<?php echo $foto; ?>" class="user-image">
       <span class="hidden-xs"><?php echo $NomeUserLogado; ?></span>
      </a>
      <ul class="dropdown-menu">
       <li class="user-header">
        <img src="../dist/img/user/<?php echo $foto; ?>" class="img-circle">
        <p><?php echo $NomeUserLogado; ?></p>
       </li>
       <li class="user-footer">
        <div class="pull-left">
         <a href="../user/perfil.php" class="btn btn-info">Dados de Perfil</a>
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
    <div class="user-panel">
     <div class="pull-left image">
      <img src="../dist/img/user/<?php echo $foto; ?>" class="img-circle">
     </div>
     <div class="pull-left info">
      <p><?php echo $NomeUserLogado; ?></p>
     </div>
    </div>
    <?php include_once '../menuLateral.php'; ?>
    </section>
  </aside>
<div class="content-wrapper">
 <section class="content-header">
  <h1>Página Inicial<small><?php echo $titulo; ?></small></h1>
 </section>
 <section class="content">
  <div class="row">
   <div class="col-md-4 col-xs-12">
    <div class="info-box">
     <a data-toggle="modal" data-target="#novoLaudo"">
       <span class="info-box-icon btn-danger">
        <i class="fa fa-plus"></i>
       </span>
     </a>
     <div class="info-box-content"><br /><h4>Cadastrar Nova nota</h4></div>
    </div>
   </div>
   <div class="col-xs-12">
    <div class="box">
     <div class="box-header">
      <h3 class="box-title">Rastreio de Laudos Cadastrados</h3>
     </div>
     <div class="box-body">
      <table id="laudos" class="table table-bordered table-striped">
       <thead>
        <tr>
         <th width="10" >#</th>
         <th width="120" >Data</th>
         <th>Item</th>
         <th width="35" >Status</th>
         <th width="10" ></th>
         <th width="10" ></th>
        </tr>
       </thead>
       <tbody>
        <?php 
          while ($L = $L1->fetch(PDO::FETCH_ASSOC)): 
           echo '<tr>';
            echo '<td>' . $L['id'] . '</td>';
            echo '<td>' . $L['dataCadastro'] . '</td>';
            echo '<td>' . $L['Item'] . '</td>';
            $Status = $L['Status'];
            if ($Status === "1") {
             echo '<td>';
             echo '<button class="btn bg-orange btn-block btn-xs disabled">ENVIADO</button>';
             echo '</td>';
             echo '<td><a class="btn bg-olive btn-block btn-xs" href="';
              echo "javascript:abrir('Recebe.php?ID=" . $L['id'] . "');";
              echo '"><i class="fa fa-plus"> RECEBER</i></a></td>';
            }
            elseif ($Status === "2") {
             echo '<td>';
             echo '<button class="btn btn-info btn-block btn-xs disabled">AGUARDANDO REVISÃO</button>';
             echo '</td>';
             echo '<td><a class="btn bg-navy btn-block btn-xs" href="';
              echo "javascript:abrir('Preencher.php?ID=" . $L['id'] . "');";
              echo '"><i class="fa fa-plus"> LAUDO</i></a></td>';
            }
            elseif ($Status === "3") {
            echo '<td>';
            echo '<button class="btn btn-success btn-block btn-xs disabled">APROVADO</button>';
            echo '</td>';
            $LkL = $L['Laudo'];
            echo '<td>';
            echo '<a href="laudos/' . $LkL . ' " target="_blank" class="btn btn-default btn-xs"><i class="fa fa-download"></i> BAIXAR </a>';
            echo '</td>';
            }
            elseif ($Status === "4") {
            echo '<td>';
            echo '<button class="btn btn-danger btn-block btn-xs disabled">REPROVADO</button>';
            echo '</td>';
            $LkL = $L['Laudo'];
            echo '<td>';
            echo '<a href="laudos/' . $LkL . ' " target="_blank" class="btn btn-default btn-xs"><i class="fa fa-download"></i> BAIXAR </a>';
            echo '</td>';
            }
            echo '<td><a class="btn btn-default btn-block btn-xs" href="';
            echo "javascript:abrir('vProduto.php?ID=" . $L['id'] . "');";
            echo '"><i class="fa fa-search"> </i></a></td>';
           echo '</tr>';
           endwhile;
         ?>
       </tbody>
      </table>
     </div><!-- box.body -->
    </div><!-- box -->
   </div>
   <?php include_once "modalAlmox.php"; ?>
  </div><!-- CLASS ROW -->
 </section>
</div><!-- CONTENT-WRAPPER -->
<?php include_once '../footer.php'; ?>
</div>
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
    $('#laudos').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true
    });
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
</body>
</html>
