<?php 
$server = 'http://localhost:8888/RastreiaLaudo';
$endereco = $_SERVER ['REQUEST_URI']; 
?>
<ul class="sidebar-menu">
 <li class="header"></li>
  <li class="<?php echo $cHome; ?>">
   <a href="<?php echo $server; ?>/dashboard.php">
    <i class="fa fa-home"></i> <span>Início</span>
   </a>
  </li>
  <?php if ($PermMontagem == "9") { ?> 
  <li class="<?php echo $cMont; ?>">
   <a href="<?php echo $server; ?>/P2/Montagem.php">
    <i class="fa fa-wrench"></i>
      Cadastro de Produtos
   </a>
  </li>
  <li class="<?php echo $cPend; ?>">
   <a href="<?php echo $server; ?>/P2/Pendentes.php">
    <i class="fa fa-exclamation-triangle"></i>
      Equipamentos Pendentes
   </a>
  </li>
  <li class="<?php echo $cMeus; ?>">
   <a href="<?php echo $server; ?>/P2/MeusEquips.php">
    <i class="fa fa-child"></i>
      Meus Equipamentos
   </a>
  </li>
  <?php } else{ } if ($PermReteste === "9") { ?>
  <li class="<?php echo $cReteste; ?>">
   <a href="<?php echo $server; ?>/P2/Reteste.php">
    <i class="fa fa-refresh"></i>
      Controle de Reteste
   </a>
  </li>
  <li class="<?php echo $cQGeral; ?>">
   <a href="<?php echo $server; ?>/P2/Quantgeral.php">
    <i class="fa fa-server"></i>
      Quantidade Geral
   </a>
  </li>
  <li class="<?php echo $cImprime; ?>">
   <a href="<?php echo $server; ?>/Imprime/dashboard.php">
    <i class="fa fa-print"></i>
      Imprimir
   </a>
  </li>
  <?php } else{ } if ($Catraca === "9") { ?>
  <li class="<?php echo $cCat; ?>">
   <a href="<?php echo $server; ?>/Cat/dashboard.php">
    <i class="fa fa-map-signs"></i>
      Catracas
   </a>
  </li>
  <?php } else{ } if ($PermAdm === "9") { ?>
  <li class="<?php echo $cUsers; ?>">
   <a href="<?php echo $server; ?>/adm/usuarios.php">
    <i class="fa fa-users"></i>
      Usuários
   </a>
  </li>
  <?php } else{ } if ($Plaudo === "9") { ?>
  <li class="<?php echo $cLaudo; ?>">
   <a href="<?php echo $server; ?>/almox/dashboard.php">
    <i class="fa fa-clipboard"></i>
      Laudos de teste
   </a>
  </li> 
  <?php } else{ } ?>