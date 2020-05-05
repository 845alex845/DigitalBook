<?php require RUTA_APP .'/view/inc/header.php';?>


   <section class="contenido ">
        	
			<div class="contenedor-form">
				<h3 class="titulo">Iniciar Sesión</h3>
				

				<form  class="formulario" action="<?=RUTA_URL?>/login" method="POST">
							
					
					<div class="form-group">
						<i class="icono izquierda fa fa-envelope"></i><input class="usuario" type="email" name="email" placeholder="E-mail" required/>
					</div>

					<div class="form-group">
						<i class="icono izquierda fa fa-lock"></i><input class="password" type="password" name="password" placeholder="Contraseña" required/>
					</div>
					
					<input type="submit" class="btn btn-danger btn-block" value="Ingresar" ></input> 
				</form>
			</div>

	
  </section>

 
    <?php require RUTA_APP .'/view/inc/footer.php';?>


	


