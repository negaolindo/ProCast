<?php
	include('verificar_logado.php');
	if($con['categoria_usuario']==1)
	{
		echo('<script>window.location="clube_jogador.php";</script>');

	}
	elseif ($con['categoria_usuario']==2)
	{
		echo('<script>window.location="clube_investidor.php";</script>');

	}
?>