<?php
// Where will you get the forms' results?
define("ORDER_FORM", 'mercadolibre@tecnotropolis.com.ve');
// define("ORDER_FORM", 'mercadolibre@tecnotropolis.com.ve'); 
$post = (!empty($_POST)) ? true : false;

if($post){
$compra="Mercado Libre";
$seudonimo = $_POST['seudonimo'];
$persona = $_POST['persona'];
$razonSocial = $_POST['razon-social'];
$rif1 = $_POST['rif-1'];
$rif = $_POST['rif'];
$nombreApellido = $_POST['nombre-apellido'];
$cedula = $_POST['cedula'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$correo = $_POST['correo'];
$direccionFiscal = $_POST['direccion-fiscal'];
$empresaEnvio = $_POST['empresa-envio'];
$direccionEnvio = $_POST['direccion-envio'];

$cantidadProducto = $_POST['cantidad-producto'];
$nombreProducto = $_POST['nombre-producto'];

$cantidadProducto2 = $_POST['cantidad-producto2'];
$nombreProducto2 = $_POST['nombre-producto2'];

$cantidadProducto3 = $_POST['cantidad-producto3'];
$nombreProducto3 = $_POST['nombre-producto3'];

$cantidadProducto4 = $_POST['cantidad-producto4'];
$nombreProducto4 = $_POST['nombre-producto4'];

$cantidadProducto5 = $_POST['cantidad-producto5'];
$nombreProducto5 = $_POST['nombre-producto5'];

$formaPago = $_POST['forma-pago'];
$monto = $_POST['monto'];
$nroTransaccion = $_POST['nro-transaccion'];
$banco = $_POST['banco'];

$observaciones = $_POST['observaciones'];




// ************************ MENSAJE ************************************* //
$message = '<table border="1" bordercolor="#FFF" bgcolor="#333333" width="650" align="center" style="font-family:Verdana, Geneva, sans-serif;">';
$message.= '<tr><th colspan="2" style="color:#84BD23">DATOS DE LA COMPRA</th></tr>';

// compra
$message.='<tr>';
$message.='<th style="color:#8D8D8D;" valign="middle" >COMPRA REALIZADA A TRAVES DE</th>';
$message.='<td style="color:#FFF;" valign="middle" align="center">'. $compra .'</td>';
$message.='</tr>';

// seudonimo
if ($compra=="Mercado Libre"){ 
$message.='<tr>';
$message.='<th style="color:#8D8D8D;" valign="middle" >SEUDONIMO</th>';
$message.='<td style="color:#FFF;" valign="middle" align="center">'. $seudonimo .'</td>';
$message.='</tr>';
}

// persona (Juridia o Natural)
$message.='<tr>';
$message.='<th style="color:#8D8D8D;" valign="middle" >PERSONA</th>';
$message.='<td style="color:#FFF;" valign="middle" align="center">';
if ($persona=="j"){ $message.='JURIDICA'; }else { $message.='NATURAL';}
$message.='</td>';
$message.='</tr>';


if ($persona=="j"){
	//Razón Social
	$message.='<tr>';
	$message.='<th style="color:#8D8D8D;" valign="middle" >RAZON SOCIAL</th>';
	$message.='<td style="color:#FFF;" valign="middle" align="center">'. $razonSocial .'</td>';
	$message.='</tr>';
	//RIF
	$message.='<tr>';
	$message.='<th style="color:#8D8D8D;" valign="middle" >RIF</th>';
	$message.='<td style="color:#FFF;" valign="middle" align="center">'. $rif1 .'-'. $rif .'</td>';
	$message.='</tr>';
	// Dirección Fiscal
	$message.='<tr>';
	$message.='<th style="color:#8D8D8D;" valign="middle" >DIRECCION FISCAL</th>';
	$message.='<td style="color:#FFF;" valign="middle" align="center">'. $direccionFiscal .'</td>';
	$message.='</tr>';
	}else{
		// Nombre(s) y Apellido(s)
		$message.='<tr>';
		$message.='<th style="color:#8D8D8D;" valign="middle" >NOMBRE(S) Y APELLIDO(S)</th>';
		$message.='<td style="color:#FFF;" valign="middle" align="center">'. $nombreApellido .'</td>';
		$message.='</tr>';
		//Cédula de Identidad
		$message.='<tr>';
		$message.='<th style="color:#8D8D8D;" valign="middle" >CEDULA DE IDENTIDAD</th>';
		$message.='<td style="color:#FFF;" valign="middle" align="center">'. $cedula .'</td>';
		$message.='</tr>';
		
		}
if ($persona!="j"){
// Dirección
$message.='<tr>';
$message.='<th style="color:#8D8D8D;" valign="middle" >DIRECCIÓN</th>';
$message.='<td style="color:#FFF;" valign="middle" align="center">'. $direccion .'</td>';
$message.='</tr>';
}
// Teléfono
$message.='<tr>';
$message.='<th style="color:#8D8D8D;" valign="middle" >TELEFONO</th>';
$message.='<td style="color:#FFF;" valign="middle" align="center">'. $telefono .'</td>';
$message.='</tr>';

// Correo Electrónico
$message.='<tr>';
$message.='<th style="color:#8D8D8D;" valign="middle" >CORREO ELECTRONICO</th>';
$message.='<td style="color:#FFF;" valign="middle" align="center">'. $correo .'</td>';
$message.='</tr>';

// Opciones de Envío
$message.='<tr>';
$message.='<th style="color:#8D8D8D;" valign="middle" >OPCION DE ENVIO</th>';
$message.='<td style="color:#FFF;" valign="middle" align="center">'. $empresaEnvio .'</td>';
$message.='</tr>';

// Dirección de Envío
if ($empresaEnvio!="tienda"){
$message.='<tr>';
$message.='<th style="color:#8D8D8D;" valign="middle" >DIRECCION DE ENVIO</th>';
$message.='<td style="color:#FFF;" valign="middle" align="center">'. $direccionEnvio .'</td>';
$message.='</tr>';
}

// Forma de Pago
$forma;
switch ($formaPago) {
    case 'deposito':
        $forma = 'Deposito';
        break;
    case 'transferencia':
        $forma = 'Transferencia';
        break;
    case 'debito':
        $forma = 'Debito';
        break;
	case 'credito-mp':
        $forma = 'Credito Mercado Pago';
        break;
    case 'efectivo':
        $forma = 'Efectivo';
        break;
}

$message.='<tr>';
$message.='<th style="color:#8D8D8D;" valign="middle" >FORMA DE PAGO</th>';
$message.='<td style="color:#FFF;" valign="middle" align="center">'. $forma .'</td>';
$message.='</tr>';

// Monto - Número de Transacción - Banco
if($formaPago=="deposito" || $formaPago=="transferencia" || $formaPago=="credito-mp") {
	// Monto
	$message.='<tr>';
	$message.='<th style="color:#8D8D8D;" valign="middle" >MONTO</th>';
	$message.='<td style="color:#FFF;" valign="middle" align="center">'. $monto .' BS</td>';
	$message.='</tr>';
	
	// Número de Transacción
	$message.='<tr>';
	$message.='<th style="color:#8D8D8D;" valign="middle" >NUMERO DE TRANSACCION</th>';
	$message.='<td style="color:#FFF;" valign="middle" align="center">'. $nroTransaccion  .'</td>';
	$message.='</tr>';
}
if($formaPago=="deposito" || $formaPago=="transferencia") {	
	// Banco
	$message.='<tr>';
	$message.='<th style="color:#8D8D8D;" valign="middle" >BANCO</th>';
	$message.='<td style="color:#FFF;" valign="middle" align="center">'. $banco .'</td>';
	$message.='</tr>';
}

// Observaciones
if($observaciones!=""){	
	$message.='<tr>';
	$message.='<th style="color:#8D8D8D;" valign="middle" >OBSERVACIONES</th>';
	$message.='<td style="color:#FFF;" valign="middle" align="center">'. $observaciones .'</td>';
	$message.='</tr>';
}
// Productos
$message.= '<tr><th colspan="2" style="color:#84BD23">PRODUCTO(S)</th></tr>';
	// Producto + Cantidad (1)
	$message.='<tr>';
	$message.='<th style="color:#8D8D8D;" valign="middle" >TITULO DEL PRODUCTO</th>';
	$message.='<td style="color:#FFF;" valign="middle" align="center">'. $nombreProducto .'</td>';
	$message.='</tr>';
	$message.='<tr>';
	$message.='<th style="color:#8D8D8D;" valign="middle" >CANTIDAD</th>';
	$message.='<td style="color:#FFF;" valign="middle" align="center">'. $cantidadProducto .'</td>';
	$message.='</tr>';
	// Producto + Cantidad (2)
	if($nombreProducto2!=""){
		$message.='<tr>';
		$message.='<th style="color:#8D8D8D;" valign="middle" >TITULO DEL PRODUCTO</th>';
		$message.='<td style="color:#FFF;" valign="middle" align="center">'. $nombreProducto2 .'</td>';
		$message.='</tr>';
		$message.='<tr>';
		$message.='<th style="color:#8D8D8D;" valign="middle" >CANTIDAD</th>';
		$message.='<td style="color:#FFF;" valign="middle" align="center">'. $cantidadProducto2 .'</td>';
		$message.='</tr>';
		}
	// Producto + Cantidad (3)
	if($nombreProducto3!=""){
		$message.='<tr>';
		$message.='<th style="color:#8D8D8D;" valign="middle" >TITULO DEL PRODUCTO</th>';
		$message.='<td style="color:#FFF;" valign="middle" align="center">'. $nombreProducto3 .'</td>';
		$message.='</tr>';
		$message.='<tr>';
		$message.='<th style="color:#8D8D8D;" valign="middle" >CANTIDAD</th>';
		$message.='<td style="color:#FFF;" valign="middle" align="center">'. $cantidadProducto3 .'</td>';
		$message.='</tr>';
		}
	// Producto + Cantidad (4)
	if($nombreProducto4!=""){
		$message.='<tr>';
		$message.='<th style="color:#8D8D8D;" valign="middle" >TITULO DEL PRODUCTO</th>';
		$message.='<td style="color:#FFF;" valign="middle" align="center">'. $nombreProducto4 .'</td>';
		$message.='</tr>';
		$message.='<tr>';
		$message.='<th style="color:#8D8D8D;" valign="middle" >CANTIDAD</th>';
		$message.='<td style="color:#FFF;" valign="middle" align="center">'. $cantidadProducto4 .'</td>';
		$message.='</tr>';
		}
	// Producto + Cantidad (5)
	if($nombreProducto5!=""){
		$message.='<tr>';
		$message.='<th style="color:#8D8D8D;" valign="middle" >TITULO DEL PRODUCTO</th>';
		$message.='<td style="color:#FFF;" valign="middle" align="center">'. $nombreProducto5 .'</td>';
		$message.='</tr>';
		$message.='<tr>';
		$message.='<th style="color:#8D8D8D;" valign="middle" >CANTIDAD</th>';
		$message.='<td style="color:#FFF;" valign="middle" align="center">'. $cantidadProducto5 .'</td>';
		$message.='</tr>';
		}
	

$message.='</table>';
// ************************ MENSAJE ************************************* //
/*
$para  = 'usuario1@dominio.com' . ', '; // atención a la coma
$para .= 'otrousuario@otrodominio.com';
*/
// Asunto
$titulo = 'Orden de Compra Tecnotropolis';
 

// Cabecera que especifica que es un HMTL
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Cabeceras adicionales
$cabeceras .= 'From: '. $compra .' <'. $correo .'>' . "\r\n";
/*
$cabeceras .= 'Cc: archivotarifas@example.com' . "\r\n";
$cabeceras .= 'Bcc: copiaoculta@example.com' . "\r\n";
*/
 
// enviamos el correo!
mail(ORDER_FORM, $titulo, $message, $cabeceras);

/*
$mail = mail(ORDER_FORM, $subject, $message,
     "From: ".$name." <".$email.">\r\n"
    ."Reply-To: ".$email."\r\n"
    ."X-Mailer: PHP/" . phpversion());


*/
echo '<html><head><meta http-equiv="REFRESH" content="0; url=../orden-de-compra.php"></head></html>';
}

?>
