<?php
	require_once 'config.php';
	require_once DBAPI;

	include(HEADER_TEMPLATE);
	$db = open_database();
?>

<hr/>
<?php if($db): ?>
<div class="login">
	<form class="f-login" method="post" action="autenticacao.php">
  <div class="form-group">
  	<h1 class="title">Entrar</h1>
    <label for="exampleInputEmail1">Email</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="exemplo@email.com" name="usuario">
    <small id="emailHelp" class="form-text text-muted">Nós nunca compartilharemos seu email com ninguém.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="*********" name="senha">
  </div>
 
  <button type="submit" class="btn btn-info entrar">Entrar</button>
</form>
</div>
<?php else : ?>		

	<div class="alert alert-danger" role="alert">			
		<p>
			<strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!
		</p>		
	</div>	

	
<?php endif; ?>	
<?php include(FOOTER_TEMPLATE); ?>
