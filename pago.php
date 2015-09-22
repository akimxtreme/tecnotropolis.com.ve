<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Tecnotrópolis</title>
    <link rel="shortcut icon" href="img/icono.png" type="image"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/theme.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/docs.css" rel="stylesheet">
<link href="js/google-code-prettify/prettify.css" rel="stylesheet">
<link href="css/estilos.css" rel="stylesheet" type="text/css" />

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
	<script src="js/html5.js"></script>
</head>
<body>
	<!--header-->
    <div class="header">
    	<div class="wrap">
        	<div class="navbar navbar_ clearfix">
            	<div class="container">
                    <div class="row">
                        <div class="span3">
                        	<div class="logo"><a href="index.html"><img src="img/logo.png" alt="" /></a></div>                        
                        </div>
                        <div class="span9">
                        	<div class="follow_us">
                                <ul>
                                    <li><a href="http://www.facebook.com/pages/Tecnotropolis/152547188229705" class="facebook" title="Conviertete en fan">Facebook</a></li>
                                    <li><a href="http://twitter.com/TuTecnotropolis" class="twitter" title="Sigue nuestros tweets">Twitter</a></li>
                                      <!--<li><a href="http://listado.mercadolibre.com.ve/_CustId_60753920" class="delicious" title="Ve nuestros productos - Tienda Virtual">Mercado Libre</a></li>-->
                                </ul>
                            </div>
                            <div class="clear"></div>
                            <nav id="main_menu">
                                <div class="menu_wrap">
                                    <ul class="nav sf-menu">
                                      <li class="sub-menu"><a href="index.html">Principal</a></li>
                                      <li class="sub-menu"><a href="about.html">Sobre Nosotros</a></li>
                                      <li class="sub-menu"><a href="productos.html">Productos</a>
                                    
                                        <ul>
                                              <li><a href="categoria1.html">Celulares y Teléfonos</a>
                                            
                                           <ul>
                                              <li><a href="samsung.html">Samsung</a></li>
                                                <li><a href="sony.html">Sony Xperia</a></li>  
                                                <li><a href="nokia.html">Nokia</a></li>
                                                <li><a href="argom.html">ArgomTech</a></li>
                                                <li><a href="lg.html">LG</a></li>  
                                                <li><a href="huawei.html">Huawei</a></li>
                                                <li><a href="likuid.html">Likuid</a></li>
                                                <li><a href="accesoriostlf.html">Accesorios Originales</a>
                                                    <li><a href="accesoriosgen.html">Accesorios Genéricos</a>
                                            </li>
                                          </ul>
                                            
                                            </li>
                                            <li><a href="categoria2.html">TV, Audio y Video</a>
                                            
                                                  <ul>
                                                  
                                                <li><a href="tv.html">Televisores</a></li>
                                              <li><a href="audio.html">Audio</a></li>
                                             <!-- <li><a href="video.html">Reproductores de Video</a></li>  
                                            <li><a href="autos.html">Audio para Autos</a></li>-->
                                              <li><a href="accesoriostv.html">Accesorios</a></li>
                                            
                                                </ul>
                                            </li>
                                          
                                              <li><a href="categoria3.html">Computadoras,Tabletas e Impresoras</a>
                                            
                                               <ul>
                                                  
                                              <!--   <li><a href="computadoras.html">Computadoras de Escritorio</a></li>-->
                                              <li><a href="laptops.html">Laptops</a></li>  
                                              <li><a href="tabletas.html">Tabletas</a></li>
                                            <li><a href="impresoras.html">Impresoras y Escáneres</a></li>
                                              <li><a href="software.html">Software</a></li>
                                              <li><a href="hardware.html">Hardware</a></li>
                                              <li><a href="perifericos.html">Periféricos</a></li>
                                              <li><a href="cartuchos.html">Tóners y Cartuchos</a></li>
                                              <li><a href="accesoriospc.html">Accesorios</a></li>                                                       
                                            </ul>
                                            </li>  
                                          </ul>  
                                          
                                    </li>    
                                        <li class="sub-menu"><a href="empresas.html">Empresas</a></li>    
                                        <li class="current"><a href="pedido.html">Pedidos</a></li>
                                        <li class="sub-menu"><a href="contacts.html">Contacto</a></li>
                                    </ul>
                                </div>
                             </nav>                            
                        </div>
                    </div>                
                </div>
             </div>
        </div>    
    </div>
    <!--//header-->   
        
    <!--page_container-->
    <div class="page_container">
    	<div class="breadcrumb">
        	<div class="wrap">
            	<div class="container">
                    <h1 class="categoria">Registre su Pago</h1>
                </div>
            </div>
        </div>
    	<div class="wrap">
        	<div class="container">
                <section>
                	<div class="row">
                    	<div class="span6 offset3" style="background-color:#333;">
                       	    <br>
                        	<h2 class="mensaje"><span>Registre su Pago</span></h2>
                             
                            	
                                
                                    <form name="orden_de_compra" method="post" id="" action="contact_form/pago_process.php" onSubmit="return Pago();">
                                        
                                        <!-- Tipo de Transacción -->
                                        <div class="row-fluid" id="div_tipo_transaccion"> 
                                        <label for=""><i class="icon-asterisk icon-white"></i> Tipo de Transacción</label>
                                        <select class="span12" name="tipo_transaccion" id="tipo_transaccion">
                                        	<option value="">Seleccione...</option>
                                        	<option value="deposito">Deposito</option>
                                            <option value="transferencia">Transferencia</option>                                            
                                        </select>                                        
                                        <span class="help-block"><small>Indique el Tipo de Transacción</small></span>
                                        </div>
                                        <!-- FIN -->                                       
                                        
                                        <!-- Número de Transacción -->  
                                        <div class="row-fluid" id="div_nro_transaccion">                                           
                                        <label class="control-label" for="nro_transaccion"><i class="icon-asterisk icon-white"></i> Número de Transacción</label>                                        
                                        <input class="span12" type="text" name="nro_transaccion" id="nro_transaccion" placeholder="Ingrese el Número de Transacción" />
                                        <span class="help-block"><small>Ingrese el Número de Transacción</small></span> 
                                        </div>
                                        <!-- FIN -->
                                                                              
                                        <!-- Banco -->
                                        <div class="row-fluid" id="div_banco"> 
                                        <label for=""><i class="icon-asterisk icon-white"></i> Banco</label>
                                        <select class="span12" name="banco" id="banco" onChange="mostrarOcultar();">
                                        	<option value="">Seleccione...</option>
                                        	<option value="mercantil">Mercantil</option>
                                            <option value="banesco">Banesco</option>                                            
                                        </select>
                                        <span class="help-block"><small>Indique el Banco donde realizó la transaccion</small></span>
                                        </div>
                                        <!-- FIN -->
                                    
                                        <!-- Monto -->
                                        <div class="row-fluid" id="div_monto"> 
                                        <label for=""><i class="icon-asterisk icon-white"></i> Monto</label>
                                        <input class="span12" type="text" name="monto" id="monto" placeholder="Ingrese el Monto...">                                                                                     <span class="help-block"><small>Ingrese el Monto</small></span>
                                        </div>                                        
                                        <!-- FIN -->
                                        
                                        <!-- Número de Pedido -->  
                                        <div class="row-fluid" id="div_nro_pedido">                                           
                                        <label class="control-label" for="nro_pedido"><i class="icon-asterisk icon-white"></i> Número de Pedido</label>                                        
                                        <input class="span12" type="text" name="nro_pedido" id="nro_pedido" placeholder="Ingrese el Número de Pedido" />
                                        <span class="help-block"><small>Ingrese el Número de Pedido</small></span> 
                                        </div>
                                        <!-- FIN -->
                                                        
                                        <!-- Correo Electrónico -->
                                        <div class="row-fluid" id="div_correo">   
                                        <label for=""><i class="icon-asterisk icon-white"></i> Correo Electrónico</label>
                                        <input class="span12" type="email" name="correo" id="correo" placeholder="Ingrese su Correo Electrónico">
                                        <span class="help-block"><small>Ingrese su Correo Electrónico</small></span>
                                        </div>
                                        <!-- FIN --> 
                                                                               
                                        <!-- Teléfono -->
                                        <div class="row-fluid" id="div_telefono">   
                                        <label for=""><i class="icon-asterisk icon-white"></i> Teléfono</label>
                                        <input class="span12" type="text" name="telefono" id="telefono" placeholder="Ingrese el Teléfono...">
                                        <span class="help-block"><small>Ingrese su Teléfono</small></span>
                                        </div>
                                        <!-- FIN -->
                                        
                                        <!-- Opciones de Envíos -->
                                        <div class="row-fluid" id="div_envio"> 
                                        <label for=""><i class="icon-asterisk icon-white"></i> Opciones de Envío</label>
                                        <select class="span12" name="envio" id="envio" onChange="mostrarOcultar();">
                                        	<option value="">Seleccione...</option>
                                        	<option value="MRW">MRW</option>
                                            <option value="ZOOM">ZOOM</option>     
                                            <option value="tienda">Retiro en Tienda</option>                                            
                                        </select>                                        
                                        <span class="help-block"><small>Indique forma de envío</small></span>
                                        </div>
                                        <!-- FIN -->
                                        
                                        <!-- Dirección de Envío -->
                                        <div class="row-fluid hidden" id="div_direccion">   
                                        <label for=""><i class="icon-asterisk icon-white"></i> Dirección de Envío</label>
                                        <textarea class="span12" name="direccion" id="direccion" placeholder="Ingrese la Dirección de Envío"></textarea>
                                        <span class="help-block"><small>Ingrese la Dirección de Envío</small></span>
                                        </div>
                                        <!-- FIN -->
                                        
                                        <!-- Estado -->  
                                        <div class="row-fluid hidden" id="div_estado">                                           
                                        <label class="control-label" for="estado"><i class="icon-asterisk icon-white"></i> Estado</label>                                        
                                        <input class="span12" type="text" name="estado" id="estado" placeholder="Ingrese el Estado" />
                                        <span class="help-block"><small>Ingrese el Estado</small></span> 
                                        </div>
                                        <!-- FIN --> 
                                        
                                        <!-- Ciudad -->  
                                        <div class="row-fluid hidden" id="div_ciudad">                                           
                                        <label class="control-label" for="ciudad"><i class="icon-asterisk icon-white"></i> Ciudad</label>                                        
                                        <input class="span12" type="text" name="ciudad" id="ciudad" placeholder="Ingrese el Ciudad" />
                                        <span class="help-block"><small>Ingrese el Ciudad</small></span> 
                                        </div>
                                        <!-- FIN -->                                                                
                                        
                                        <!-- Mensaje -->
                                        <div class="row-fluid" id="div_mensaje">   
                                        <label for=""><i class="icon-asterisk icon-white"></i> Mensaje</label>
                                        <textarea class="span12" name="mensaje" id="mensaje"></textarea>
                                        <span class="help-block"><small>Déjenos saber sus Observaciones</small></span>
                                        </div>
                                        <!-- FIN -->
                                        <br>
                                         
                                        
                                        <input type="reset" class="btn btn-inverse" value="Borrar Campos" />
                                        <input type="submit" class="btn btn-warning" value="Enviar" />
                                        <div class="clear"></div>
                                        <br>
                                    </form>
                                                  
                        </div>                	
                	</div>
                </section>
            </div>
        </div>
    </div>
    <!--//page_container-->
    
           
<!--footer-->
        
        <div class="footer_bottom">
            <div class="wrap">
            	<div class="container">
                	<div class="row">
                		<div class="span4">
                        	<div class="foot_logo"><a href="index.html"><img src="img/foot_logo.png" alt="" /></a></div>    
                        	<div class="copyright">© 2014 Tecnotrópolis. Todos los derechos reservados</div>                        
                        </div>
                        <div class="span8">
                        	<div class="foot_right_block">
                            	<div class="fright">
                                	                                </div>
                                <div class="follow_us">
                                	<ul>
                                        <li><a href="http://www.facebook.com/pages/Tecnotropolis/152547188229705" class="facebook" title="Conviertete en fan">Facebook</a></li>
                                        <li><a href="http://twitter.com/TuTecnotropolis" class="twitter" title="Sigue nuestros tweets">Twitter</a></li>
                                          <!--<li><a href="http://listado.mercadolibre.com.ve/_CustId_60753920" class="delicious" title="Ve nuestros productos - Tienda Virtual">Mercado Libre</a></li>-->
                                    </ul>
                                </div>
                                <div class="clear"></div>
                            
                            	<div class="clear"></div>
                            	<div class="foot_menu">
                            		<ul>
                                        <li><a href="index.html">Principal</a></li>
                                        <li><a href="about.html">Sobre Nosotros</a></li>
                                        <li><a href="productos.html">Productos</a></li>
                                        <li><a href="empresas.html">Empresas</a></li>
                                        <li><a href="pedido.html"  class="current">Pedidos</a></li>
                                        <li><a href="contacts.html">Contacto</a></li>
                                    </ul>
                            	</div>
                            </div>                            
                        </div>
                    </div>	
                </div>
            </div>
        </div>
    </div>
    <!--//footer-->        
	<script type="text/javascript" src="js/funciones.js"></script>
	<script src="js/jquery.min.js"></script>
    <script src="js/google-code-prettify/prettify.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/superfish.js"></script>
    <script type="text/javascript" src="js/jquery.tweet.js"></script>
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="js/myscript.js"></script>
    <script src="js/application.js"></script>
    <script type="text/javascript">
		$(document).ready(function(){	
			$("#ajax-contact-form").submit(function() {
				var str = $(this).serialize();		
				$.ajax({
					type: "POST",
					url: "contact_form/contact_process.php",
					data: str,
					success: function(msg) {
						// Message Sent - Show the 'Hemos recibido su mensaje será contestado a la brevedad posible' message and hide the form
						if(msg == 'OK') {
							result = '<div class="notification_ok">Su mensaje fue enviado. Responderemos a la brevedad posible</div>';
							$("#fields").hide();
						} else {
							result = msg;
						}
						$('#note').html(result);
					}
				});
				return false;
			});															
		});		
	</script>
</body>
</html>
