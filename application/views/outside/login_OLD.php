
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
				<div class="col-12 d-flex justify-content-center">
					<h1>login</h1>
				</div>

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
				<div class="col-12 d-flex justify-content-center">
					<p><a href="<?= base_url('index.php/Home') ?>">Ir a pagina</a></p>
				</div>

				<div id="sql_error">
					<p class="d-none text-danger">usuario no existe</p>
				</div>
			</div>

			<div class=""></div>


		</div>










	</div>
