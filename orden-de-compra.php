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
                        <div class="span4">
                        	<div class="logo"><a href="index.html"><img src="img/logo.png" alt="" /></a></div>                        
                        </div>
                        <div class="span8">
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
                                        <li class="current"><a href="contacts.html">Contacto</a></li>
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
                    <h1 class="categoria">Registra tu compra de Mercado Libre</h1>
                </div>
            </div>
        </div>
    	<div class="wrap">
        	<div class="container">
                <section>
                	<div class="row">
                    	<div class="span6 offset3" style="background-color:#333;">
                        	<h2 class="mensaje"><span>Orden de compra</span></h2>
                             
                            	
                                
                                    <form name="orden_de_compra" method="post" id="" action="contact_form/orden_de_compra_process.php" onSubmit="return OrdenDeCompra();">
                                        
                                        <!-- Seudónimo de ML -->  
                                        <div class="row-fluid" id="div_seudonimo">                                           
                                        <label class="control-label" for="seudonimo"><i class="icon-asterisk icon-white"></i> Seudónimo de Mercado Libre</label>                                        
                                        <input class="span12" type="text" name="seudonimo" id="seudonimo" placeholder="Ingrese el Seudónimo..." />
                                        <span class="help-block"><small>Ingrese su Seudónimo</small></span> 
                                        </div>
                                        <!-- FIN -->
                                       
                                        <!-- Jurídico o Natural -->
                                        <div class="row-fluid" id="div_persona">          
                                        <label for=""><i class="icon-asterisk icon-white"></i> Persona Jurídica o Persona Natural</label>
                                        <select class="span12" name="persona" id="persona" onChange="mostrarOcultar();">
                                        	<option value="">Seleccione...</option>
                                        	<option value="j">Persona Jurídica</option>
                                            <option value="n">Persona Natural</option>                                            
                                        </select> 
                                        <span class="help-block"><small>¿Persona Jurídica o Persona Natural?</small></span> 
                                        
                                        </div>
                                        <!-- FIN -->
                                        
                                        <!-- Razón Social -->
                                        <div class="row-fluid hidden" id="div_razon-social">    
                                        <label for=""><i class="icon-asterisk icon-white"></i> Razón Social</label>
                                        <input class="span12" type="text" name="razon-social" id="razon-social" placeholder="Ingrese el nombre de la Empresa" />
                                        <span class="help-block"><small>Ingrese su Razón Social</small></span>
                                        </div>
                                        <!-- FIN -->
                                        
                                        <!-- RIF -->
                                        <div class="row-fluid hidden" id="div_rif">   
                                        <label for=""><i class="icon-asterisk icon-white"></i> RIF</label>
                                        <select class="span2" name="rif-1" id="rif-1">
                                        	<option value="J">J</option>
                                            <option value="G">G</option>
                                            <option value="V">V</option>
                                        </select>
                                        <input class="span10" type="text" name="rif" id="rif" placeholder="Ingrese el RIF..." />
                                        <span class="help-block"><small>Ingrese el RIF</small></span>
                                        </div>                                       
                                        <!-- FIN -->
                                        
                                        <!-- Nombre(s) y Apellido(s) -->
                                        <div class="row-fluid hidden" id="div_nombre-apellido">    
                                        <label for=""><i class="icon-asterisk icon-white"></i> Nombre(s) y Apellido(s)</label>
                                        <input class="span12" type="text" name="nombre-apellido" id="nombre-apellido" placeholder="Ingrese su Nombre Completo...">
                                        <span class="help-block"><small>Ingrese su Nombre(s) y Apellido(s)</small></span>
                                        <!-- FIN -->
                                        </div>
                                        
                                        <!-- Cédula de Identidad -->
                                        <div class="row-fluid hidden" id="div_cedula">   
                                        <label for=""><i class="icon-asterisk icon-white"></i> Cédula de Identidad</label>
                                        <input class="span12" type="text" name="cedula" id="cedula" placeholder="Ingrese su Nombre Completo...">
                                        <span class="help-block"><small>Ingrese su Cédula de Identidad</small></span>
                                        <!-- FIN -->
                                        </div>
                                        
                                        <!-- Teléfono -->
                                        <div class="row-fluid" id="div_telefono">   
                                        <label for=""><i class="icon-asterisk icon-white"></i> Teléfono</label>
                                        <input class="span12" type="text" name="telefono" id="telefono" placeholder="Ingrese el Teléfono...">
                                        <span class="help-block"><small>Ingrese su Teléfono</small></span>
                                        </div>
                                        <!-- FIN -->
                                        
                                        <!-- Dirección -->
                                        <div class="row-fluid hidden" id="div_direccion">   
                                        <label for=""><i class="icon-asterisk icon-white"></i> Dirección</label>
                                        <textarea class="span12" name="direccion" id="direccion" placeholder="Ingrese su Dirección"></textarea>
                                        <span class="help-block"><small>Ingrese su Dirección</small></span>
                                        </div>
                                        <!-- FIN -->
                                        
                                        <!-- Correo Electrónico -->
                                        <div class="row-fluid" id="div_correo">   
                                        <label for=""><i class="icon-asterisk icon-white"></i> Correo Electrónico</label>
                                        <input class="span12" type="email" name="correo" id="correo" placeholder="Ingrese su Correo Electrónico">
                                        <span class="help-block"><small>Ingrese su Correo Electrónico</small></span>
                                        </div>
                                        <!-- FIN -->
                                        <!-- Dirección Fiscal -->
                                        <div class="row-fluid hidden" id="div_direccion-fiscal">   
                                        <label for=""><i class="icon-asterisk icon-white"></i> Dirección Fiscal</label>
                                        <textarea class="span12" name="direccion-fiscal" id="direccion-fiscal" placeholder="Ingrese la Dirección Fiscal"></textarea>
                                        <span class="help-block"><small>Ingrese su Dirección Fiscal</small></span>
                                        </div>
                                        <!-- FIN -->
                                        
                                        <!-- Opciones de Envíos -->
                                        <div class="row-fluid" id="div_empresa-envio"> 
                                        <label for=""><i class="icon-asterisk icon-white"></i> Opciones de Envío</label>
                                        <select class="span12" name="empresa-envio" id="empresa-envio" onChange="mostrarOcultar();">
                                        	<option value="">Seleccione...</option>
                                        	<option value="MRW">MRW</option>
                                            <option value="ZOOM">ZOOM</option>     
                                            <option value="tienda">Retiro en Tienda</option>                                            
                                        </select>                                        
                                        <span class="help-block"><small>Indique forma de envío</small></span>
                                        </div>
                                        <!-- FIN -->
                                        
                                        <!-- Dirección de Envío -->
                                        <div class="row-fluid hidden" id="div_direccion-envio">   
                                        <label for=""><i class="icon-asterisk icon-white"></i> Dirección de Envío</label>
                                        <textarea class="span12" name="direccion-envio" id="direccion-envio" placeholder="Ingrese la Dirección de Envío"></textarea>
                                        <span class="help-block"><small>Ingrese Cantidad + Nombre del Producto</small></span>
                                        </div>
                                        <!-- FIN -->                          
                                         
                                        <!-- Cantidad + Nombre del Producto (1)-->
                                        <!--<div class="row-fluid" id="div_nombre-producto">                                     
                                            <label><i class="icon-asterisk icon-white"></i> Productos</label>
                                                <div class="input-prepend">                                        
                                                <span class="add-on span1"><i class="icon-shopping-cart"></i></span>
                                                <select class="span2" name="cantidad-producto" id="cantidad-producto">
                                                <?php for($i=1;$i<=50;$i++){echo '<option value="'. $i .'">'. $i .'</option>';} ?>
                                                </select> 
                                                <input class="span9" type="text" name="nombre-producto" id="nombre-producto" placeholder="Ingrese el Nombre del Producto...">            
                                                </div>                                          
                                        </div>-->
                                        <!-- FIN -->
                                        
                                        <!-- Cantidad + Nombre del Producto (1)-->
                                        <div class="row-fluid" id="div_nombre-producto"> 
                                            
                                            <label><i class="icon-asterisk icon-white"></i> Productos</label>   
                                            <div class="row-fluid">
                                            <div class="span2">
                                                <div class="input-prepend">
                                                   <div class="row-fluid">
                                                    <span class="add-on"><i class="icon-shopping-cart"></i></span>
                                                    <select class="span10" name="cantidad-producto" id="cantidad-producto">
                                                    <?php for($i=1;$i<=50;$i++){echo '<option value="'. $i .'">'. $i .'</option>';} ?>
                                                    </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="span10">
                                                <input class="span12" type="text" name="nombre-producto" id="nombre-producto" placeholder="Ingrese el Nombre del Producto...">            
                                            </div>
                                            </div>
                                        </div>
                                        <!-- FIN -->
                                        
                                        <!-- Cantidad + Nombre del Producto (2)-->
                                        <div class="row-fluid" id="div_nombre-producto"> 
                                            
                                              
                                            <div class="row-fluid">
                                            <div class="span2">
                                                <div class="input-prepend">
                                                    <span class="add-on"><i class="icon-shopping-cart"></i></span>
                                                    <select class="span10" name="cantidad-producto2" id="cantidad-producto2">
                                                    <?php for($i=1;$i<=50;$i++){echo '<option value="'. $i .'">'. $i .'</option>';} ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="span10">
                                                <input class="span12" type="text" name="nombre-producto2" id="nombre-producto2" placeholder="Ingrese el Nombre del Producto...">            
                                            </div>
                                            </div>
                                        </div>
                                        <!-- FIN -->
                                        
                                        <!-- Cantidad + Nombre del Producto (3)-->
                                        <div class="row-fluid" id="div_nombre-producto"> 
                                            
                                               
                                            <div class="row-fluid">
                                            <div class="span2">
                                                <div class="input-prepend">
                                                    <span class="add-on"><i class="icon-shopping-cart"></i></span>
                                                    <select class="span10" name="cantidad-producto3" id="cantidad-producto3">
                                                    <?php for($i=1;$i<=50;$i++){echo '<option value="'. $i .'">'. $i .'</option>';} ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="span10">
                                                <input class="span12" type="text" name="nombre-producto3" id="nombre-producto3" placeholder="Ingrese el Nombre del Producto...">            
                                            </div>
                                            </div>
                                        </div>
                                        <!-- FIN -->
                                        
                                        <!-- Cantidad + Nombre del Producto (4)-->
                                        <div class="row-fluid" id="div_nombre-producto"> 
                                            
                                               
                                            <div class="row-fluid">
                                            <div class="span2">
                                                <div class="input-prepend">
                                                    <span class="add-on"><i class="icon-shopping-cart"></i></span>
                                                    <select class="span10" name="cantidad-producto4" id="cantidad-producto4">
                                                    <?php for($i=1;$i<=50;$i++){echo '<option value="'. $i .'">'. $i .'</option>';} ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="span10">
                                                <input class="span12" type="text" name="nombre-producto4" id="nombre-producto4" placeholder="Ingrese el Nombre del Producto...">            
                                            </div>
                                            </div>
                                        </div>
                                        <!-- FIN -->
                                        
                                        <!-- Cantidad + Nombre del Producto (5)-->
                                        <div class="row-fluid" id="div_nombre-producto"> 
                                            
                                            
                                            <div class="row-fluid">
                                            <div class="span2">
                                                <div class="input-prepend">
                                                    <span class="add-on"><i class="icon-shopping-cart"></i></span>
                                                    <select class="span10" name="cantidad-producto5" id="cantidad-producto5">
                                                    <?php for($i=1;$i<=50;$i++){echo '<option value="'. $i .'">'. $i .'</option>';} ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="span10">
                                                <input class="span12" type="text" name="nombre-producto5" id="nombre-producto5" placeholder="Ingrese el Nombre del Producto...">            
                                            </div>
                                            </div>
                                        </div>
                                        <!-- FIN -->
                                        
                                        
                                        
                                        <!-- Forma de Pago -->
                                        <div class="row-fluid" id="div_forma-pago"> 
                                        <label for=""><i class="icon-asterisk icon-white"></i> Forma de Pago</label>
                                        <select class="span12" name="forma-pago" id="forma-pago" onChange="mostrarOcultar();">
                                        	<option value="">Seleccione...</option>
                                        	<option value="deposito">Deposito</option>
                                            <option value="transferencia">Transferencia</option>
                                            <option value="debito">Tarjeta de Débito</option>     
                                            <option value="credito-mp">Crédito Mercado Pago</option>                                            <option value="efectivo">Efectivo</option>
                                        </select>                                        
                                        <span class="help-block"><small>Indique la Forma de Pago</small></span>
                                        </div>
                                        <!-- FIN -->  
                                        
                                        <!-- Monto -->
                                        <div class="row-fluid hidden" id="div_monto"> 
                                        <label for=""><i class="icon-asterisk icon-white"></i> Monto</label>
                                        <input class="span12" type="text" name="monto" id="monto" placeholder="Ingrese el Monto...">                                        <span class="help-block"><small>Ayuda Campo Monto</small></span>
                                        </div>
                                        
                                        <!-- FIN -->  
                                       
                                        <!-- Número de Transacción -->
                                        <div class="row-fluid hidden" id="div_nro-transaccion"> 
                                        <label for=""><i class="icon-asterisk icon-white"></i> Número de Transacción</label>
                                        <input class="span12" type="text" name="nro-transaccion" id="nro-transaccion" placeholder="Ingrese el Número de Transacción...">
                                        <span class="help-block"><small>Indique el Número de Transacción</small></span>
                                        </div>
                                        <!-- FIN -->
                                        
                                        <!-- Banco -->
                                        <div class="row-fluid hidden" id="div_banco"> 
                                        <label for=""><i class="icon-asterisk icon-white"></i> Banco</label>
                                        <select class="span12" name="banco" id="banco" onChange="mostrarOcultar();">
                                        	<option value="">Seleccione...</option>
                                        	<option value="mercantil">Mercantil</option>
                                            <option value="banesco">Banesco</option>                                            
                                        </select>
                                        <span class="help-block"><small>Indique el Banco donde realizó la transaccion</small></span>
                                        </div>
                                        <!-- FIN --> 
                                       
                                        <!-- Observaciones -->
                                        <div class="row-fluid" id="div_observaciones">   
                                        <label for=""><i class="icon-asterisk icon-white"></i> Observaciones</label>
                                        <textarea class="span12" name="observaciones" id="observaciones"></textarea>
                                        <span class="help-block"><small>Déjenos saber sus Observaciones</small></span>
                                        </div>
                                        <!-- FIN -->
                                        <br>
                                        
                                        
                                        
                                        
                                        
                                        <input type="reset" class="btn dark_btn" value="Borrar Campos" />
                                        <input type="submit" class="btn send_btn" value="Enviar" />
                                        <div class="clear"></div>
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
                		<div class="span5">
                        	<div class="foot_logo"><a href="index.html"><img src="img/foot_logo.png" alt="" /></a></div>    
                        	<div class="copyright">© 2014 Tecnotrópolis. Todos los derechos reservados</div>                        
                        </div>
                        <div class="span7">
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
                                        <li><a href="contacts.html"  class="current">Contacto</a></li>
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
