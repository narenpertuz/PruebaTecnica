<?php
        session_start();
        require_once (__DIR__."/../../Datos/mdb/mdbUsuario.php");
        $home = "..";
        
	
        if(isset($_POST['submit'])){
		$errMsg = '';
		//username and password sent from Form
		$username = $_POST['username'];
		$password = $_POST['password'];
        
        $user = autenticarUsuario($username, $password);
        
		if($user != null){
                    $_SESSION['ID_USUARIO'] = $user->getIdUsuario();
                    $_SESSION['TIPO_USUARIO'] = $user->getRol();
                    $_SESSION['USERNAME']= $user->getUsuario();
            
            if ($user->getRol() == 1){
                    header("Location: ../../Interfaz/Estudiante/vista/menu.php");
                }             
		}else{
                    echo"<script type=\"text/javascript\">alert('Usuario o Contraseña Incorrectos'); window.location='../../index.html';</script>";          
		}
	}
        
?>
