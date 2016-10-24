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
       echo '<script type="text/JavaScript">alert("Cadastrado com Sucesso");<script>';      
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

