
<?php require RUTA_APP .'/view/inc/header.php';?>

   <section class="contenido ">

        <div class="contenedor-form">
          <h3 class="titulo">Crear una cuenta</h3>
          
              <form class="formulario"action="<?=RUTA_URL?>/save" method="POST" >
                             
                         
                       <div class="form-group">
                            <i class="icono izquierda fa fa-user"></i><input class="nombre" type="text"  name="nombre" placeholder="nombre" required/>
                      </div>
                         
                      <div class="form-group">
                            <i class="icono izquierda fa fa-user"></i><input class="apellidos" type="text" name="apellidos" placeholder="apellidos" required/>
                      </div>     
                      

                    
                      <div class="form-group">
                            <i class="icono izquierda fa fa-envelope"></i><input class="usuario" type="email" name="email" placeholder="e-mail" required/>
                      </div>

                
                      <div class="form-group">
                           <i class="icono izquierda fa fa-lock"></i><input class="password" type="password" name="password" placeholder="password" required/>
                      </div>
                      
              
                <input type="submit" class="btn btn-danger btn-block" value="Crear" ></input>             
              </form>
        </div>
      
  </section>

   
    <?php require RUTA_APP .'/view/inc/footer.php';?>