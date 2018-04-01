<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<main class='container'>

	<div class="row justify-content-md-center">
		<div class="col-md-6">

		<section id="form-contacto">
		<h2 class='text-center'>Contacto</h2>
			<?php echo validation_errors(); ?>
			<?php echo form_open('Contacto/enviar'); ?>
				<div class="form-group">
				    <label for="nombre">Nombre</label>
				    <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp" name="nombre">
				<div class="form-group">
				<div class="form-group">
				    <label for="apellido">Apellido</label>
				    <input type="text" class="form-control" id="apellido" aria-describedby="emailHelp" name='apellido'>
				<div class="form-group">
				    <label for="exampleInputEmail1">Correo Electronico</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='email'>
				  </div>
				   <div class="form-group">
				    <label for="mensaje">Mensaje</label>
				    <textarea class="form-control" id="mensaje" rows="3" name='mensaje'></textarea>
				  </div>
				  <button type="submit" class="btn btn-contacto-per btn-block">Enviar</button>
			</form>
		</section>
		</div>
	</div>
</main>
