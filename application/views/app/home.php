<!DOCTYPE html>
<html>

<head>

<title>Proyecto</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
<meta htpp-equiv="x-ua-compatible" content="ie-edge">


<link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">

<script src="<?= base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('assets/Jquery/jquery.min3.6.js') ?>"></script>
<style type="text/css">
	
	.borde{
		background-color:gray;
		height: 50px;

	}
	.borde1{
		background-color:black;
		text-align: center;
		
		position: fixed;
		color:white;


	}
	.borde2{
		height: 50px;
		text-align: center;
		background-color: olivedrab;
	}
	.borde3{
		height: 75%;
		width: 75%;
		height: 50vh;
		width: 50vw;
	
		
		background:center center no-repeat ;
		
		
		background-image: url("9.jpg");
		background-attachment: scroll;
		margin: 5%;
		

	}
	.borde4{
		height: 100vh;

	}
	#link1:hover{
		background-color: #FF0;
		transition-duration: 200ms;
	}
	.caption { 
 position: absolute; 
 top: 45%; 
 left: 70%; 
 width: 100%; 
 color: #000000;
font-size: 200%;
} 
	.caption2 { 
 position: absolute; 
 top: 45%; 
 left: 50%; 
 width: 100%; 
 color: #000000;
font-size: 200%;
} 

#cajon{
	background-color:grey;
		text-align: center;
		height: 100vh;
		position: absolute;
		visibility: hidden;
		width: 100%;

}
#volver{

		position: absolute;
		margin-left: 25%;
		

}

table, tr{
	border: 1px solid #ffffff;
	margin-top: 50%;
	width: 100%;
	background:transparent;
}
tr:hover{
	background: blue;
	transition-duration: 500ms;
}

#figuraprincipal{

	background-image: url(https://www.ionos.es/digitalguide/fileadmin/DigitalGuide/Teaser/eigene-app-erstellen-t.jpg);
}

#imagenCss1{
	background:transparent;
	margin-top: 5%;
	height: 40vh;
	
	justify-items: center;
	justify-content: center;
	

}




#imagenCss1:hover{
	background: blue;
	transition-duration: 1s;
}

@media (min-width: 1200px) {
    #foda{

background: #252440;border: 3px solid white; border-radius: 100%; width: 100%; height: 100%; justify-content: center; align-items: center; font-size: 1.5em;}

#fodac{
	font-size: 1.5em;
	position: absolute; margin-top: 15%; height: 100px; width: 100px; align-items:center;
}
#imagenCss1{

	font-size: 1.5em;

}
}

@media (min-width: 940px) and (max-width:1200px) {
    #foda{

background: #000000;border: 3px solid white; width: 100%; height: 100%; justify-content: center; align-items: center;
font-size: 1.5em;
}
#fodac{
	position: absolute; margin-top: 20%; height: 100px; width: 100px; align-items:center;
}
#imagenCss1{

font-size: 1.5em;

}
}


@media (min-width: 768px) and (max-width:992px) {
    #foda{

background: #000000;border: 3px solid white; width: 100%; height: 100%; justify-content: center; align-items: center;

font-size: 1em;
}
#fodac{
	position: absolute; margin-top: 20%; height: 100px; width: 100px; align-items:center; visibility: hidden;
}
}


@media (max-width: 768px) {
    #foda{

background: #000000;border: 3px solid white; width: 100%; height: 100%; justify-content: center; align-items: center;

font-size: 1em;
}
#fodac{
	position: absolute; margin-top: 20%; height: 100px; width: 100px; align-items:center; visibility: hidden;
}
#imagenCss1{

font-size: 1.5em;

}
}

#boton{
	height: 40px;
}

#fortalezaC{
	display: grid;

	grid-gap:10px;
}
#fortaleza{
	grid-column: 1;
	grid-row: 2;
	border-radius: 10px;
	text-align: center;
	border: 2px solid black;
	color: white;
}
#debilidadesC{
	display: grid;

	grid-gap:10px;
}
#debilidades{
	grid-column: 1;
	grid-row: 2;
	border-radius: 10px;
	text-align: center;
	border: 2px solid black;
	color:white;
	justify-items: center;
	justify-content: center;
}
#oportunidadesC{
	display: grid;



	grid-gap:10px;
}
#oportunidades{
	grid-column: 1;
	grid-row: 2;
	border-radius: 10px;
	text-align: center;
	border: 2px solid black;
	color:white;
}
#amenazasC{
	display: grid;

	grid-gap:10px;
}
#amenazas{
	grid-column: 1;
	grid-row: 2;
	border-radius: 10px;
	text-align: center;
	border: 2px solid black;
	color:white;
}
#botonIngresa{
	border:2px solid white;
}
#botonIngresa:hover{
	background:yellow;
	color: black;
	align-self: : center;
}

</style>
<script type="text/javascript">


	function comenzar(){
		buton=document.getElementById("boton");
		buton_volver=document.getElementById("volver");
		buton.addEventListener("click",pulsado,false);
		buton_volver.addEventListener("click",despulsado,false);

	}

	function pulsado(){
		var caja=document.getElementById("cajon");
		buton=document.getElementById("boton");
		var buton_volver=document.getElementById("volver");
		caja.style.visibility="visible";
		buton.style.visibility="hidden";
		buton_volver.style.visibility="visible";

	}
		function despulsado(){
		var caja=document.getElementById("cajon");
		var buton_volver=document.getElementById("volver");
		buton=document.getElementById("boton");
		caja.style.visibility="hidden";
		buton.style.visibility="visible";
		buton_volver.style.visibility="hidden";

	}
	
	

	window.addEventListener("load",comenzar,false);

</script>

</head>

<body>

<!--empieza el contenido-->

<!--nav bar-->
<nav class="navbar navbar-expand-lg navbar-light bg-danger">
  <a class="navbar-brand" href="#">Comunidad</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto mr-5">
      <li class="nav-item active">
        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Foro</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Contenido
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Historias</a>
          <a class="dropdown-item" href="#">Recursos</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Contactanos</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
     
    </form>
  </div>
</nav>
<!--termina nav bar-->
<!--comienza aside-->

<div class="container-fluid" style="height: 500px" id="figuraprincipal">
	<div class="row ">
		
<div class="row col-3" >
	<button	type="button"	 id ="boton" class="btn	btn-dark mt-3 ml-3">Barra herramientas</button>

<div class="row col-9 " id="cajon" >
	<div>
		<button	type="button"	 id ="volver" class="btn	btn-warning mt-3">volver</button>
	</div>
	
		<div class="container-fluid"  >
			<table >
				<tr class="container-fluid">
					<td >inicio</td>
				</tr>
									<td>recursos</td>
				</tr>
									<td>tabla de estadisticas</td>
				</tr>
									<td>grafos</td>
				</tr>

			</table>
		
	</div>


	</div>

	</div>

	

<!--comienza body-->

     <div class="row col-7 justify-content-center " id="imagenCss1">
     	<div class="col-lg-5 col-md-4" id="fortalezaC">
     		<div class="bg-danger align-items-center " id="fortaleza"><p><strong>Fortaleza</strong></p></div>
     	</div>

     	<div class="col-lg-5 col-md-4" id="debilidadesC">
     		<div class="bg-warning align-items-center" id="fortaleza"><p><strong>Debilidades</strong></p></div>
     	</div>

     	
     	<div class="col-lg-5 col-md-4" id="oportunidadesC">
     		<div class="bg-success align-items-center" id="oportunidades"><p><strong>oportunidades</strong></p></div>
     	</div>
     	<div class="col-lg-5 col-md-4" id="amenazasC">
     		<div class="bg-info align-items-center" id="amenazas"><p><strong>Amenazas</strong></p></div>
     	</div>
     	<div style="" id="fodac">
     		<div  id="foda">
     			<p style="align-items: center; margin-top:35%; margin-left: 20%;color: white;font-size: 1.5vw;"><strong>FODA</strong></p>
     			
     		</div>
     		
     	</div>
     </div>

</div>

</div>
<div class=" bg-success h-50 borde4 container-fluid">
	<div class="row col-12">
	<div class="col-2 "></div>
	<div class="col-4 ">
		<p> <h1>Ingrese sus datos</h1> </p><br>
		<p> entra a el portal para obtener las mejores resoluciones empresariales del mercado a tiempo inmediato</p>
		<p> entra a el portal para obtener las mejores resoluciones empresariales del mercado a tiempo inmediato</p>
		<p> entra a el portal para obtener las mejores resoluciones empresariales del mercado a tiempo inmediato</p>
		<p> entra a el portal para obtener las mejores resoluciones empresariales del mercado a tiempo inmediato</p>
		<div style="margin-left: 25%" class="align-content-center justify-content-center"><button	type="button"	id="botonIngresa" class="btn	btn-danger mt-3 ml-3 ">Ingresa</button></div>
			
	</div>
	<div class="col-3 borde3"></div>
	</div>

	<footer class="container-fluid borde1 "></footer>

	<!--Carrousel-->
<!--<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">

      <img class="d-block w-100" src="https://quesignificado.com/wp-content/uploads/2015/11/tree-753069_1920.jpg" alt="First slide">
       <div class="caption"> 
 <p><strong>La comunidad mas grande</strong></p> 
 </div> 
    </div>
    <div class="carousel-item h-50">
      <img class="d-block w-100" src="https://okdiario.com/img/vida-sana/2017/09/05/soledad-7.jpg" alt="Second slide">
             <div class="caption2"> 
 <p><strong>Foros, contenido y muchas cosas mas</strong></p> 
 </div> 
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://i.ytimg.com/vi/LeU0RiTX4qI/maxresdefault.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>-->

<!--termina carrousel-->

<!--<div class="container-fluid borde3  justify-content-end">
	<div class="col-6">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner ">
    <div class="carousel-item active h-25">

      <img class="d-block w-100" src="9.jpg" alt="First slide">
       
    </div>
    <div class="carousel-item h-25">
      <img class="d-block w-100" src="8.jpg" alt="Second slide">
         
    </div>
    <div class="carousel-item h-25">
      <img class="d-block w-100" src="7.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
-->
<!--termina body-->

<!--Carrousel-->
<!--<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">

      <img class="d-block w-100" src="https://quesignificado.com/wp-content/uploads/2015/11/tree-753069_1920.jpg" alt="First slide">
       <div class="caption"> 
 <p><strong>La comunidad mas grande</strong></p> 
 </div> 
    </div>
    <div class="carousel-item h-50">
      <img class="d-block w-100" src="https://okdiario.com/img/vida-sana/2017/09/05/soledad-7.jpg" alt="Second slide">
             <div class="caption2"> 
 <p><strong>Foros, contenido y muchas cosas mas</strong></p> 
 </div> 
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://i.ytimg.com/vi/LeU0RiTX4qI/maxresdefault.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>-->

<!--termina carrousel-->

<!--botom
<main class="container">

	<div class="dropdown mb-3 mt-3 align-items-baseline" >
		<button class="btn btn-danger dropdown-toggle align-end" type="button" id="dropdownMenuButton" data-toggle="dropdown"aria-haspopup="true" aria-expanded="true">
		Boton
			
		</button>

		<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			<a class="dropdown-item" id="link1">link1</a>
			<a class="dropdown-item" id="link1">link2</a>
			<a class="dropdown-item" id="link1">link3</a>
			
		</div>
	</div>


	
</main>

-->





<!--termina-->
<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>


</body>

</html>
