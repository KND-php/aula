<!doctype html>
<html>
  <head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Aprendendiendo</title>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />  	
	<link rel="stylesheet" type="text/css" href="estilos/estilo.css">
  	<script type="text/javascript" src="script/cargaAjax.js"></script>
  	<script type="text/javascript" src="script/jQuerry.js"></script>
  	<script type="text/javascript">
	  	//<![CDATA[

		function mostrar_msj(texto)
		{
		var destino = document.getElementById('contenedormensajes');
		destino.innerHTML= ""+texto;
		}

	  function hacer_click(numero, n_pregunta){
	        if (numero == '1') {
	        	mostrar_msj('Correcto');
	        	document.getElementById("opciones1").style.background="green";
	        	document.getElementById("contenedormensajes").style.color="green";
	        	setTimeout(function () {
	        		cargarAjax('autoevaluacion.php','contenedorAjax');return false;
	        		}, 1500);
	        }else{
	        	document.getElementById("opciones1").style.background="green";
	        	mostrar_msj('Incorrecto');
	        	document.cookie = 'variablephp='+n_pregunta;
	        	//setvar(n_pregunta);
	        	//document.getElementById("explicacion").innerHTML=n_pregunta;
	        	cargarAjax('explicacion.php','explicacion');return false;
	        	//document.getElementById("opciones1").innerHTML = 'new Date()';
	        	/*setTimeout(function () {
					cargarAjax('autoevaluacion.php','contenedorAjax');return false;
						}, 1000);*/
	    		}
		    }
	function setvar(n){
		return n;
	}
	function getvar(){
		return document.write(n);
	}

	function buscar(){
		
		//var div = document.getElementById("contenedorAjax");
		//div.textContent = text;
    	var text = $("#busqueda").val();
    	document.cookie = 'buscar='+text;
		cargarAjax('busqueda.php','contenedorAjax');return false;
	}
		       
		//]]>
	</script>
  