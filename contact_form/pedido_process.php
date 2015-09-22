<?php
// Where will you get the forms' results?
define("ORDER_FORM", 'ventas@tecnotropolis.com.ve');

$post = (!empty($_POST)) ? true : false;

if($post){
$compra="Sitio Web";
$nombreApellido = $_POST['nombre-apellido'];
$cedula = $_POST['cedula'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
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

// ************************ MENSAJE ************************************* //
$message = '<table border="1" bordercolor="#333" bgcolor="#FFF" width="650" align="center" style="font-family:Verdana, Geneva, sans-serif;">';
$message.= '<tr><th colspan="2" style="color:#84BD23">PEDIDO</th></tr>';

// Pedido
$message.='<tr>';
$message.='<th style="color:#8D8D8D;" valign="middle" >PEDIDO GENERADO A TRAVES DE</th>';
$message.='<td style="color:#000;" valign="middle" align="center">'. $compra .'</td>';
$message.='</tr>';

// Nombre(s) y Apellido(s)
$message.='<tr>';
$message.='<th style="color:#8D8D8D;" valign="middle" >NOMBRE(S) Y APELLIDO(S)</th>';
$message.='<td style="color:#000;" valign="middle" align="center">'. $nombreApellido .'</td>';
$message.='</tr>';
    
//Cédula de Identidad
$message.='<tr>';
$message.='<th style="color:#8D8D8D;" valign="middle" >CEDULA DE IDENTIDAD</th>';
$message.='<td style="color:#000;" valign="middle" align="center">'. $cedula .'</td>';
$message.='</tr>';

// Teléfono
$message.='<tr>';
$message.='<th style="color:#8D8D8D;" valign="middle" >TELEFONO</th>';
$message.='<td style="color:#000;" valign="middle" align="center">'. $telefono .'</td>';
$message.='</tr>';

// Correo Electrónico
$message.='<tr>';
$message.='<th style="color:#8D8D8D;" valign="middle" >CORREO ELECTRONICO</th>';
$message.='<td style="color:#000;" valign="middle" align="center">'. $correo .'</td>';
$message.='</tr>';

// Productos
$message.= '<tr><th colspan="2" style="color:#84BD23">PRODUCTO(S)</th></tr>';
	// Producto + Cantidad (1)
	$message.='<tr>';
	$message.='<th style="color:#8D8D8D;" valign="middle" >TITULO DEL PRODUCTO</th>';
	$message.='<td style="color:#000;" valign="middle" align="center">'. $nombreProducto .'</td>';
	$message.='</tr>';
	$message.='<tr>';
	$message.='<th style="color:#8D8D8D;" valign="middle" >CANTIDAD</th>';
	$message.='<td style="color:#000;" valign="middle" align="center">'. $cantidadProducto .'</td>';
	$message.='</tr>';
	// Producto + Cantidad (2)
	if($nombreProducto2!=""){
		$message.='<tr>';
		$message.='<th style="color:#8D8D8D;" valign="middle" >TITULO DEL PRODUCTO</th>';
		$message.='<td style="color:#000;" valign="middle" align="center">'. $nombreProducto2 .'</td>';
		$message.='</tr>';
		$message.='<tr>';
		$message.='<th style="color:#8D8D8D;" valign="middle" >CANTIDAD</th>';
		$message.='<td style="color:#000;" valign="middle" align="center">'. $cantidadProducto2 .'</td>';
		$message.='</tr>';
		}
	// Producto + Cantidad (3)
	if($nombreProducto3!=""){
		$message.='<tr>';
		$message.='<th style="color:#8D8D8D;" valign="middle" >TITULO DEL PRODUCTO</th>';
		$message.='<td style="color:#000;" valign="middle" align="center">'. $nombreProducto3 .'</td>';
		$message.='</tr>';
		$message.='<tr>';
		$message.='<th style="color:#8D8D8D;" valign="middle" >CANTIDAD</th>';
		$message.='<td style="color:#000;" valign="middle" align="center">'. $cantidadProducto3 .'</td>';
		$message.='</tr>';
		}
	// Producto + Cantidad (4)
	if($nombreProducto4!=""){
		$message.='<tr>';
		$message.='<th style="color:#8D8D8D;" valign="middle" >TITULO DEL PRODUCTO</th>';
		$message.='<td style="color:#000;" valign="middle" align="center">'. $nombreProducto4 .'</td>';
		$message.='</tr>';
		$message.='<tr>';
		$message.='<th style="color:#8D8D8D;" valign="middle" >CANTIDAD</th>';
		$message.='<td style="color:#000;" valign="middle" align="center">'. $cantidadProducto4 .'</td>';
		$message.='</tr>';
		}
	// Producto + Cantidad (5)
	if($nombreProducto5!=""){
		$message.='<tr>';
		$message.='<th style="color:#8D8D8D;" valign="middle" >TITULO DEL PRODUCTO</th>';
		$message.='<td style="color:#000;" valign="middle" align="center">'. $nombreProducto5 .'</td>';
		$message.='</tr>';
		$message.='<tr>';
		$message.='<th style="color:#8D8D8D;" valign="middle" >CANTIDAD</th>';
		$message.='<td style="color:#000;" valign="middle" align="center">'. $cantidadProducto5 .'</td>';
		$message.='</tr>';
		}
	

$message.='</table>';
// ************************ MENSAJE GENERACION DE PEDIDO ************************************* //
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
    
// ************************ MENSAJE RESPUESTA AUTOMATICA ************************************* //
// Respuesta Automatica Solicitante!
$message2 = "<p>Recibimos su pedido, será revisado por nuestro personal lo más pronto posible, una ves sea procesado su pedido será contactado por esta vía. Saludos.</p>";
$cabeceras2  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras2 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$cabeceras2 .= 'From: Tecnotropolis <'. ORDER_FORM .'>' . "\r\n";
mail($correo, 'Tecnotropolis - Correo Recibido', $message2, $cabeceras2);

/*
$mail = mail(ORDER_FORM, $subject, $message,
     "From: ".$name." <".$email.">\r\n"
    ."Reply-To: ".$email."\r\n"
    ."X-Mailer: PHP/" . phpversion());


*/
echo '<html><head><meta http-equiv="REFRESH" content="0; url=../pedido.php"></head></html>';
}

?>
