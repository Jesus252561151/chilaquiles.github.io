
<?php
session_start();
if(isset($_POST['submit'])){
	
	 include('../php/login_admin.php');
	 $obj=new DbFunction();
	 $_SESSION['login']=$_POST['id'];
	 $obj->login($_POST['id'],$_POST['password']);
}
	 

?>
 








<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="stile3.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Iniciar Sesión - REX.PI</title>
</head>
<body>


<form action="php/login_admin.php" method="post">
    <section class="login-form">


    <input type="text" required class="letras1" name="loginid">
    <label class="cajas1">Email</label>




    <input type="password" required id="contraseña" name="password" class="letras2">
                <label class="cajas2">Contraseña</label>



                <input type="submit" class="btn" value="Iniciar">







        
        <p>¿No tienes una cuenta? <a href="registro.php">Regístrate aquí</a></p>
    </section>
    </form>
</body>
</html>



