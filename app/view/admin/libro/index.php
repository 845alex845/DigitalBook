<?php require RUTA_APP .'/view/inc/navbar-admin.php';?>
<?php require RUTA_APP .'/view/inc/sidebar-admin.php';?>
<div class="container-fluid">
    <section class="row">
        <div class="col-12">
            <h2>Lista de Libros</h2>
            <?php 
        /*Funcion para mostrar las categorias en la tabla de libros*/ 
       function category($cat,$dat=[]){
        foreach($dat as $categoria):
            if($categoria->id ==$cat){
                $valor=$categoria->nombre;
            }
         endforeach;
        return $valor;
       }
       
        ?>
            <!-- MODAL -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      ...
    </div>
  </div>
</div>
            <a href="LibroController/create" class="btn btn-success left-auto">Crear Libro</a>
            <div class="card card-secondary table-shadow mt-3">
                <div class="card-header">
                    <h3 class="card-title title-table">Modelo de Tabla</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right"
                                placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Titulo</th>
                                <th scope="col">Autor</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Stock</th>
                                <th scope="col">Oferta</th>
                                <th scope="col">Imagen</th>
                                <th colspan="3" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach($datos['libro'] as $libros):?>
                            <tr>
                                <th scope="col"><?php echo $libros->id;?></th>
                                <td><?php echo category($libros->categoria_id,$datos['categoria']);?></td>
                                <td><?php echo $libros->titulo;?></td>
                                <td><?php echo $libros->autor;?></td>
                                <td><?php echo $libros->descripcion;?></td>
                                <td><?php echo $libros->precio;?></td>
                                <td><?php echo $libros->stock;?></td>
                                <td><?php echo $libros->oferta;?></td>
                                <td><?php echo $libros->imagen;?></td>

                                <td><a class="btn btn-secondary  btn-sm"
                                        href="LibroController/show/<?php echo $libros->id;?>">Ver<i
                                            class="fas fa-eye ml-1"></i></a></td>
                                <td><a class="btn btn-primary btn-sm" href="LibroController/edit/<?php echo $libros->id;?>">Editar<i
                                            class="fas fa-edit ml-1"></i></a></td>
                                <td>
                                    <a class="btn btn-danger btn-sm" href="#">Eliminar<i
                                            class="fas fa-trash-alt ml-1"></i></a>
                                </td>
                            </tr>
                            <?php endforeach;?>

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>
</div>
<?php require RUTA_APP .'/view/inc/footer-admin.php';?>