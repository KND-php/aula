<section class="container">
	<table id="tabla_materia" class="table table-hover">

		<tr>
			<th>Código</th>
			<th>Usuario</th>
			<th>Nombre</th>
			<th>Decripción</th>
			<th>Fecha Inicio</th>
			<th>Fecha Cierre</th>
		</tr>
		
		<?php foreach ($data as $materia) { ?>
			<tr>
				<td><?php echo $materia->id_materia; ?></td>
				<td><?php echo $materia->uid; ?></td>
				<td><?php echo $materia->nombre; ?></td>
				<td><?php echo $materia->descripcion; ?></td>
				<td><?php echo $materia->finicio; ?></td>
				<td><?php echo $materia->fcierre; ?></td>
				<td><?php echo 'Modificar' ?></td>
				<td><?php echo 'Eliminar' ?></td>
				
			</tr>
		<?php } ?>

	</table>
	<button type="button" class="btn btn-primary" id="mostrar_form_m" onclick="mostrar()">Nueva Materia</button>
	<div id="form_m" style="display: none; width: 80%; margin: auto;">
		
		<?php echo form_open('materia/alta_materia'); 
/*
		if(isset($materia->id_materia)){?>
			<div class="form-group">
			    <label >ID_materia</label>
			    <input type="text" class="form-control" name="id_materia" placeholder="id_materia" value = <?php echo $materia->id_materia?>>
		 	</div>
		 	<?php}else{*/?>
				<div class="form-group">
			    <label >ID_materia</label>
			    <input type="text" class="form-control" name="id_materia" placeholder="id_materia">
		 	</div>
		<?php //}?>
		 	<div class="form-group">
			    <label >Nombre</label>
			    <input type="text" class="form-control" name="nombre" placeholder="nombre">
		 	</div>
		 	<div class="form-group">
			    <label >Descripción</label>
			    <input type="text" class="form-control" name="descripcion" placeholder="descripcion">
		 	</div>
		  	<div class="form-group">
			    <label>Fecha inicio</label>
			    <input type="date" class="form-control" name="finicio" placeholder="finicio">
		  	</div>
		  	<div class="form-group">
			    <label>Fecha Cierre</label>
			    <input type="date" class="form-control" name="fcierre" placeholder="fcierre">
		  	</div>
		  	
		 	<button type="submit" class="btn btn-default">Enviar</button>
		</form>
	</div>
	
</section>

<script type="text/javascript"> 

	function mostrar(){
			document.getElementById("mostrar_form_m").style.display="none";
			document.getElementById("tabla_materia").style.display="none";
			document.getElementById("form_m").style.display="block";
       	}
</script>