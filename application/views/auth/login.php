<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>FODASOFT | Login</title>


<link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/css/estilo.css') ?>">
<script src="<?= base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('assets/Jquery/jquery-1.6.3.min.js') ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>

<!-- confirm -->
<link rel="stylesheet" href="<?php echo base_url('assets/jquery-confirm/css/jquery-confirm.css'); ?>">
<script type="text/javascript" src="<?php echo base_url('assets/jquery-confirm/js/jquery-confirm.js');?>"></script>


<script>
	$(document).ready(function() {

		$("#letras").hide().fadeIn(2000);
});





		
/*$("#boto").toggle(function(){
  $("#panel").animate(

    {
      left:"0vw"
    });
},function(){

  $("#panel").animate(

    {
      left:"-18vw"
    });

});*/


		
</script>
</head>
<body >
	<div id="fondo">
<!--<div class="container-fluid bg-warning align-items-center justify-content-center fixed-top">
	<div class="row col-4 justify-content-center align-items-center" id="panel">
		
			<div class="col-9 justify-content-center align-items-center " id="tabla">
				<table >
					<tr>
						<td>ok</td>

					</tr>
					<tr>
						<td>ok</td>
					</tr>
					<tr>
						<td>ok</td>
					</tr>
					<tr>
						<td>ok</td>
					</tr>
				</table>
			</div>
			<div class="col-3">
				<div id=boto ></div>
			</div>
			
		
	</div>
	
</div>-->


<div class="container-fluid align-items-center justify-content-center fixed-top">


<div id="letras">Registrate aqui</div>
	
</div>






<div class="container d-flex justify-content-center align-items-center col-4 " id="log">
	<div class="row col-8">
		<div class="col-12 d-flex justify-content-center"><h1>login</h1></div>
	    
	    <div class="col-4 d-flex justify-content-center mt-3">
	    	
	    		
	    		
	    	<label for="Name">nombre</label>
	    	</div>
	   


	    	 <div class="col-8 d-flex justify-content-center mt-3">
	    		
	    	<input id="nombre" type="name" name="nombre">
	    	
	    	</div>

	    <div class="col-4 d-flex justify-content-center mt-3">
	    	
	    		
	    		
	    	<label for="Name">password</label>
	    	</div>
	   


	    	 <div class="col-8 d-flex justify-content-center mt-3">
	    	
	    		
	    		
	    	<input id="clave" type="password" name="contrasena">
	    	
	    	</div>
	    <div class="col-12 d-flex justify-content-center mt-3" id="contenidoBoton">
			<button id=boton type="button" class="btn btn-light" onclick="login()">Acceder</button>
		</div>
	    <div class="col-12 d-flex justify-content-center"><p><a href="<?= base_url('index.php/Home') ?>">Ir a pagina</a></p></div>
	    
		<div id="sql_error">
			<p class="d-none text-danger">usuario no existe</p>
		</div>
	</div>
	
<div class=""></div>

	
</div>










</div>


<script>
	function login() {
        var url = "<?= base_url('index.php/Login/validarUsuario') ?>";
        $.ajax({
                url: url,
                dataType: 'json',
                type: 'POST',
                data: {
                    'user': $("#nombre").val(),
                    'pass': $("#clave").val(),
                },
            })
            .done(function(response) {
				if(response.ok){
					location.href = "<?= base_url('index.php/Home') ?>";
				}else{
					$.alert({
                    title: response.titulo,
                    content: response.mensaje,
                    typeAnimated: true,
                    scrollToPreviousElement: false,
                    columnClass: 'medium',
                    icon: 'fas fa-info-circle',
                    type: response.color,
                    theme: 'light',
                    buttons: {
                        aceptar: {
                            text: 'Aceptar',
                            btnClass: 'btn-orange',
                        }
                    }
                });
				$("#sql_error").removeClass("d-none");
				}

            })
            .fail(function() {
                console.log("error al loguearse");
            });
    }
</script>


</body>
</html>
</html>