<?php
	include "../conexion.php";
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Camara de Comercio</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="../css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="../css/layout.css" type="text/css" media="screen"> 
    <link rel="stylesheet" href="../socialbar/style.css" type="text/css" media="screen">
    <script src="../js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="../js/cufon-yui.js" type="text/javascript"></script>
    <script src="../js/cufon-replace.js" type="text/javascript"></script> 
    <script src="../js/Dynalight_400.font.js" type="text/javascript"></script>
    <script src="../js/FF-cash.js" type="text/javascript"></script>
    <script src="../js/tms-0.3.js" type="text/javascript"></script>
    <script src="../js/tms_presets.js" type="text/javascript"></script>
    <script src="../js/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="../js/jquery.equalheights.js" type="text/javascript"></script>    
<style>
          .thumb {
            width: 280px;           
          }
    </style>
	<?php
  
	if(isset($_SESSION['id'])){
		
		
?>	
<style>
.menu li {
float:left;
padding-left:21px;
}
</style>
<?php	
}		
?>
</head>
<body id="page1" >

    <br><br>
    <!--==============================header=================================-->
    <header>
        <div class="row-top" >
            <div class="main">
                <div class="wrapper" style="z-index:2">
                    <nav>
                        <ul class="menu">
                            <li><a href="../"><b style="font-family: 'Droid Sans'; font-size: 24px;">Inicio</b></a></li>
                            <li><a href="../quienes-somos/" style="font-family: 'Droid Sans'; font-size: 24px;"><b>Quienes Somos</b></a></li>
                            <li><a href="../locales/" style="font-family: 'Droid Sans'; font-size: 24px;"><b>Locales</b> </a></li>
                            <li><a href="../eventos/" style="font-family: 'Droid Sans'; font-size: 24px;"><b>Eventos</b> </a></li>
                            <li><a href="../empleos/" style="font-family: 'Droid Sans'; font-size: 24px;"><b>Empleos</b></a></li>
                            <li><a href="../socios/" class="active" style="font-family: 'Droid Sans'; font-size: 24px;"><b>Socios</b></a></li>
                            <li><a href="../contacto/index.php"  style="font-family: 'Droid Sans'; font-size: 24px;"><b>Contacto</b></a></li>							
							<?php if(isset($_SESSION['id'])){  ?>
							<li><a href="../logout.php" style="font-family: 'Droid Sans'; font-size: 24px;"><b>Cerrar Sesión</b></a></li>
							<?php }?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
         <img src="../images/logo.png" style="margin-bottom: -100px; margin-top: -26px; margin-left: 20px; position:fixed;z-index:2500"/>
         <br><br><br><br><br>
        
        

                
    </header>
    <div style="margin-bottom: -30px;" ></div>
    <!--==============================content================================-->
    <section id="content"><div class="ic"></div>

        <!--==============================Social================================-->

        <div class="social">
            <ul>
                <li><a href="#" target="_blank" class="icon-facebook"></a></li>
                <li><a href="#" target="_blank" class="icon-youtube"></a></li>
                <li><a href="#" target="_blank" class="icon-google-plus"></a></li>
                <li><a href="#" target="_blank" class="icon-twitter"></a></li>
                <li><a href="#" target="_blank" class="icon-mail2"></a></li>
            
            </ul>
        </div>

            <!--==============================content================================-->

        <?php
            if (isset($_SESSION['id'])) {
				$id=$_SESSION['id'];
				$query = "SELECT * FROM Local WHERE id='$id'";
				$result = mysqli_query($con, $query);

			if(!$result){
			printf("Errormessage: %s\n", $con->error);
				}
						
			while ($row = mysqli_fetch_assoc($result)){
        		$nombre = $row['nombre'];
			;}
				
			?>
                

                    
               <center>

                        <section class="form">
                            <center><h1> <?php echo $nombre;?> </h1></center>
                            <center><b style="font-family: 'Droid Sans'; font-size: 30px; color: #fff;"> Acá podrás: </b></center>
                            <br><br>
                            <a href="datos-local.php" style="font-family: 'Droid Sans'; font-size: 20px; color: #fff;"><b>Editar Información</b></a>
                            <br>
                            <a href="agregar-producto.php" style="font-family: 'Droid Sans'; font-size: 20px; color: #fff;"><b>Agregar Productos</b></a>
                            <br>
                            <a href="eliminar-producto.php" style="font-family: 'Droid Sans'; font-size: 20px; color: #fff;"><b>Eliminar Producto</b></a>
                            <br>
                        </section>

                   </center>   
                    


             <?php
            ;}
            else
            { ?>
                <center>

                    <section class="form">
                    <center><h1>Inicia Sesión</h1></center>
                    
                        <form name="input" action="validar.php" method="post">
                            <input type="email" name="mail" placeholder="Mail">
                            <input type="password" name="pass" placeholder="Contraseña">
                            <input style="background: #1D6A20 " type="submit" value="Iniciar">
                            
                            <ul class="menu"><li><a href="../registro/"><b style="font-family: 'Droid Sans'; font-size: 20px;">¿Aún no eres socio de la Cámara? Inscríbete Aquí</b></a></li></ul>
                            <br><br><br>
                        </form>
                    </section>

               </center> <?php
           ; } 
        ?>



    </section>    
    
    <!--==============================footer=================================-->
    <footer>
        <div class="main">
            <div class="aligncenter">
                <span>2014 © Cámara de Comercio Minorista de Villa Alemana y Peñablanca</span>
                <span>Visitas: 155</span>
            </div>
        </div>
    </footer>
    <script type="text/javascript"> Cufon.now(); </script>
    <script type="text/javascript">
        $(window).load(function() {
            $('.slider')._TMS({
                duration:1000,
                easing:'easeOutQuint',
                preset:'slideDown',
                slideshow:7000,
                banners:false,
                pauseOnHover:true,
                pagination:true,
                pagNums:false
            });
        });
    </script>
</body>
</html>
