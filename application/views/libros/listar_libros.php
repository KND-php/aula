<section class="container">
	<table id="tabla_usuarios" class="table table-hover">

		<tr>
			<th>Nombre</th>
			<th>Apellido</th>
		</tr>
		
		<?php foreach ($data as $usuario) { ?>
			<tr>
				<td><?php echo $usuario->nombre; ?></td>
				<td><?php echo $usuario->apellido; ?></td>
				<td><?php echo $usuario->usuario; ?></td>
				<td><?php echo $usuario->pass; ?></td>
			</tr>
		<?php } ?>

	</table>
	<button type="button" class="btn btn-primary" id="mostrar_form" onclick="mostrar()">Nuevo Usuario</button>
	<div id="form" style="display: none; width: 80%; margin: auto;">
		<?php echo validation_errors(); ?> 
		<?php echo form_open('usuario/nuevo_usuario'); ?>

		<!--<form role="form">-->
			<div class="form-group">
			    <label >Nombre</label>
			    <input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
		 	</div>
		  	<div class="form-group">
			    <label for="exampleInputEmail1">Correo</label>
			    <input type="email" class="form-control" name="email" placeholder="Email">
		  	</div>
		  	<div class="form-group">
			    <label>D.N.I</label>
			    <input type="text" class="form-control" name="dni" placeholder="DNI">
		  	</div>
		  	<div class="form-group">
			    <label>Telefono</label>
			    <input type="text" class="form-control" name="tel" placeholder="Telefono">
		  	</div>
		  	<div class="form-group">
			    <label>User</label>
			    <input type="text" class="form-control" name="user" placeholder="User">
		  	</div>
		  	<div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" class="form-control" name="pass" placeholder="Password">
		  	</div>
		 	<button type="submit" class="btn btn-default">Enviar</button>
		</form>
	</div>
</section>

<script type="text/javascript"> 

	function mostrar(){
			document.getElementById("mostrar_form").style.display="none";
			document.getElementById("tabla_usuarios").style.display="none";
			document.getElementById("form").style.display="block";
       	}
</script>