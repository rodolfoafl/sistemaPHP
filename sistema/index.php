<?php
	require_once 'config.php';
	require_once DBAPI;

	include(HEADER_TEMPLATE);
	$db = open_database();
	/*if($db){
		echo '<h1>BANCO DE DADOS CONECTADO!</h1>';
	}else{
		echo '<h1>ERRO: NÃO FOI POSSÍVEL CONECTAR!</h1>';
	}*/
?>
<h1>Dashboard</h1>
<hr/>
<?php if($db): ?>
	<div class="row">		
		<div class="col-xs-6 col-sm-3 col-md-2">			
			<a href="classes/add.php" class="btn btn-primary">				
				<div class="row">					
					<div class="col-xs-12 text-center">						
						<i class="fa fa-plus fa-5x"></i>					
					</div>					
					<div class="col-xs-12 text-center">						
						<p>Novo Condomínio</p>					
					</div>				
				</div>			
			</a>		
		</div>	
	<div class="col-xs-6 col-sm-3 col-md-2">			
		<a href="classes" class="btn btn-default">				
			<div class="row">					
				<div class="col-xs-12 text-center">						
					<i class="fa fa-user fa-5x"></i>					
				</div>					
				<div class="col-xs-12 text-center">						
					<p>Condomínios</p>					
				</div>				
			</div>			
		</a>		
	</div>	
</div>	
<?php else : ?>		
	<div class="alert alert-danger" role="alert">			
		<p>
			<strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!
		</p>		
	</div>	
<?php endif; ?>	
<?php include(FOOTER_TEMPLATE); ?>
