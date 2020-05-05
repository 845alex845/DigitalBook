<?php if(!$_GET['pagina']){
   header('location: '.RUTA_URL.'/CategoriaController?pagina=1');
}?>
<?php require RUTA_APP .'/view/inc/navbar-admin.php';?>
<?php require RUTA_APP .'/view/inc/sidebar-admin.php';?>
<h2>Categorias</h2>
<?php 

$cantidad=count($datos['categoria']);
$itemxpagina=5;
$paginas=ceil($cantidad/$itemxpagina);
// echo $paginas;
// echo RUTA_URL.'/CategoriaController?pagina=1';
// echo $_GET['pagina']+2;
?>
<div class="container">
    <section class="row">
        <div class="col-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Lista de Categorías </h3>
                   
                </div>
                <div class="card-body table-responsive p-0" >
                        <table class="table table-head-fixed text-nowrap">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th colspan="2" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                            <?php foreach($datos['categoria'] as $categoria):?>
                            <?php 
                           
                                if( (($_GET['pagina']*5)-4)<=$categoria->id &&$categoria->id<=$_GET['pagina']*5){?>
                                <tr>
                                    <th scope="col"><?php echo $categoria->id;?></th>
                                    <td><?php echo $categoria->nombre;?></td>
                                    <td><a class="btn btn-primary btn-sm" href="#">Editar<i class="fas fa-edit ml-1"></i></a></td>
                                    <td><a class="btn btn-danger btn-sm" href="#">Eliminar<i class="fas fa-trash-alt ml-1"></i></a></td>
                                </tr>   
                                <?php }?>                                   
                            <?php 
                            endforeach;?>                                   
                            </tbody>
                        </table>
                    </div> 
                    <div class="card-footer">
                        <nav aria-label="...">
                            <ul class="pagination">
                                <li class="page-item <?php echo $_GET['pagina']<=1 ? 'disabled' :'' ?>">
                                <a class="page-link" href="<?php echo RUTA_URL; ?>/CategoriaController?pagina=<?php echo $_GET['pagina']-1;?>">Anterior</a>
                                </li>
                                <?php for($i=0;$i<$paginas;$i++):?>
                                <li class="page-item <?php echo $_GET['pagina'] ==$i+1 ? 'active' :'' ?>">
                                
                                <a class="page-link" href="<?php echo RUTA_URL; ?>/CategoriaController?pagina=<?php echo $i+1;?>">
                                <?php echo $i+1;?></a></li>
                               <?php endfor ;?>

                                <li class="page-item <?php echo $_GET['pagina']>=$paginas ? 'disabled' :'' ?>">
                                <a class="page-link"href="<?php echo RUTA_URL; ?>/CategoriaController?pagina=<?php echo $_GET['pagina']+1;?>">Siguiente</a>
                                </li>
                            </ul>
                        </nav>
                    </div> 
            </div>
        </div>  
        <div class="col-6">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Crear Categoría</h3>
                    </div>
                    <div class="card-body">
                    <form action="<?php echo RUTA_URL;?>/CategoriaController/create" method="POST">

                        <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <input  class="form-control" type="text" name="nombre"  placeholder="Nueva Categoria">          
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label></label>
                                    <input type="submit" class="btn btn-info btn-sm" value="Crear">
                                    </div>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>     
</div>
<?php require RUTA_APP .'/view/inc/footer-admin.php';?>