<?php
// Where will you get the forms' results?
define("ORDER_FORM", 'ventas@tecnotropolis.com.ve');

$post = (!empty($_POST)) ? true : false;

if($post){
$compra="Sitio Web";
$tipo_transaccion = $_POST['tipo_transaccion'];
$nro_transaccion = $_POST['nro_transaccion'];
$banco = $_POST['banco'];
$monto = $_POST['monto'];
$nro_pedido = $_POST['nro_pedido'];    
$correo = $_POST['correo'];    
$telefono = $_POST['telefono'];
$envio = $_POST['envio'];
$direccion = $_POST['direccion'];
$estado = $_POST['estado'];
$ciudad = $_POST['ciudad'];
$mensaje = $_POST['mensaje'];


// ************************ MENSAJE ************************************* //
$message = '<table border="1" bordercolor="#333" bgcolor="#FFF" width="650" align="center" style="font-family:Verdana, Geneva, sans-serif;">';
$message.= '<tr><th colspan="2" style="color:#84BD23">ORDEN DE PAGO</th></tr>';

// Pago
$message.='<tr>';
$message.='<th style="color:#8D8D8D;" valign="middle" >PAGO GENERADO A TRAVES DE</th>';
$message.='<td style="color:#000;" valign="middle" align="center">'. $compra .'</td>';
$message.='</tr>';

// Tipo de Transacción
$message.='<tr>';
$message.='<th style="color:#8D8D8D;" valign="middle" >TIPO DE TRANSACCION</th>';
$message.='<td style="color:#000;" valign="middle" align="center">'. $tipo_transaccion .'</td>';
$message.='</tr>';
    
// Número de Transacción
$message.='<tr>';
$message.='<th style="color:#8D8D8D;" valign="middle" >NUMERO DE TRANSACCION</th>';
$message.='<td style="color:#000;" valign="middle" align="center">'. $nro_transaccion .'</td>';
$message.='</tr>';

// Banco
$message.='<tr>';
$message.='<th style="color:#8D8D8D;" valign="middle" >BANCO</th>';
$message.='<td style="color:#000;" valign="middle" align="center">'. $banco .'</td>';
$message.='</tr>';

// Monto
$message.='<tr>';
$message.='<th style="color:#8D8D8D;" valign="middle" >MONTO</th>';
$message.='<td style="color:#000;" valign="middle" align="center">'. $monto .'</td>';
$message.='</tr>';
    
// Número de Pedido
$message.='<tr>';
$message.='<th style="color:#8D8D8D;" valign="middle" >NUMERO DE PEDIDO</th>';
$message.='<td style="color:#000;" valign="middle" align="center">'. $nro_pedido .'</td>';
$message.='</tr>';

// Correo Electrónico
$message.='<tr>';
$message.='<th style="color:#8D8D8D;" valign="middle" >CORREO ELECTRONICO</th>';
$message.='<td style="color:#000;" valign="middle" align="center">'. $correo .'</td>';
$message.='</tr>';

// Teléfono
$message.='<tr>';
$message.='<th style="color:#8D8D8D;" valign="middle" >TELEFONO</th>';
$message.='<td style="color:#000;" valign="middle" align="center">'. $telefono .'</td>';
$message.='</tr>';

// Opciones de Envíos
$message.='<tr>';
$message.='<th style="color:#8D8D8D;" valign="middle" >ENVIO</th>';
$message.='<td style="color:#000;" valign="middle" align="center">'. $envio .'</td>';
$message.='</tr>';


if ($envio!="tienda"){
    // Dirección de Envío
    $message.='<tr>';
    $message.='<th style="color:#8D8D8D;" valign="middle" >DIRECCION DE ENVIO</th>';
    $message.='<td style="color:#000;" valign="middle" align="center">'. $direccion .'</td>';
    $message.='</tr>';

    // Estado
    $message.='<tr>';
    $message.='<th style="color:#8D8D8D;" valign="middle" >ESTADO</th>';
    $message.='<td style="color:#000;" valign="middle" align="center">'. $estado .'</td>';
    $message.='</tr>';

    // Ciudad
    $message.='<tr>';
    $message.='<th style="color:#8D8D8D;" valign="middle" >CIUDAD</th>';
    $message.='<td style="color:#000;" valign="middle" align="center">'. $ciudad .'</td>';
    $message.='</tr>';
}

// Mensaje
if ($mensaje!=""){
    $message.='<tr>';
    $message.='<th style="color:#8D8D8D;" valign="middle" >Mensaje</th>';
    $message.='<td style="color:#000;" valign="middle" align="center">'. $mensaje .'</td>';
    $message.='</tr>';
}

$message.='</table>';
// ************************ MENSAJE GENERACION DE ORDEN DE PAGO ************************************* //
/*
$para  = 'usuario1@dominio.com' . ', '; // atención a la coma
$para .= 'otrousuario@otrodominio.com';
*/
// Asunto
$titulo = 'Orden de Pago Tecnotropolis';
 

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
$message2 = "<p>Recibimos su <b>Orden de Pago</b>, será revisado por nuestro personal lo más pronto posible, una ves sea procesado su pago, será contactado por esta vía. Saludos.</p>";
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
echo '<html><head><meta http-equiv="REFRESH" content="0; url=../pago.php"></head></html>';
}

?>
