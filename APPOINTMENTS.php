<!DOCTYPE html>
<html lang="en">

	<head>
		<meta http-equi="Content-Type" content="text/html; charset=utf-8">
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
                <div id="app_dayspa" style="position:absolute;margin-left:135px;margin-top:-2px;z-index:1;font-weight:bold;"> 
						<!-- <iframe src="<iframe src="http://www.appsgeyser.com/social_widget/social_widget.php?width=300&height=160&apkName=Day SPA_6157365&simpleVersion=no" width="310" height="180" vspace="0" hspace="0" frameborder="no" scrolling="no" seamless="" allowtransparency="true"></iframe>" width="305" height="162" vspace="0" hspace="0" frameborder="no" scrolling="no" seamless="" allowtransparency="true"></iframe> -->
						<a href="https://www.amazon.com/DAY-SPA-Sure-be-healthy/dp/B0788HM3WT/ref=sm_n_ma_dka_MX_pr_ran_nodl?adId=B0788HM3WT&creativeASIN=B0788HM3WT&linkId=45491a5dba5da38402ec615b9ad2ff98&tag=dayspa2017-20&linkCode=w58&ref-refURL=https%3A%2F%2Fwww.nileshdayana.cf%2FAPPOINTMENTS.html&slotNum=0&imprToken=DV2hsNdPBHmzPkpJB4s.-w&adType=smart&adMode=manual&adFormat=card&impressionTimestamp=1513469346700" target="_blank"><img src="img/DAY SPA - App.png" class="image-responsive"  alt="app image" width="200" height="162"></a>
		</div>
		<div id="top_head" style="text-align:center;font-size:100px;color:rgba(0,256,10,.9);font-family:'Georgia','Helvetica',serif;">
			<p><b><i>Day Spa</i></b></p>			
		</div>
		<div style="font-size:20px;color:#fff;margin-left:1030px;margin-top:-80px;margin-bottom:50px;z-index:1;font-weight:bold;"><img src="img/what.jpg" alt="image whatsapp" width="40px" height="40px">&nbsp; +52(1)33 6059 5727&nbsp;&nbsp;</div>
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
									<li><a href="GALLERY.html#Uñas">Galeria de Unas</a></li>
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
	<marquee behavior="alternate" scrollamount="5" loop="" bgcolor="yellow"><h3 style="color:rgba(256,0,0,0.8);font-weight:bolder;font-family:sans-serif;height:35px;line-height: 30px;"> $..... PROMOCIONES ..... PROMOCIONES .... .. PROMOCIONES ...... $</h3></marquee>	
	<!-- scrool button to top -->
	<a id="scrollToTop" class="hide" href="#"><i class="fa fa-arrow-circle-up"></i></a>

	<!-- setions ,, here each sec leave 2 cols-->
	<div style="background:url() repeat;margin-top:20px;">
		<br><br><br><br><br><br><br>	
		<section id="login_signUp">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<a href="#"><img src="img/spa.jpg" alt="spa image" class="image-responsive" width="560px" height="550px" opacity:0.85;"></a>
						<!-- text or button inside image -->
						<div class="button-contet">
							<button class="btn btn-success" style="position:relative;width:30%;margin-top:-85%;margin-left:35%;padding:10px;opacity:.7;"><a href="FAQs.html" style="color:#fff;"><b>LEE EL ARTICULO..</b></a></button>
						</div>
						<div style="color:#fff;">
							<br>
							<h3 style="background:rgba(256,0,0,0.4);"><b>LAS PREGUNTAS FRECUENTES </b><a href="index.html#jumbo">'Day SPA'</a> :</h3>
							<p style="font-size:20px;">Segun la conveniencia de nuestros clientes respetados, por la presente lista de preguntas frecuentes sobre nuestros servicios o productos, es decir, Masajes Relajante, Reductivos, Shiatsu, Craneal, etc. Haga clic en el boton para ver las preguntas frecuentes relacionadas con el <a href="index.html#jumbo">'Day SPA'</a> masajes...... &nbsp;<button class="btn btn-primary"><a href="FAQs.html" style="color:#fff;">LEE MAS ></a></button></p>		
						</div>
					</div>
					<div class="col-md-6">
						<div style="width:600px;max-height:auto;background-color:white;padding:30px;opacity:0.85;color:black;margin-bottom:40px;">
							<div align="center">
								<h1 style="font-weight: bolder;padding:20px 0;"><i>Crea Tu Cuenta Gratuita</i></h1>
	        					<div class="signup-form__social-buttons">
						            <a class="btn btn-primary btn-lg" href="https://www.linkedin.com/uas/login?">
						              <i class="fa fa-lg fa-linkedin-square mr-xs"></i> LinkedIn</a>            
						            <a class="btn btn-info btn-lg" href="https://www.facebook.com/">
						              <i class="fa fa-lg fa-facebook-square mr-xs"></i> Facebook</a>
						            <a class="btn btn-danger btn-lg" href="https://plus.google.com/discover?">
						              <i class="fa fa-lg fa-google-plus-square mr-xs"></i> Google+</a> 
				        		</div>
							</div>
							<br><br>							
				        	<fieldset>
				        		<legend align="center"></legend><br>
				        		<form action="form1.php" method="post" autocomplete="on">
                                    <!-- display validation errors here -->
                                    <?php include('errors.php'); ?>
									<div class="form-group">
										<label for="First_Name">NOMBRE DE PILA:</label>
	    								<input type="text" class="form-control" placeholder="Nombre De Pila" name="firstName" value="<?php echo $value1 ?>" id="fNmae" required>				
									</div>
									<div class="form-group">
										<label for="Last_Name">APELLIDO:</label>
	    								<input type="text" class="form-control" placeholder="Apellido" name="lastName" value="<?php echo $value2 ?>" id="lname" required>					
									</div>
									<div class="form-group">
										<label for="email">DIRECCION DE CORREO ELECTRONICO:</label>
	    								<input type="email" class="form-control" placeholder="abc@xyz.com" name="email" value="<?php echo $value3 ?>" id="email" required>								
									</div>
									<div class="form-group">
										<label for="pwd">CONTRASENA:</label>
	    								<input type="password" class="form-control" placeholder="Contrasena" name="password" id="pwd" required>							
									</div>	
									<div class="form-group">
										<label for="pwd">CONFIRMAR CONTRASENA:</label>
	    								<input type="password" class="form-control" placeholder="Confirmar Contrasena" name="password1" id="pwd" required>							
									</div>
							                <div class="form-group">
										<label for="avatar">SELECT PROFILE IMAGE:</label>
	    								<input type="file" class="form-control" accept="image/*" name="avatar" id="avatar" required>							
									</div>
									<div class="checkbox">
										<label for="chkbox"><input type="checkbox" name="remember" value="me"> Recuerdame</label>				
									</div>
									<button class="btn btn-lg btn-warning" name="submit" style="padding:15px 210px;">ENVIAR</button>
								</form><br><br>	
								<div>
									<p>Ya tienes una cuenta? <a href="LOGIN.html">Iniciar sesion</a></p>
									<p>Al registrarte aceptas nuestros <a href="Terms.html">Terminos de Servicio</a></p>
								</div>		            		
			          		</fieldset>	 						
						</div>												
					</div>
				</div>
			</div>		
		</section><br><br><br>	
	</div>

<div style="margin-left:160px;">
<script type="text/javascript">
amzn_assoc_tracking_id = "dayspa2017-20";
amzn_assoc_ad_mode = "manual";
amzn_assoc_ad_type = "smart";
amzn_assoc_marketplace = "amazon";
amzn_assoc_region = "US";
amzn_assoc_design = "enhanced_links";
amzn_assoc_asins = "B0788HM3WT";
amzn_assoc_placement = "adunit";
amzn_assoc_linkid = "45491a5dba5da38402ec615b9ad2ff98";
</script>
<script src="//z-na.amazon-adsystem.com/widgets/onejs?MarketPlace=US"></script>
<script type="text/javascript">
amzn_assoc_tracking_id = "dayspa2017-20";
amzn_assoc_ad_mode = "manual";
amzn_assoc_ad_type = "smart";
amzn_assoc_marketplace = "amazon";
amzn_assoc_region = "US";
amzn_assoc_design = "enhanced_links";
amzn_assoc_asins = "B01IE9VOJY";
amzn_assoc_placement = "adunit";
amzn_assoc_linkid = "fa649fa2cf1f3f9beff75db50763f65a";
</script>
<script src="//z-na.amazon-adsystem.com/widgets/onejs?MarketPlace=US"></script>
</div>
<br><br>

	<div style="background:url() repeat;">
		<section id="feedback">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div style="width:100%;height:auto;background-color:#fff;margin:50px 0;opacity:.7;padding:30px;font-size:20px;border-radius:50px;">
							<div style="background-color:rgba(100,256,0,0.6);text-align:left;font-size:35px;"><b>Seccion de Comentarios : - </b></div><br>
							<form action="form3.php" method="post">
								<div class="form-group">
									<label for="feedback" class="control-label lead">Por favor, envie sus comentarios sobre los servicios de <a href="index.html#jumbo">'Day SPA'</a> :</label><br>
									<input type="radio" name="feedback" value="Excellent" checked> &nbsp;Excelente<br>
									<input type="radio" name="feedback" value="very_good"> &nbsp;Muy bien<br>
									<input type="radio" name="feedback" value="good"> &nbsp;Bueno<br>
									<input type="radio" name="feedback" value="poor"> &nbsp;Pobre<br>
									<input type="radio" name="feedback" value="very_poor"> &nbsp;Muy pobre<br>
									<input type="radio" name="feedback" value="no_rating"> &nbsp;Sin evaluar<br><br>
									<button class="btn btn-primary btn-lg" onclick="alert('Thank You !! Your feedback has submitted for review.')">Enviar Comentarios</button>
								</div>
							</form><br><hr>
							<div>
								<h3 style="background-color:rgba(256,0,0,0.5);padding:13px 0;"><i><b>Opiniones de clientas para 'Day SPA' servicios :-</b></i></h3><br>
								<!-- Review-Stars Bar with user counts -->
								<div id="opinion" style="font-size:16px;">
									Excelente :<br><progress value="2000" min="0" low="" high="" max="10000"></progress><br>
									Muy bien :<br><progress value="4000" min="0" low="" high="" max="10000"></progress><br>
									Bueno :<br><progress value="300" min="0" low="" high="" max="10000"></progress><br>
									Pobre :<br><progress value="20" min="0" low="" high="" max="10000"></progress><br>
									Muy pobre :<br><progress value="0" min="0" low="" high="" max="10000"></progress><br>
									Sin evaluar :<br><progress value="0" min="0" low="" high="" max="10000"></progress><br><br>
								</div>
							</div>
						</div>						
					</div>
				</div>
			</div>
		</section><br><br><br><br>			
	</div>	

	<!-- asidebar -->


	<!-- end of asidebar -->
	
	<!-- footer-border -->
	<div style="width:100%;height:5px;background-color:darkgrey;"></div>	
	<!-- Footer -->
	<footer>
		<div class="container-fluid">
			<div  class="row" id="foot" style="background:lightgrey;color:#080808;">
				<div class="col-lg-3 col-md-3 col-sm-3 social">
					<p style="font-weight:bold;text-decoration:underline;font-size:20px;padding-top:19px;">MANTENTE CONECTADO&nbsp;<span><img src="img/glyph.png" class="image-responsive"></span></p>
					<div>
						<a class="youtube" href="#foot" target=""><img src="img/icons8-youtube.png" class="image-responsive">&nbsp;Youtube</a><br><br>
						<a class="facebook" href="https://www.facebook.com/REDUCTIVOSS/" target="_blank"><img src="img/icons8-facebook.png" class="image-responsive">&nbsp;Facebook</a><br><br>
						<a class="twitter" href="https://twitter.com/i/moments/934354696537559041?from_editor=true" target="_blank"><img src="img/icons8-twitter.png" class="image-responsive">&nbsp;Twitter</a><br><br>
						<a class="google-plus" href="https://plus.google.com/s/%40Day%20SPA%20(Rio%20Nilo%20-%2044500)%20!!/posts" target="_blank"><img src="img/icons8-google-plus.png" class="image-responsive">&nbsp;Google-Plus</a><br><br>
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
					<a href="UÑAS.html#Acrilico">Unas</a><br>
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
					<a href="SERVICES.html#EM" style="background:yellow;">Electrodes</a>	
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-3 contact">
					<p style="font-weight:bold;font-weight:bold;text-decoration:underline;font-size:22px;padding-top:19px;">CONTACTENOS</p>
					<form action="#" method="post" autocomplete="on">
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
					    	<textarea placeholder="" maxlength="1000" name="comment" style="width:300px;height:100px;"></textarea>
					    </div>
					    <br>
					    <div>
					    	<button type="submit" class="btn btn-success" name="submit">ENVIAR</button>					    	
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
	