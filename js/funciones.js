// JavaScript Document
function incorrecto(camp){
	var blockDiv = 'div_'+camp;
	field = document.getElementById(blockDiv);
	field.className = "row-fluid control-group error";
  	/*hijo = field.getElementsByTagName('label');
	hijo[0].setAttribute('class', '');*/
	}
function correcto(camp){
	var blockDiv = 'div_'+camp;
	field = document.getElementById(blockDiv);
	field.className = "row-fluid";
	}

// VALIDACION DEL FORMULARIO ORDEN DE COMPRA
// INICIO VALIDACION (ORDEN DE COMPRA)
function OrdenDeCompra (){    
	var validado = true;
	// Función que valida campos básicos
	function f_validacion (elemento){
		var camp = document.getElementById(elemento);
			if(camp.value==""){
				incorrecto(elemento);
				validado = false;
			} else {
				correcto(camp);														
			}
	}// fin de la funcion (f_validacion)	
	//'compra'
	/*if(document.getElementById('compra')){
		if(document.getElementById('compra').value==""){
			incorrecto('compra'); validado = false;
			}else if(document.getElementById('compra').value=="ml"){
				correcto('compra');
				if(document.getElementById('seudonimo').value==""){incorrecto('seudonimo'); validado = false;}else{correcto('seudonimo');}				
				}else {correcto('compra');}
	}*/
    //'seudonimo'
    if(document.getElementById('seudonimo').value==""){incorrecto('seudonimo'); validado = false;}else {correcto('seudonimo');}
	//'persona'	
	if(document.getElementById('persona')){
		if(document.getElementById('persona').value==""){
			incorrecto('persona'); validado = false;
			}
			else if(document.getElementById('persona').value=="j"){
				correcto('persona');
				if(document.getElementById('rif').value==""){incorrecto('rif'); validado = false;}else{correcto('rif');}
				if(document.getElementById('razon-social').value==""){incorrecto('razon-social'); validado = false;}else{correcto('razon-social');}		
				if(document.getElementById('direccion-fiscal').value==""){incorrecto('direccion-fiscal'); validado = false;}else{correcto('direccion-fiscal');}		
				}
			else if(document.getElementById('persona').value=="n"){
				correcto('persona');
				if(document.getElementById('nombre-apellido').value==""){incorrecto('nombre-apellido'); validado = false;}else{correcto('nombre-apellido');}
				if(document.getElementById('cedula').value==""){incorrecto('cedula'); validado = false;}else{correcto('cedula');}
                if(document.getElementById('direccion').value==""){incorrecto('direccion'); validado = false;}else{correcto('direccion');}
				}
	}
	//'forma-pago'	
	if(document.getElementById('forma-pago')){
		if(document.getElementById('forma-pago').value==""){
			incorrecto('forma-pago'); validado = false;
			}
			
			else if(document.getElementById('forma-pago').value=="deposito" || document.getElementById('forma-pago').value=="transferencia" || document.getElementById('forma-pago').value=="credito-mp"){
				correcto('forma-pago');
				if(document.getElementById('monto').value==""){incorrecto('monto'); validado = false;}else{correcto('monto');}
				if(document.getElementById('nro-transaccion').value==""){incorrecto('nro-transaccion'); validado = false;}else{correcto('nro-transaccion');}		
				if(document.getElementById('banco').value==""){incorrecto('banco'); validado = false;}else{correcto('banco');}		
				}
            else if(document.getElementById('forma-pago').value=="credito-mp"){
				correcto('forma-pago');
				if(document.getElementById('monto').value==""){incorrecto('monto'); validado = false;}else{correcto('monto');}
				if(document.getElementById('nro-transaccion').value==""){incorrecto('nro-transaccion'); validado = false;}else{correcto('nro-transaccion');}							
				}            
				
			else if(document.getElementById('forma-pago').value=="debito" || document.getElementById('forma-pago').value=="efectivo"){
				correcto('forma-pago');
			}
	}
	//'empresa-envio'	
	if(document.getElementById('empresa-envio')){
		if(document.getElementById('empresa-envio').value==""){
			incorrecto('empresa-envio'); validado = false;
			}
			
			else if(document.getElementById('empresa-envio').value=="MRW" || document.getElementById('empresa-envio').value=="ZOOM"){
				correcto('empresa-envio');
				if(document.getElementById('direccion-envio').value==""){incorrecto('direccion-envio'); validado = false;}else {correcto('direccion-envio');}
			}
				
			else if(document.getElementById('empresa-envio').value=="tienda"){
				correcto('empresa-envio');
			}
	}
	
		
	if(document.getElementById('telefono').value==""){incorrecto('telefono'); validado = false;}else {correcto('telefono');}
	if(document.getElementById('correo').value==""){incorrecto('correo'); validado = false;}else {correcto('correo');}
	if(document.getElementById('nombre-producto').value==""){incorrecto('nombre-producto'); validado = false;}else {correcto('nombre-producto');}
	//
	return validado;
	
	}
// FIN VALIDACION (ORDEN DE COMPRA)

// VALIDACION DEL FORMULARIO DE PEDIDO
// INICIO VALIDACION (PEDIDO)
function Pedido (){    
	var validado = true;
    
	// nombre-apellido
    if(document.getElementById('nombre-apellido').value==""){incorrecto('nombre-apellido'); validado = false;}else {correcto('nombre-apellido');}		
    // cedula
	if(document.getElementById('cedula').value==""){incorrecto('cedula'); validado = false;}else {correcto('cedula');}
    // telefono
	if(document.getElementById('telefono').value==""){incorrecto('telefono'); validado = false;}else {correcto('telefono');}
    // correo
	if(document.getElementById('correo').value==""){incorrecto('correo'); validado = false;}else {correcto('correo');}
	// nombre-producto
    if(document.getElementById('nombre-producto').value==""){incorrecto('nombre-producto'); validado = false;}else {correcto('nombre-producto');}
	return validado;
	
	}
// FIN VALIDACION (PEDIDO)

// VALIDACION DEL FORMULARIO PAGO
// INICIO VALIDACION (PAGO)
function Pago (){    
	var validado = true;
	// Función que valida campos básicos
	function f_validacion (elemento){
		var camp = document.getElementById(elemento);
			if(camp.value==""){
				incorrecto(elemento);
				validado = false;
			}else{
				correcto(camp);														
			}
	}// fin de la funcion (f_validacion)	
	
    //'tipo_transaccion'
    if(document.getElementById('tipo_transaccion').value==""){incorrecto('tipo_transaccion'); validado = false;}else {correcto('tipo_transaccion');}
    
    //'nro_transaccion'
    if(document.getElementById('nro_transaccion').value==""){incorrecto('nro_transaccion'); validado = false;}else {correcto('nro_transaccion');}
    
    //'banco'
    if(document.getElementById('banco').value==""){incorrecto('banco'); validado = false;}else {correcto('banco');}
    
    //'monto'
    if(document.getElementById('monto').value==""){incorrecto('monto'); validado = false;}else {correcto('monto');}
    
    //'nro_pedido'
    if(document.getElementById('nro_pedido').value==""){incorrecto('nro_pedido'); validado = false;}else {correcto('nro_pedido');}
    
    //'correo'
    if(document.getElementById('correo').value==""){incorrecto('correo'); validado = false;}else {correcto('correo');}
    
    //'telefono'
    if(document.getElementById('telefono').value==""){incorrecto('telefono'); validado = false;}else {correcto('telefono');}    
	
	//'envio'	
	if(document.getElementById('envio')){
		if(document.getElementById('envio').value==""){
			incorrecto('envio'); validado = false;
			}
			
			else if(document.getElementById('envio').value=="MRW" || document.getElementById('envio').value=="ZOOM"){
				correcto('envio');
				if(document.getElementById('direccion').value==""){incorrecto('direccion'); validado = false;}else {correcto('direccion');}
                if(document.getElementById('estado').value==""){incorrecto('estado'); validado = false;}else {correcto('estado');}
                if(document.getElementById('ciudad').value==""){incorrecto('ciudad'); validado = false;}else {correcto('ciudad');}
			}
				
			else if(document.getElementById('envio').value=="tienda"){
				correcto('envio');
			}
	}
		
	return validado;
	
	}
// FIN VALIDACION (PAGO)


// MOSTRAR/OCULTAR CAMPOS
function mostrarOcultar() {
	/*if (document.getElementById('compra').value!="ml"){
		document.getElementById('div_seudonimo').className = "row-fluid hidden";
		}else {
			document.getElementById('div_seudonimo').className = "row-fluid visible";
			}*/
	if(document.getElementById('persona')){
        switch (document.getElementById('persona').value){										
                        case 'j':
                            document.getElementById('div_razon-social').className = "row-fluid visible";	
                            document.getElementById('div_rif').className = "row-fluid visible";	
                            document.getElementById('div_direccion-fiscal').className = "row-fluid visible";

                            document.getElementById('div_nombre-apellido').className = "row-fluid hidden";
                            document.getElementById('div_cedula').className = "row-fluid hidden";
                            document.getElementById('div_direccion').className = "row-fluid hidden";
                        break;
                        case 'n':
                            document.getElementById('div_razon-social').className = "row-fluid hidden";	
                            document.getElementById('div_rif').className = "row-fluid hidden";	
                            document.getElementById('div_direccion-fiscal').className = "row-fluid hidden";

                            document.getElementById('div_nombre-apellido').className = "row-fluid visible";
                            document.getElementById('div_cedula').className = "row-fluid visible";
                            document.getElementById('div_direccion').className = "row-fluid visible";

                        break;					
                        default:
                        document.getElementById('div_razon-social').className = "row-fluid hidden";	
                        document.getElementById('div_rif').className = "row-fluid hidden";	
                        document.getElementById('div_direccion-fiscal').className = "row-fluid hidden";	
                        document.getElementById('div_nombre-apellido').className = "row-fluid hidden";
                        document.getElementById('div_cedula').className = "row-fluid hidden";	
                        document.getElementById('div_direccion').className = "row-fluid hidden";
                        }	
    }
    if(document.getElementById('forma-pago')){
        
        if (document.getElementById('forma-pago').value=="deposito" || document.getElementById('forma-pago').value=="transferencia"){
			document.getElementById('div_monto').className = "row-fluid visible";
			document.getElementById('div_banco').className = "row-fluid visible";
			document.getElementById('div_nro-transaccion').className = "row-fluid visible";
		}else if (document.getElementById('forma-pago').value=="credito-mp"){
			document.getElementById('div_monto').className = "row-fluid visible";			
			document.getElementById('div_nro-transaccion').className = "row-fluid visible";
			}   
        else if (document.getElementById('forma-pago').value=="efectivo" || document.getElementById('forma-pago').value=="debito" || document.getElementById('forma-pago').value==""){
			document.getElementById('div_monto').className = "row-fluid hidden";
			document.getElementById('div_banco').className = "row-fluid hidden";
			document.getElementById('div_nro-transaccion').className = "row-fluid hidden";
			}   
    }
	
	if (document.getElementById('empresa-envio')){
		field = document.getElementById('div_forma-pago');
		hijo = field.getElementsByTagName('option');
		if (document.getElementById('empresa-envio').value=="MRW" || document.getElementById('empresa-envio').value=="ZOOM"){
			document.getElementById('div_direccion-envio').className = "row-fluid visible";
			hijo[3].setAttribute('class', 'hidden');
			hijo[5].setAttribute('class', 'hidden');
			}else {
				document.getElementById('div_direccion-envio').className = "row-fluid hidden";
				hijo[3].setAttribute('class', '');
				hijo[5].setAttribute('class', '');
				}
	}
    
    if (document.getElementById("envio")){        
		if (document.getElementById('envio').value=="MRW" || document.getElementById('envio').value=="ZOOM"){
			document.getElementById('div_direccion').className = "row-fluid visible";
            document.getElementById('div_estado').className = "row-fluid visible";
            document.getElementById('div_ciudad').className = "row-fluid visible";
			}else {
				document.getElementById('div_direccion').className = "row-fluid hidden";				
				document.getElementById('div_estado').className = "row-fluid hidden";				
				document.getElementById('div_ciudad').className = "row-fluid hidden";				
				}
	}    	
}

	