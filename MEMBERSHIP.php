<?php include('form1.php'); ?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0"/>
		<title>Bienvenido al "DAY SPA"</title>
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
		<!-- CSS files -->	
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">			
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css">	
		<link rel="stylesheet" type="text/css" href="style.css">	
		<!-- Script files -->
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="script.js"></script>
	</head>

<body lang="en">	
	<!-- 16:9 aspect ratio 
	<div class="embed-responsive embed-responsive-16by9">
	  <iframe class="embed-responsive-item" src="img/bg2.mp4" loop="loop"></iframe>
	</div>
	-->
	<!-- 4:3 aspect ratio 
	<div class="embed-responsive embed-responsive-4by3">
	  <iframe class="embed-responsive-item" src="img/bg2.mp4"></iframe>
	</div>
	-->
	<!-- video background -->
	<div id="bg_video" style="position:fixed;width:auto;height:4000px;z-index:-1000;">
		<video id="bg_video1" preload="auto" autoplay="autoplay" loop="loop" muted="muted"  poster="img/bg.jpg">
			<source src="img/bg2.mp4" type="video/mp4">
            <source src="img/bg2.ogg" type="video/ogg">
		</video>
	</div>	
	<!-- header -->
	<header>
		<!--
		<h3 lang="" style="font-weight:bold;font-size:30px;font-style:italic;text-align:center;vertical-align:middle;margin:0;padding:0;background-color:rgb(168,168,255);"><img src="img/HEAD.png" alt="DAY SPA" width="220px" height="125px"><div style="font-size:25px;float:right;margin-top:47px;color:#080808"><img src="img/what.jpg" alt="image whatsapp" width="40px" height="40px">&nbsp; +52(1)33 6059 5727&nbsp;&nbsp;</div></h3>
		-->
		<div id="app_dayspa" style="position:absolute;margin-left:120px;margin-top:-2px;z-index:1;font-weight:bold;"> 
			<!-- <iframe src="<iframe src="http://www.appsgeyser.com/social_widget/social_widget.php?width=300&height=160&apkName=Day SPA_6157365&simpleVersion=no" width="310" height="180" vspace="0" hspace="0" frameborder="no" scrolling="no" seamless="" allowtransparency="true"></iframe>" width="305" height="162" vspace="0" hspace="0" frameborder="no" scrolling="no" seamless="" allowtransparency="true"></iframe> -->
			<a href="http://app.appsgeyser.com/6157365/Day%20SPA"><img src="img/DAY SPA - App.png" class="image-responsive" target="_blank" alt="app image" width="200" height="162"></a>
		</div>
		<div id="top_head" style="text-align:center;font-size:100px;color:rgba(0,256,10,.9);font-family:'Georgia','Helvetica',serif;">
			<p><b><i>Day Spa</i></b></p>			
		</div>
		<div style="font-size:20px;color:#fff;margin-left:1030px;margin-top:-80px;margin-bottom:50px;z-index:1;font-weight:bold;"><img id="whats_app" src="img/what.jpg" alt="image whatsapp" width="40px" height="40px">&nbsp; +52(1)33 6059 5727&nbsp;&nbsp;</div>
	</header>
	<!-- login / signUp buttons -->
	<div style="position:absolute;margin-left:1100px;margin-top:-155px;margin-bottom:80px;z-index:1;">
		<a href="LOGIN.html#login-form"><button class="btn btn-primary">Iniciar sesion</button></a><a href="APPOINTMENTS.html#login_signUp"><button class="btn btn-default" style="margin-left:15px;">Registrate</button></a>
	</div>
	<!-- navigation menu bar -->
	<div id="logo_spa">
		<a href="#"><img src="img/logo_spa1.jpg" width="130px" height="161px"></a>
	</div>
	<nav class="navbar custom-nav navbar-default">
		<div class="container-fluid">
			<div class="row">				
				<div class="col-lg-1 col-md-1 col-sm-1">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#robot"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>							
					</div>					
				</div>
				<div class="col-lg-11 col-md-11 col-sm-11">
					<form class="navbar-form navbar-left" role="search">
						<div class="input-group" style="width:220px;">
					      	<input type="text" name="search" placeholder="Search" class="form-control">
					      	<div class="input-group-btn">
					      		<button class="btn btn-info" type="submit"><i class="glyphicon glyphicon-search"></i></button>					      		
					      	</div>					      	
					    </div>
						<!--
						<div class="form-group">
							<input type="text" name="search" placeholder="Search" class="form-control">							
						</div>
						<button type="submit" class="btn btn-info">Submit</button>
						-->
					</form>					
					<div class="collapse navbar-collapse" id="robot">
						<ul class="nav navbar-nav navbar-right">
							<li role="presentation" class="active"><a href="index.html">INICIO</a></li>
							<li role="presentation" class="dropdown"><a href="APPOINTMENTS.html" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">NOMBRAMIENTOS<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="APPOINTMENTS.html#login_signUp">Iniciar Sesion / Registrarse </a></li>			
									<li><a href="APPOINTMENTS1.html#appointment">Obtener Citas</a></li>							
									<li><a href="APPOINTMENTS1.html#timing">Horarios de Programacion</a></li>					
									<li><a href="APPOINTMENTS.html#feedback">Realimentacion</a></li>							
								</ul>
							</li>
							<li role="presentation" class="dropdown"><a href="SERVICES.html" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">MASAJES<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="SERVICES.html#Massage_Relajante">Relajantes</a></li>
									<!--<li role="separator" class="divider"></li>-->
									<li><a href="SERVICES.html#Massage_Reductivo">Reductivos</a></li>
									<li><a href="SERVICES.html#Massage_Craneal">Craneal</a></li>
									<li><a href="SERVICES.html#Massage_Shiatsu">Shiatsu</a></li>
									<li><a href="SERVICES.html#Massage_Piernas">Piernas Cansadas</a></li>
									<li><a href="SERVICES.html#Massage_Descontracturantes">Descontracturantes</a></li>
									<li><a href="SERVICES.html#Massage_Anti-Celulitis">Anti-Celulitis</a></li>
									<li><a href="SERVICES.html#Massage_Levantamiento">Levantamiento de Gluteos</a></li>			
								</ul>
							</li>							
							<li role="presentation" class="dropdown"><a href="ESTETICA.html" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ESTETICA<span class="caret"></span></a>
								<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel">
									<li><a href="ESTETICA.html#Corte_Cabello">Corte de Cabello</a></li>
									<li><a href="ESTETICA.html#Maquillaje_Prof">Maquillaje Profecional</a></li>
									<li><a href="ESTETICA.html#Maquillaje_Express">Maquillaje Express</a></li>
									<li><a href="ESTETICA.html#Planchado">Planchado</a></li>
									<li><a href="ESTETICA.html#Chinos">Chinos</a></li>											
								</ul>
							</li>
							<li role="presentation" class="dropdown"><a href="UNAS.html" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">UNAS<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="UNAS.html#Acrilico">Acrilico</a></li>
									<li><a href="UNAS.html#Gelish_Manos">Gelish Manos</a></li>
									<li><a href="UNAS.html#Gelish_Pies">Gelish Pies</a></li>
									<li><a href="UNAS.html#Manicure">Manicure</a></li>
									<li><a href="UNAS.html#Padicure">Padicure</a></li>											
								</ul>
							</li>
							<li role="presentation" class="dropdown"><a href="FACIALES.html" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">FACIALES<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="FACIALES.html#Limpieza_Profundo">Limpieza Profundo</a></li>
									<li><a href="FACIALES.html#Hidratacion_al_Colageno">Hidratacion al Colageno</a></li>
									<li><a href="FACIALES.html#Anti-Acne">Anti-Acne</a></li>
									<li><a href="FACIALES.html#Control_de_Grasa">Control de Grasa</a></li>
									<li><a href="FACIALES.html#Nutritivo_Regenerante">Nutritino Regenerate</a></li>
									<li><a href="FACIALES.html#Reafirmante_Facial">Reafirmante Facial</a></li>
									<li><a href="FACIALES.html#Efecto_Botox">Efecto Botox</a></li>								
								</ul>
							</li>
							<li role="presentation" class="dropdown"><a href="SERVICES.html" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SERVICIO<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="SERVICES.html#Massage_Relajante">Masajes</a></li>
									<li><a href="ESTETICA.html#Corte_Cabello">Estetica</a></li>
									<li><a href="UNAS.html#Acrilico">Unas</a></li>
									<li><a href="FACIALES.html#Limpieza_Profundo">Faciales</a></li>								
								</ul>
							</li>						
							<li role="presentation" class="dropdown"><a href="GALLERY.html" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">GALERIA<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="GALLERY.html#massages">Galeria de Masajes</a></li>			
									<li><a href="GALLERY.html#estetica">Galeria de Estetica</a></li>
									<li><a href="GALLERY.html#Unas">Galeria de Unas</a></li>
									<li><a href="GALLERY.html#faciales">Galeria de Faciales</a></li>
									<li><a href="PRODUCTS.html">Todos los Productos</a></li>					
								</ul>
							</li>
							<li role="presentation" class="dropdown"><a href="CONTACT US.html" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CONTACTENOS<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="CONTACT US.html#addr">Detalles de Contacto</a></li>
									<li><a href="Home.html#support">Cualquier Soporte</a></li>
									<li><a href="index.html#jumbo">Acerca de 'Day SPA'</a></li>	
									<li><a href="Terms.html">Terminos y Condiciones</a></li>
									<li><a href="Policies.html">Politica de Privacidad</a></li>				
								</ul>
							</li>
						</ul>
					</div>
				</div>			
			</div>	
		</div>
	</nav>

	<!-- Marquee -->
	<marquee behavior="alternate" scrollamount="5" loop="" bgcolor="yellow"><h3 style="color:rgba(256,0,0,0.8);font-weight:bolder;font-family:sans-serif;height:35px;line-height: 30px;"> $..... PROMOCIONES ..... PROMOCIONES .... .. PROMOCIONES ...... $</h3></marquee><br><br><br><br><br><br><br><br>	
	<!-- scrool button to top -->
	<a id="scrollToTop" class="hide" href="#"><i class="fa fa-arrow-circle-up"></i></a>


	<!-- Membership Portal -->
	<div id="membership" class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<?php if (isset($_SESSION['success'])): ?>
				<div class="error success">
					<h3>
						<?php
							echo $_SESSION['success'];
							unset($_SESSION['success']);
						?>
					</h3>
				</div>
				<?php endif ?>

				<?php if (isset($_SESSION['email'])): ?>
					<p>Welcome <strong><?php echo $_SESSION['email']; ?></strong></p>
					<p><a href="" style="color:red;">Logout</a></p>
				<?php endif ?>
			</div>			
		</div>				
	</div>



	<!-- footer-border -->
	<div style="width:100%;height:5px;background-color:darkgrey;"></div>	
	<!-- Footer -->
	<footer>
		<div class="container-fluid">
			<div  class="row" id="foot" style="background:lightgrey;color:#080808;">
				<div class="col-lg-3 col-md-3 col-sm-3 social">
					<p style="font-weight:bold;text-decoration:underline;font-size:20px;padding-top:19px;">MANTENTE CONECTADO&nbsp;<span><img src="img/glyph.png" class="image-responsive"></span></p>
					<div>
						<a class="instagram" href="https://www.instagram.com/dayizspa2018/" target="_blank"><img src="img/icons8-instagram.png" class="image-responsive">&nbsp;Instagram</a><br><br>
						<a class="facebook" href="https://www.facebook.com/REDUCTIVOSS/" target="_blank"><img src="img/icons8-facebook.png" class="image-responsive">&nbsp;Facebook</a><br><br>
						<a class="twitter" href="https://twitter.com/dayizspa2017" target="_blank"><img src="img/icons8-twitter.png" class="image-responsive">&nbsp;Twitter</a><br><br>
						<a class="google-plus" href="https://plus.google.com/111431151918177152783" target="_blank"><img src="img/icons8-google-plus.png" class="image-responsive">&nbsp;Google-Plus</a><br><br>
						<a class="whatsapp" href="#whats_app"><img src="img/icons8-whatsapp.png" class="image-responsive">&nbsp;Whatsapp</a><br><br>						
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 ads">
					<h3 style="font-weight:bolder;">PRODUCTOS</h3>
					<a href="PRODUCTS.html#carbones">Carbones</a><br>
					<a href="PRODUCTS.html#cremas">Cremas</a><br>
					<a href="PRODUCTS.html#otras">Otros</a><br>
					<br>
					<h3 style="font-weight:bolder;">SERVICIOS</h3>
					<a href="SERVICES.html#Massage_Relajante">Masajes</a><br>
					<a href="ESTETICA.html#Corte_Cabello">Estetica</a><br>
					<a href="UNAS.html#Acrilico">Unas</a><br>
					<a href="FACIALES.html#Limpieza_Profundo">Faciales</a>					
					<br><br>
					<h3 style="font-weight:bolder;">INFORMACIONES</h3>
					<a href="CONTACT US.html#addr">Enviar Formulario</a><br>
					<a href="LOGIN.html#login-form">Iniciar sesion</a><br>
					<a href="APPOINTMENTS.html#login_signUp">Registrarse</a><br>
					<a href="APPOINTMENTS.html#feedback">Realimentacion</a><br>
					<a href="APPOINTMENTS1.html#appointment">Citas</a><br>
					<a href="FAQs.html">FAQs</a><br>
					<a href="Read.html#readMore">Blogs</a><br>
					<a href="LOGIN.html#mapu">Mapas del Sitio</a><br><br>			
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 pages">
					<h3 style="font-weight:bolder;">EMPRESA</h3>					
					<a href="Home.html#addr">Contactos</a><br>
					<a href="Terms.html#term">Terminos y Condiciones</a><br>
					<a href="Policies.html#policy">Politica de Privacidad</a><br>
					<a href="index.html">Inicio</a><br>	
					<a href="GALLERY.html#thumbnails">Galeria</a><br>
					<a href="https://www.facebook.com/REDUCTIVOSS/" target="_blank">Socials</a><br>
					<a href="SERVICES.html">Servicios</a><br>	
					<a href="CONTACT US.html">Sobre Nosotros</a><br>
					<a href="SPA.html#addr">Cualquier Soporte</a>			
					<br><br><br><br>
					<h3 style="font-weight:bolder;">PROXIMAMIENTE</h3>
					<a href="SERVICES.html#EM" style="background:yellow;">Electrodos</a>	
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-3 contact">
					<p style="font-weight:bold;font-weight:bold;text-decoration:underline;font-size:22px;padding-top:19px;">CONTACTENOS</p>
					<form>
						<div class="form-group">
							<label for="text">NOMBRE DE PILA:</label>
						    <input type="text" class="form-control" placeholder="NOMBRE DE PILA" name="firstName">
						</div>
						<div class="form-group">
							<label for="text">APELLIDO:</label>
						    <input type="text" class="form-control" placeholder="APELLIDO" name="lastName">
						</div>
						<div class="form-group">
							<label for="email">CORREO ELECTRONICO:</label>
						    <input type="email" class="form-control" placeholder="abc@xyz.com" name="email">
						</div>						    
					    <div>
					    	<label for="comment">COMENTARIOS:</label><br>
					    	<textarea placeholder="" maxlength="1000" style="width:300px;height:100px;"></textarea>
					    </div>
					    <br>
					    <div>
					    	<button type="submit" class="btn btn-success">ENVIAR</button>					    	
					    </div><br>					  							
					</form>									
				</div>					
			</div>		
		</div>
		<div id="mapu">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1320.089455375012!2d-103.27673267679847!3d20.63795174573546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428b38fbc31f4c5%3A0x18f5257ac080c351!2s&#39;Day+SPA&#39;!5e0!3m2!1sen!2smx!4v1513369548009" width="1349" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>		
		<div style="width:100%;height:70px;background-color:rgba(0,256,0,0.7);text-align:center;padding-top:12px;margin-top:-5px;font-size:16px;">
			<p style="color:#fff;">Copyright &copy; reservado por <b><i>Dayana Lopez</i></b> on (NOV 2017). &nbsp;Location:- Tonala (Jalisco, Mexico)</p>
			<p style="color:#fff;">Vea nuestros <a href="Terms.html">Terminos &amp; Condiciones </a>y<a href="Policies.html"> Politicas de Privacidad.</a></p>
		</div>
	</footer>

</body>
</html>