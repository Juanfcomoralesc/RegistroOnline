<?php
session_start();

?><!DOCTYPE html>


<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en" class="no-js"> <!--<![endif]-->
<head>

    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">	<title>UABC Propedéutico</title>
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
	<meta name="author" content="" />

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    


  	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/normalize.css" />
	<link rel="stylesheet" href="css/1140.css" />
    <link rel="stylesheet" href="css/style.css" />
    
    <link rel="stylesheet" href="css/flexslider.css" />
    <link rel="stylesheet" href="css/color.css" />
	<link rel="stylesheet" href="css/layout.css" />
    <link rel="stylesheet" href="css/prettyPhoto.css" />
    

	<link rel="shortcut icon" href="images/favicon.ico" />
    
    
	<style>

.alerts p {
  /* quick and dirty hack added by me, you may remove it if not needed */
  margin: 0; padding: 0;
}

.alert-message.danger, .alert-message.danger:hover, .alert-message.error, .alert-message.error:hover, .alert-message.success, alert-message.success:hover, .alert-message.info, .alert-message.info:hover {
  color: #ffffff;
}
.alert-message .close {
  font-family: Arial, sans-serif; 
  line-height: 18px;
}
.alert-message.danger, .alert-message.error {
  background-color: #c43c35;
  background-repeat: repeat-x;
  
  background-image: -khtml-gradient(linear, left top, left bottom, from(#ee5f5b), to(#c43c35));
  background-image: -moz-linear-gradient(top, #ee5f5b, #c43c35);
  background-image: -ms-linear-gradient(top, #ee5f5b, #c43c35);
  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ee5f5b), color-stop(100%, #c43c35));
  background-image: -webkit-linear-gradient(top, #ee5f5b, #c43c35);
  background-image: -o-linear-gradient(top, #ee5f5b, #c43c35);
  background-image: linear-gradient(top, #ee5f5b, #c43c35);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ee5f5b', endColorstr='#c43c35', GradientType=0);
  
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  border-color: #c43c35 #c43c35 #882a25;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
}
.alert-message.success {
  background-color: #57a957;
  background-repeat: repeat-x;
  
  background-image: -khtml-gradient(linear, left top, left bottom, from(#62c462), to(#57a957));
  background-image: -moz-linear-gradient(top, #62c462, #57a957);
  background-image: -ms-linear-gradient(top, #62c462, #57a957);
  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #62c462), color-stop(100%, #57a957));
  background-image: -webkit-linear-gradient(top, #62c462, #57a957);
  background-image: -o-linear-gradient(top, #62c462, #57a957);
  background-image: linear-gradient(top, #62c462, #57a957);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#62c462', endColorstr='#57a957', GradientType=0);
  
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  border-color: #57a957 #57a957 #3d773d;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
}
.alert-message.info {
  background-color: #339bb9;
  background-repeat: repeat-x;
  
  background-image: -khtml-gradient(linear, left top, left bottom, from(#5bc0de), to(#339bb9));
  background-image: -moz-linear-gradient(top, #5bc0de, #339bb9);
  background-image: -ms-linear-gradient(top, #5bc0de, #339bb9);
  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #5bc0de), color-stop(100%, #339bb9));
  background-image: -webkit-linear-gradient(top, #5bc0de, #339bb9);
  background-image: -o-linear-gradient(top, #5bc0de, #339bb9);
  background-image: linear-gradient(top, #5bc0de, #339bb9);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#5bc0de', endColorstr='#339bb9', GradientType=0);
  
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  border-color: #339bb9 #339bb9 #22697d;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
}

:root .alert-message {
  border-radius: 0 \0;
}
.close {
  float: right;
  color: #000000;
  font-size: 20px;
  font-weight: bold;
  line-height: 13.5px;
  text-shadow: 0 1px 0 #ffffff;
  filter: alpha(opacity=25);
  -khtml-opacity: 0.25;
  -moz-opacity: 0.25;
  opacity: 0.25;
}
.close:hover {
  color: #000000;
  text-decoration: none;
  filter: alpha(opacity=40);
  -khtml-opacity: 0.4;
  -moz-opacity: 0.4;
  opacity: 0.4;
}
.alert-message {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 13px;

  position: relative;
  padding: 7px 15px;
  margin-bottom: 18px;
  color: #404040;

  background-color: #eedc94;
  background-repeat: repeat-x;

  background-image: -khtml-gradient(linear, left top, left bottom, from(#fceec1), to(#eedc94));
  background-image: -moz-linear-gradient(top, #fceec1, #eedc94);
  background-image: -ms-linear-gradient(top, #fceec1, #eedc94);
  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #fceec1), color-stop(100%, #eedc94));
  background-image: -webkit-linear-gradient(top, #fceec1, #eedc94);
  background-image: -o-linear-gradient(top, #fceec1, #eedc94);
  background-image: linear-gradient(top, #fceec1, #eedc94);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fceec1', endColorstr='#eedc94', GradientType=0);
  
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  border-color: #eedc94 #eedc94 #e4c652;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
  border-width: 1px;
  border-style: solid;
  
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.25);
  -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.25);
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.25);
}
.alert-message .close {
  margin-top: 0;
}
.alert-message a {
  font-weight: bold;
  color: #404040;
  text-decoration: none;
}
.alert-message.danger p a, .alert-message.error p a, .alert-message.success p a, .alert-message.info p a {
  color: #ffffff;
}
.alert-message p a:hover {
  text-decoration: underline;
}
.alert-message p {
  margin-bottom: 0;
}</style>
	
</head>


<body>
<div id="subbody">
	<div id="outercontainer">
    
        <div id="outerheader">
        	 <div id="headertext" class="container ">
            	<div class="row">
				<form method="get" id="topsearchform" action="generar/index.php">
                    <div class="searcharea">
                        <input type="text" name="registro" id="s" placeholder="Buscar registro ..." value="" />
                        <input type="submit" class="submit" id="searchsubmit" value="" />
                    </div>
                </form>
                <ul class="sn">
                    <li><a href="#" style="background-image:url(images/social/facebook.png)"><span class="icon-img" style="background-image:url(images/social/facebook.png)"></span></a></li>
                    <li><a href="#" style="background-image:url(images/social/twitter.png)"><span class="icon-img" style="background-image:url(images/social/twitter.png)"></span></a></li>
                    <li><a href="#" style="background-image:url(images/social/youtube.png)"><span class="icon-img" style="background-image:url(images/social/youtube.png)"></span></a></li>
				</ul>                
				<div class="clearfix"></div>
            	</div>
            </div>
        	<div id="top" class="container">
                <header class="row">
                    <div id="logo">	

<!----				
                    <div id="logoimg">
                        <a href="index-2.html" title="Propedéutico" >
                            <img src="images/logo.png" alt="Propedéutico" />
                        </a>
                    </div>
					
					
					
--->					
					</div>
                    <section id="navigation">
                        <nav>
                        <ul id="topnav" class="sf-menu">
                        	<li><a href="index.php">Inicio</a>
                                
                            </li>
                            <li><a href="http://fca.mxl.uabc.mx">Pagina Facultad</a>
                                <ul class="sub-menu">
                                    <li ><a href="http://fca.mxl.uabc.mx/fca/licenciaturas.php">Licenciaturas</a></li>
                                    <li><a href="http://fca.mxl.uabc.mx/fca/institucional.php">Institucional</a></li>
                                    <li ><a href="http://fca.mxl.uabc.mx/fca/programaapoyo.php">Programas de apoyo</a></li>
                                </ul>
                            </li>
                           
                            <li><a href="#">Otros</a>   
                            </li>
                       
                       
                        </ul>                        
						</nav>
                        <div class="clearfix"></div>
                    </section>
                    <div class="clearfix"></div>
                </header>
            </div>
        </div>
    
        
	
        <div id="outerafterheader" style="background:url(images/content/header.jpg) no-repeat bottom center;">
            <div class="container">
                <div id="afterheader" class="row">
                    <section id="aftertheheader">
						<div class="breadcrumb twelvecol">
                        	Exámen Propedeutico:  &raquo; <strong>Bienvenido alumno de nuevo ingreso!</strong>
                        </div>
                        <div class="clearfix"></div>						
                        <h1 class="pagetitle">Propedéutico</h1>                    
                    </section>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
  
        
      
        <div id="outermain">
        	<div class="container">
                <section id="maincontent" class="row">
                	<div class="twelvecol">
            
                     <p>Antes de iniciar formalmente tu primer semestre deberás asistir al Curso Propedéutico que te ayudará a reforzar los conocimientos elementales de matemáticas y al Curso de Inducción que te ayudará a conocer aspectos importantes de la Universidad y la Facultad de Ciencias Administrativas. Éstos cursos son de carácter <strong>obligatorio.</strong></p>
                    <div class="separator"></div>
                    <div class="sixcol ">
                        <div class="if-heading">
                            <h3><span>Registro exámen</span></h3>
                            <div id="contactform">
							
		






  
  
  			
					<?php

					
					
                     if ($_SESSION['datos'][4]==1 || $_SESSION['datos'][4]==2 || $_SESSION['datos'][4]==3) {echo '
					 <div class="alert-message danger">
                     <a class="close" href="index.php">×</a>
                     <p><strong>Error!</strong> has ingresado caracteres no permitidos.</p>
                     </div>
					 
					 ';   $x=2;}
					
					
                
                     if(isset($_SESSION['datos']) && $_SESSION['datos'][4]==4) {echo '
					
					 <div class="alert-message danger">
                     <a class="close" href="index.php">×</a>
                     <p><strong>Error!</strong> Favor de seleccionar un turno.</p>
                     </div>
                     '; $x=2;} 

				
                     if($_SESSION['exito'][0]=="fuckyeah!") {echo '
					 <div class="alert-message info">
                     <a class="close" href="index.php">×</a>
                     <p><strong>Registro exitoso!</strong> su numero de registro es <strong>'.$_SESSION['exito'][1].'</strong> hacer <a  href="generar/index.php?registro='.$_SESSION['exito'][1].'">click aqui</a > para generar reporte</p>
                     </div>
					 
					 '; $x=2;}
					 
					 /*error*/
                     if(isset($error) && $error==1) {echo '
					 <div class="alert-message danger">
                     <a class="close" href="index.php">×</a>
                     <p><strong>Error!</strong> el numero de registro no es valido, intente de nuevo.</p>
                     </div>
					 
					 '; $x=2;}
					 
					 
				
                     if(isset($_SESSION['datos']) && $_SESSION['datos']=="xss") {echo '
					 <div class="alert-message danger">
                     <a class="close" href="index.php">×</a>
                     <p><strong>Error!</strong> has ingresado caracteres no permitidos.</p>
                     </div>
					 
					 ';}
					 
					 /*si un usuario ya existe*/
                     if(isset($_SESSION['datos']) && $_SESSION['datos']=="existe") {echo '
					 <div class="alert-message danger">
                     <a class="close" href="index.php">×</a>
                     <p><strong>Ya existe un registro</strong>, no es necesario registrarte de nuevo.</p>
                     </div>
					 
					 ';}
					 
					 
					 
					
					 $m="<strong>Lo sentimos!</strong> turno matutino agotado, favor de escoger uno nuevo.";
					 $v="Lo sentimos! turno intermedio agotado, favor de escoger uno nuevo.";
					 $i="Lo sentimos! turno vespertino agotado, favor de escoger uno nuevo.";
                     if(isset($_SESSION['datos']) && $_SESSION['datos'][4]=="selleno") {echo '
					 <div class="alert-message danger">
                     <a class="close" href="index.php">×</a>
                     <p>'; if($_SESSION['datos'][5]=="mat"){echo $m;}elseif($_SESSION['datos'][5]=="inter"){echo $v;}else{echo $i;} echo'</p>
                     </div>';   $x=2;}
					 
					
?>
							
							
                                  <form id="contact" method="POST" action="validacion.php">
                                      <fieldset>
                                          <span class="error" id="name_error">Ingrese su nombre</span>
                                          <span class="error" id="apaterno_error">Ingrese su apellido paterno</span>
                                          <span class="error" id="amaterno_error">Ingrese su apellido materno</span>
                                          <span class="error" id="turno_error">Seleccione un turno</span>
										  
                                          <label for="name" id="name_label">Ingrese su nombre:</label>
                                          <input type="text" name="nombre" id="name" size="50" <?php if($x==2){ echo 'value="'.$_SESSION["datos"][0].'"';} ?> class="text-input" />
										  
                                          <label for="apaterno" id="apaterno">Apellido paterno:</label>
                                          <input type="text" name="apaterno" id="apaterno" size="50" <?php if($x==2){ echo 'value="'.$_SESSION["datos"][1].'"';} ?> class="text-input" />
										  
                                          <label for="amaterno" id="amaterno">Apellido materno:</label>
                                          <input type="text" name="amaterno" id="amaterno" size="50"  <?php if($x==2){ echo 'value="'.$_SESSION["datos"][2].'"';} ?> class="text-input" />

                                          <label for="turno" id="turno">Seleccione un turno:</label><br>
                                        
										
										  <select name="turno" id="turno" class="text-input" style="width: 150px; height:30px; "> 
<option ></option>
<option value="1" >Matutino</option>
<option value="2">Intermedio</option>
<option value="3">Vespertino</option> 
</select><br>
                                          <br />
										  
										  <!---->
<input type="hidden" name="unposteo" value=<?php echo "'".md5(uniqid(rand(), true))."'" ?> >
<!---->
										  
										  
                                          <input type="submit" name="B325WMSTR" class="button" id="submit_btn" value="Registrar"/>
                                      </fieldset>
                                  </form>
                            </div>
                        </div>
                    </div>
                    <div class="sixcol last">
                        <div class="if-heading">
                            <h3><span>ubicación</span></h3>
                        </div>
                        <div class="frameimg">
                       <iframe style="width:100%; height:250px; border:0; margin:0px; padding:0px; " src="https://maps.google.com/maps/ms?msa=0&amp;msid=200528014498199250349.0004d3332e17063117947&amp;hl=es&amp;ie=UTF8&amp;t=h&amp;z=17&amp;output=embed"></iframe></div>
                    <div class="separator"></div>
                    
                        <div class="sixcol">
                            <div class="if-heading">
                                <h4><span>Facultad de Ciencias A.</span></h4>
                            </div>
                            <ul>
                                <li class="clearfix contact_address">
                                    <div class="left"><span class="lambda-address"></span></div>
                                    <div class="description">Blvd. Río Nuevo y Eje Central sin numero
                                    (Mexicali Baja California).</div>
                                </li>
                                <li class="clearfix contact_phone" >
                                    <div class="left"><span class="lambda-phone"></span></div>
                                    <div class="description">+52 (686)5823377</div>
                                </li>
                                <li class="clearfix contact_mobile">
                                    <div class="left"><span class="lambda-fax"></span></div>
                                    <div class="description">+52 (686)5823334</div>
                                </li>
                                <li class="clearfix contact_email">
                                    <div class="left"><span class="lambda-email"></span></div>
                                    <div class="description">http://fca.mxl.uabc.mx/</div>
                                </li>
                            </ul>
                        </div>
                        <div class="sixcol last">
                            <div class="if-heading">
                                <h4><span>Vicerrectoría UABC</span></h4>
                            </div>
                            <ul>
                            <li class="clearfix contact_address">
                                <div class="left"><span class="lambda-address"></span></div>
                                <div class="description">Boulevard Bénito Juárez Parcela 44, (Mexicali Baja California).</div>
                            </li>
                            <li class="clearfix contact_phone" >
                                <div class="left"><span class="lambda-phone"></span></div>
                                <div class="description">+52 (686)5534461</div>
                            </li>
                            <li class="clearfix contact_mobile">
                                <div class="left"><span class="lambda-fax"></span></div>
                                <div class="description">+52 (686)5534642</div>
                            </li>
                            <li class="clearfix contact_email">
                                <div class="left"><span class="lambda-email"></span></div>
                                <div class="description">http://www.uabc.mx/</div>
                            </li>
                            </ul>
                        </div>
                    </div>
                
                    </div>
                    <div class="clearfix"></div>
                </section>
            </div>
        </div>
      
        
      
        <div id="outerfootersidebar">
        	<div class="container">
                <div id="footersidebarcontainer" class="row"> 
                    <footer id="footersidebar">
                    <div id="footcol1" class="threecol">
                        <ul>
                            <li class="widget-container">
                                <h4 class="widget-title">Información:</h4>
                                <p>¡Bienvenido alumno de nuevo ingreso!, recibe una cordial bienvenida a la Facultad de Ingeniería Campus Mexicali, tu nueva casa en los próximos años.</p>
								<p>Inscripciones al curso propedéutico e inducción del semestre 2013-1, en la Facultad de Ciencias Administrativas.</p>
                            </li>
                        </ul>
                    </div>
                    <div id="footcol2" class="threecol">
                        <ul>
                          	<li class="widget-container">
                            <h4 class="widget-title">Atención:</h4>
                            <ul class="ts-recent-post-widget">
                                <li><a href="#">Para mas informacion: fcamxl1@gmail.com</a></li>
                                <li><a href="#">Si olvidaste imprimir tu comprobante, favor de ingresar tu numero de registro en la parte superior izquierda (Buscar registro).</a></li>
                                <li><a href="http://fca.mxl.uabc.mx/fca/index.php">Facultad de Ciencias Administrativas.</a></li>
                            </ul>
                            </li>
                        </ul>
                    </div>
                    <div id="footcol3" class="threecol">
                        <ul>
                            <li class="widget-container">
                                <h4 class="widget-title">Páginas de interés</h4>
								<ul class="if-latest-post-widget">
                              		<li>
                                    	<img src="images/Radiouniversidad.jpg" alt="" class="alignleft"/>                                                                                    
                                        <h6> <a href="#">Escucha uabc radio directo para tus oídos.</a></h6>
                                   
                                        <div class="clearfix"></div>
                                    </li>
                              		<li>
                                    	<img src="images/cats.jpg" alt="" class="alignleft"/>                                                                                    
                                        <h6> <a href="http://www.uabc.mx/">Universidad Autónoma de Baja California</a></h6>
                         
                                        <div class="clearfix"></div>
                                    </li>
                            	</ul>
                            </li>
                        </ul>
                    </div>
                    <div id="footcol4" class="threecol last">
                        <ul>
                            <li class="widget-container">
                                <h4 class="widget-title">Imágenes</h4>
                                <div class="gallery-pic">
                                	<a href="#"><img src="images/content/1.jpg" alt=""></a>
                                    <a href="#"><img src="images/content/2.jpg" alt=""></a>
                                    <a href="#" class="nomargin"><img src="images/content/3.jpg" alt="" ></a>
                                    <a href="#"><img src="images/content/4.jpg" alt=""></a>
                                    <a href="#"><img src="images/content/5.jpg" alt=""></a>
                                    <a href="#" class="nomargin"><img src="images/content/g6.jpg" alt="" ></a>
                                </div>
                          </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    </footer>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

     
        
      
        <div id="outerfooter">
        	<div class="container">
                <div id="footercontainer" class="row">
            	<footer id="footer">
                    <div class="copyright">
                        Copyright &copy;2013 <a href="#">UABC Propedéutico.</a> Hecho por <a href="http://www.juanmoralesmxli.hostei.com/" title="Interfeis - It's Beautiful">B325WMSTR.</a>
                    </div>
                    <nav id="footermenu">
                        <ul id="footernav" class="footermenu">
                            <li><a href="#">dsfdsdsf</a></li>
           
                        </ul>                   
                    </nav>
                    <div class="clearfix"></div>
                </footer>
            	</div>
            </div>
        </div>
      
        
	</div>
</div>


<script type="text/javascript" src="js/jquery-1.6.4.min.js"></script>
<script type="text/javascript" src="js/modernizr.js"></script>
<script type='text/javascript' src='js/jquery.easing.js'></script>


<script type="text/javascript" src="js/hoverIntent.js"></script> 
<script type="text/javascript" src="js/superfish.js"></script> 
<script type="text/javascript" src="js/supersubs.js"></script>


<script type="text/javascript" src="js/custom.js"></script>


<script type="text/javascript" src="js/contact.js"></script>

<?php 
$sesiones=array($_SESSION['datos'],$_SESSION['exito']);

session_destroy() or die("Error");
unset($sesiones);

?>
</body>
</html>
