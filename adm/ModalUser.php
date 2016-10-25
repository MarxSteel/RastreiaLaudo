<!-- MODAL DE CADASTRO DE USUÁRIO DO ALMOXARIFADO -->
<div id="NovoAlmox" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header bg-green">
    <button type="button" class="close" data-dismiss="modal">X</button>
     <h4 class="modal-title">Cadastrar Usuário</h4>
   </div>
   <div class="modal-body">
    <form name="cadAlmox" id="name" method="post" action="" enctype="multipart/form-data">
     <div class="col-xs-12">Nome Completo
      <input name="NomeCompleto" type="text" class="form-control" id="NomeCompleto" required="required">
     </div>
     <div class="col-xs-6">Usuário
      <input name="nick" type="text" class="form-control" id="nick" required="required">
     </div>
     <div class="col-xs-6">Senha
      <input name="password" type="password" class="form-control" id="password" required="required">
     </div>
     <div class="col-xs-12">Laudos</div>
      <div class="col-xs-6">Pode Cadastrar Pedidos de Laudo?
       <select class="form-control" name="cadLaudo" required="required">
        <option value="" checked="checked"> >>SELECIONE<<</option>
        <option value="9"> Pode cadastrar pedido</option>
        <option value="5"> Não pode Cadastrar</option>
       </select>
     </div>
     <div class="col-xs-6">Pode Receber / Dar Baixa em Laudo?
      <select class="form-control" name="respLaudo" required="required">
       <option value="" checked="checked"> >>SELECIONE<<</option>
       <option value="9"> Pode responder laudo</option>
       <option value="5"> Não pode responder</option>
      </select>
     </div>
     <div class="col-xs-12"><br />
       <input name="cadAlmox" type="submit" class="btn btn-success btn-block btn-flat" id="cadAlmox" value="CADASTRAR USUÁRIO"  />
     </div>
    </form>
    <?php 
    if(@$_POST["cadAlmox"]){
     $NomeCompleto = $_POST["NomeCompleto"];
     $nick = $_POST["nick"];
     $senha = $_POST["password"];
     $CadLaudo = $_POST["cadLaudo"];
     $respLaudo = $_POST["respLaudo"];
     $passwd = md5($senha);
     $ativo = "1";
     $user_level = "2";
      $CadAlmox = $PDO->query("INSERT INTO login (Nome, login, senha, PrivLaudo, CadLaudo) VALUES ('$NomeCompleto', '$nick', '$passwd', '$respLaudo', '$CadLaudo')");
      if ($CadAlmox) {
        echo '<script type="text/javascript">alert("Usuário Adicionado!");</script>';
        echo '<script type="text/javascript">location.href="usuarios.php"</script>';
      }
    }
    ?>
   </div>
   <div class="modal-footer"></div>
  </div>
 </div>
</div>
<!-- MODAL DE CADASTRO DE USUÁRIO DO ALMOXARIFADO -->

<!-- MODAL DE MODELO -->
<div id="modelo" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header bg-green">
    <button type="button" class="close" data-dismiss="modal">X</button>
     <h4 class="modal-title">Cadastro de Firmware de Linha</h4>
   </div>
   <div class="modal-body">
    <form name="EdCad" id="name" method="post" action="" enctype="multipart/form-data">
     <div class="col-md-6 col-xs-12">Versão
      <input class="form-control" type="text" name="vLinha" required="required">
     </div>
     <div class="col-xs-12">Arquivo
      <input type="file" name="arqLinha" id="arqLinha" required="required"><br>
     </div>
     <div class="col-xs-12">Observações
      <textarea name="obs" cols="45" rows="3" class="form-control" id="obs"></textarea><hr>
     </div>
     <div class="pull-right">
      <input name="novoProduto" type="submit" class="btn bg-purple btn-flat" id="novoProduto" value="CADASTRAR PRODUTO"  /> 
      <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">FECHAR</button>
     </div>
    </form>
   </div>
   <div class="modal-footer"></div>
  </div>
 </div>
</div>
<!-- MODAL DE MODELO -->


<!-- MODAL DE MODELO -->
<div id="modelo" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header bg-green">
    <button type="button" class="close" data-dismiss="modal">X</button>
     <h4 class="modal-title">Cadastro de Firmware de Linha</h4>
   </div>
   <div class="modal-body">

   </div>
   <div class="modal-footer"></div>
  </div>
 </div>
</div>
<!-- MODAL DE MODELO -->