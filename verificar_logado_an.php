<?php 
    ob_start();
    session_start();
    if(isset($_SESSION['email'])){
        $email_usuario=$_SESSION['email'];
        include('conexao.php');
        //verificando se ele é usuário
        $sqlsel='select * from usuario where email="'.$email_usuario.'";';
        $resul=mysqli_query($conexao,$sqlsel);
        if(mysqli_num_rows($resul)>0)
        {
        	header("location: verificar_perfil.php");
        }
        //se ele realmente for anunciante, cairá neste else
        else
        {
	        $sqlsel='select * from anunciante where email="'.$email_usuario.'";';
	        $resul=mysqli_query($conexao,$sqlsel);
	        $con=mysqli_fetch_array($resul);
	    }
    }
    else{
        header('location:destruir.php');    
    }
?>