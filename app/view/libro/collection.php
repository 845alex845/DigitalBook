<?php require RUTA_APP .'/view/inc/header.php';?>
  

    <section class="contenido">
            

            <table class="table">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Título</th>
                        <th>Autor</th>
                    </tr>
                </thead>
   
                <tbody>
                
                    <?php  foreach($datos['libros'] as $libro):?>
                    <tr>
                    <td><?php echo $libro->id;?></td>
                    <td><?php echo $libro->titulo;?></td>
                    <td><?php echo $libro->autor;?></td>
                    </tr>
                    <?php endforeach ;?>

                </tbody>
            </table>




            <div class="row catalogo ">
           

                <div class="col-12 catalogo-container ">

                    <div class="collection-container ">
                        <!-- <h2>COLECCION DE LIBROS</h2> -->

                        <div class="card ">
                            <div style="background-color: none;" class="card-header bg-principal ">
                                <div class="card-header p-1 border-0">
                                    <ul class="nav nav-tabs card-header-tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#">Todos</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Romance</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="#">Terror</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="#">Comedia</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="#">Novelas</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="#">Planchas</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="#">Infantil</a>
                                        </li>
                                    </ul>

                                </div>

                            </div>
                            <div class="card-body">
                                <div class="contenido-libro">

                                    <div class="titulo text-center">
                                        <h3 data-aos="zoom-in-right"> LOS MÁS POPULARES</h3>
                                        <p>En esta seccion encontraremos los libros más populares de nuestra biblioteca.</p>
                                    </div>
                                    <div class=" galeria-libro d-flex flex-wrap justify-content-around align-items-center  py-2">
                                        <div class="detalle-libro text-center mt-4" data-aos="flip-left" data-aos-duration="500">
                                            <div class="libro-portada p-1 " onmouseout="document.getElementById('book01').style.display='none'" onmouseover="document.getElementById('book01').style.display='block'">
                                                <div class="option-libro" id="book01">
                                                    <a href="#"><i class="fas fa-shopping-cart"></i></a>
                                                    <a href="#"><i class="far fa-heart"></i></a>
                                                    <a href="#"><i class="fas fa-search"></i></a>
                                                    <a href="#"><i class="fas fa-sync-alt"></i></a>

                                                </div>
                                                <img class="img-fluid" src="images/loba_negra.jpg" alt="">
                                            </div>
                                            <div class="libro-descripcion ">
                                                <h5>Nuevo Libro</h5>
                                                <span>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </span>
                                                <h6><b>$ 10.00</b><small>   <sup><del>$12.00</del></sup></small> </h6>
                                            </div>
                                        </div>
                                        <div class="detalle-libro text-center mt-4" data-aos="flip-left" data-aos-duration="500">
                                            <div class="libro-portada p-1 " onmouseout="document.getElementById('book02').style.display='none'" onmouseover="document.getElementById('book02').style.display='block'">
                                                <div class="option-libro" id="book02">
                                                    <a href="#"><i class="fas fa-shopping-cart"></i></a>
                                                    <a href="#"><i class="far fa-heart"></i></a>
                                                    <a href="#"><i class="fas fa-search"></i></a>
                                                    <a href="#"><i class="fas fa-sync-alt"></i></a>

                                                </div>
                                                <img class="img-fluid" src="images/loba_negra.jpg" alt="">
                                            </div>
                                            <div class="libro-descripcion ">
                                                <h5>Nuevo Libro</h5>
                                                <span>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </span>
                                                <h6><b>$ 10.00</b><small>   <sup><del>$12.00</del></sup></small> </h6>
                                            </div>
                                        </div>
                                        <div class="detalle-libro text-center mt-4" data-aos="flip-left" data-aos-duration="500">
                                            <div class="libro-portada p-1 " onmouseout="document.getElementById('book03').style.display='none'" onmouseover="document.getElementById('book03').style.display='block'">
                                                <div class="option-libro" id="book03">
                                                    <a href="#"><i class="fas fa-shopping-cart"></i></a>
                                                    <a href="#"><i class="far fa-heart"></i></a>
                                                    <a href="#"><i class="fas fa-search"></i></a>
                                                    <a href="#"><i class="fas fa-sync-alt"></i></a>

                                                </div>
                                                <img class="img-fluid" src="images/loba_negra.jpg" alt="">
                                            </div>
                                            <div class="libro-descripcion ">
                                                <h5>Nuevo Libro</h5>
                                                <span>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </span>
                                                <h6><b>$ 10.00</b><small>   <sup><del>$12.00</del></sup></small> </h6>
                                            </div>
                                        </div>

                                        <div class="detalle-libro text-center mt-4" data-aos="flip-left" data-aos-duration="500">
                                            <div class="libro-portada p-1 " onmouseout="document.getElementById('book04').style.display='none'" onmouseover="document.getElementById('book04').style.display='block'">
                                                <div class="option-libro" id="book04">
                                                    <a href="#"><i class="fas fa-shopping-cart"></i></a>
                                                    <a href="#"><i class="far fa-heart"></i></a>
                                                    <a href="#"><i class="fas fa-search"></i></a>
                                                    <a href="#"><i class="fas fa-sync-alt"></i></a>

                                                </div>
                                                <img class="img-fluid" src="images/loba_negra.jpg" alt="">
                                            </div>
                                            <div class="libro-descripcion ">
                                                <h5>Nuevo Libro</h5>
                                                <span>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </span>
                                                <h6><b>$ 10.00</b><small>   <sup><del>$12.00</del></sup></small> </h6>
                                            </div>
                                        </div>
                                        <div class="detalle-libro text-center mt-4" data-aos="flip-left" data-aos-duration="500">
                                            <div class="libro-portada p-1 " onmouseout="document.getElementById('book05').style.display='none'" onmouseover="document.getElementById('book05').style.display='block'">
                                                <div class="option-libro" id="book05">
                                                    <a href="#"><i class="fas fa-shopping-cart"></i></a>
                                                    <a href="#"><i class="far fa-heart"></i></a>
                                                    <a href="#"><i class="fas fa-search"></i></a>
                                                    <a href="#"><i class="fas fa-sync-alt"></i></a>

                                                </div>
                                                <img class="img-fluid" src="images/loba_negra.jpg" alt="">
                                            </div>
                                            <div class="libro-descripcion ">
                                                <h5>Nuevo Libro</h5>
                                                <span>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </span>
                                                <h6><b>$ 10.00</b><small>   <sup><del>$12.00</del></sup></small> </h6>
                                            </div>
                                        </div>

                                        <div class="detalle-libro text-center mt-4" data-aos="flip-left" data-aos-duration="500">
                                            <div class="libro-portada p-1 " onmouseout="document.getElementById('book06').style.display='none'" onmouseover="document.getElementById('book06').style.display='block'">
                                                <div class="option-libro" id="book06">
                                                    <a href="#"><i class="fas fa-shopping-cart"></i></a>
                                                    <a href="#"><i class="far fa-heart"></i></a>
                                                    <a href="#"><i class="fas fa-search"></i></a>
                                                    <a href="#"><i class="fas fa-sync-alt"></i></a>

                                                </div>
                                                <img class="img-fluid" src="images/loba_negra.jpg" alt="">
                                            </div>
                                            <div class="libro-descripcion ">
                                                <h5>Nuevo Libro</h5>
                                                <span>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </span>
                                                <h6><b>$ 10.00</b><small>   <sup><del>$12.00</del></sup></small> </h6>
                                            </div>
                                        </div>
                                        <div class="detalle-libro text-center mt-4" data-aos="flip-left" data-aos-duration="500">
                                            <div class="libro-portada p-1 " onmouseout="document.getElementById('book07').style.display='none'" onmouseover="document.getElementById('book07').style.display='block'">
                                                <div class="option-libro" id="book07">
                                                    <a href="#"><i class="fas fa-shopping-cart"></i></a>
                                                    <a href="#"><i class="far fa-heart"></i></a>
                                                    <a href="#"><i class="fas fa-search"></i></a>
                                                    <a href="#"><i class="fas fa-sync-alt"></i></a>

                                                </div>
                                                <img class="img-fluid" src="images/loba_negra.jpg" alt="">
                                            </div>
                                            <div class="libro-descripcion ">
                                                <h5>Nuevo Libro</h5>
                                                <span>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </span>
                                                <h6><b>$ 10.00</b><small>   <sup><del>$12.00</del></sup></small> </h6>
                                            </div>
                                        </div>
                                        <div class="detalle-libro text-center mt-4" data-aos="flip-left" data-aos-duration="500">
                                            <div class="libro-portada p-1 " onmouseout="document.getElementById('book08').style.display='none'" onmouseover="document.getElementById('book08').style.display='block'">
                                                <div class="option-libro" id="book08">
                                                    <a href="#"><i class="fas fa-shopping-cart"></i></a>
                                                    <a href="#"><i class="far fa-heart"></i></a>
                                                    <a href="#"><i class="fas fa-search"></i></a>
                                                    <a href="#"><i class="fas fa-sync-alt"></i></a>

                                                </div>
                                                <img class="img-fluid" src="images/loba_negra.jpg" alt="">
                                            </div>
                                            <div class="libro-descripcion ">
                                                <h5>Nuevo Libro</h5>
                                                <span>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </span>
                                                <h6><b>$ 10.00</b><small>   <sup><del>$12.00</del></sup></small> </h6>
                                            </div>
                                        </div>
                                        <div class="detalle-libro text-center mt-4" data-aos="flip-left" data-aos-duration="500">
                                            <div class="libro-portada p-1 " onmouseout="document.getElementById('book09').style.display='none'" onmouseover="document.getElementById('book09').style.display='block'">
                                                <div class="option-libro" id="book09">
                                                    <a href="#"><i class="fas fa-shopping-cart"></i></a>
                                                    <a href="#"><i class="far fa-heart"></i></a>
                                                    <a href="#"><i class="fas fa-search"></i></a>
                                                    <a href="#"><i class="fas fa-sync-alt"></i></a>

                                                </div>
                                                <img class="img-fluid" src="images/loba_negra.jpg" alt="">
                                            </div>
                                            <div class="libro-descripcion ">
                                                <h5>Nuevo Libro</h5>
                                                <span>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </span>
                                                <h6><b>$ 10.00</b><small>   <sup><del>$12.00</del></sup></small> </h6>
                                            </div>
                                        </div>
                                        <div class="detalle-libro text-center mt-4" data-aos="flip-left" data-aos-duration="500">
                                            <div class="libro-portada p-1 " onmouseout="document.getElementById('book10').style.display='none'" onmouseover="document.getElementById('book10').style.display='block'">
                                                <div class="option-libro" id="book10">
                                                    <a href="#"><i class="fas fa-shopping-cart"></i></a>
                                                    <a href="#"><i class="far fa-heart"></i></a>
                                                    <a href="#"><i class="fas fa-search"></i></a>
                                                    <a href="#"><i class="fas fa-sync-alt"></i></a>

                                                </div>
                                                <img class="img-fluid" src="images/loba_negra.jpg" alt="">
                                            </div>
                                            <div class="libro-descripcion ">
                                                <h5>Nuevo Libro</h5>
                                                <span>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </span>
                                                <h6><b>$ 10.00</b><small>   <sup><del>$12.00</del></sup></small> </h6>
                                            </div>
                                        </div>
                                        <div class="detalle-libro text-center d-lg-none d-xl-block mt-4" data-aos="flip-left" data-aos-duration="500">
                                            <div class="libro-portada p-1 " onmouseout="document.getElementById('book11').style.display='none'" onmouseover="document.getElementById('book11').style.display='block'">
                                                <div class="option-libro" id="book11">
                                                    <a href="#"><i class="fas fa-shopping-cart"></i></a>
                                                    <a href="#"><i class="far fa-heart"></i></a>
                                                    <a href="#"><i class="fas fa-search"></i></a>
                                                    <a href="#"><i class="fas fa-sync-alt"></i></a>

                                                </div>
                                                <img class="img-fluid" src="images/loba_negra.jpg" alt="">
                                            </div>
                                            <div class="libro-descripcion ">
                                                <h5>Nuevo Libro</h5>
                                                <span>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </span>
                                                <h6><b>$ 10.00</b><small>   <sup><del>$12.00</del></sup></small> </h6>
                                            </div>
                                        </div>
                                        <div class="detalle-libro text-center d-lg-none d-xl-block mt-4" data-aos="flip-left" data-aos-duration="500">
                                            <div class="libro-portada p-1 " onmouseout="document.getElementById('book12').style.display='none'" onmouseover="document.getElementById('book12').style.display='block'">
                                                <div class="option-libro" id="book12">
                                                    <a href="#"><i class="fas fa-shopping-cart"></i></a>
                                                    <a href="#"><i class="far fa-heart"></i></a>
                                                    <a href="#"><i class="fas fa-search"></i></a>
                                                    <a href="#"><i class="fas fa-sync-alt"></i></a>

                                                </div>
                                                <img class="img-fluid" src="images/loba_negra.jpg" alt="">
                                            </div>
                                            <div class="libro-descripcion ">
                                                <h5>Nuevo Libro</h5>
                                                <span>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </span>
                                                <h6><b>$ 10.00</b><small>   <sup><del>$12.00</del></sup></small> </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <nav aria-label="Page navigation example " style="margin-top: 30px;">
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Atrás</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">Siguiente</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

    </section>
<?php require RUTA_APP .'/view/inc/footer.php';?>
