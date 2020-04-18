<?php require RUTA_APP .'/view/inc/header.php';?>


 <!-- BARRA DE NAVEGACIÓN -->
    <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-navbar">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto align-items-center">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Enlace 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Enlace 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mis libros</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="avatar" src="images/userm.png" alt=""> Usuario 01
                        </a>


                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- FIN BARRA DE NAVEGACION -->

    <!-- CONTENIDO -->
    <main class="container-fluid">

        <!-- PORTADA CON CARRUSEL -->
        <section class="contenedor">
            <div class="slider-contenedor">
                <section class="contenido-slider">
                    <div class="row ">
                        <div class="col">
                            <h5>Tendencia Especial Para Libros</h5>
                            <h1>TIENDA DE LIBROS EN LINEA</h1>
                            <a class="btn btn-danger" href="#">COMPRA AHORA</a>
                        </div>
                    </div>
                </section>
                <section class="contenido-slider">
                    <div class="row ">
                        <div class="col">
                            <h5>Tendencia Especial Para Libros</h5>
                            <h1>TIENDA DE LIBROS EN LINEA</h1>
                            <a class="btn btn-danger" href="#">COMPRA AHORA</a>
                        </div>
                    </div>
                </section>
                <section class="contenido-slider">
                    <div class="row ">
                        <div class="col">
                            <h5>Tendencia Especial Para Libros</h5>
                            <h1>TIENDA DE LIBROS EN LINEA</h1>
                            <a class="btn btn-danger" href="#">COMPRA AHORA</a>
                        </div>
                    </div>
                </section>

                <section class="contenido-slider">
                    <div class="row ">
                        <div class="col">

                            <h5>Tendencia Especial Para Libros</h5>
                            <h1>TIENDA DE LIBROS EN LINEA</h1>
                            <a class="btn btn-danger" href="#">COMPRA AHORA</a>
                        </div>
                    </div>

                </section>
            </div>

        </section>
        <!--  -->

        <!-- POPULARES -->
        <section class="contenido ">
            <div class="contenido-libro">
                <div class="titulo text-center">
                    <h3> LOS MÁS POPULARES</h3>
                    <p>En esta seccion encontraremos los libros más populares de nuestra biblioteca.</p>
                </div>
                <div class="row galeria-libro justify-content-around">
                    <div class="col-2 detalle-libro">
                        <div class="libro-portada">
                            <img class="img-libro" src="images/hermana.jpg" alt="">
                        </div>
                        <div class="libro-descripcion text-center ">
                            <h5>Este libro no existe</h5>
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <h6><b>$ 10.00</b><small>   <del>$12.00</del></small> </h6>
                        </div>

                    </div>
                    <div class="col-2 detalle-libro">
                        <div class="libro-portada">
                            <img class="img-libro" src="images/cicatriz.jpg" alt="">
                        </div>
                        <div class="libro-descripcion text-center ">
                            <h5>Este libro no existe</h5>
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <h6><b>$ 10.00</b><small>  <del>$12.00</del></small> </h6>
                        </div>
                    </div>
                    <div class="col-2 detalle-libro">
                        <div class="libro-portada">
                            <img class="img-libro" src="images/loba_negra.jpg" alt="">
                        </div>
                        <div class="libro-descripcion text-center ">
                            <h5>Este libro no existe</h5>
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <h6><b>$ 10.00</b><small>  <del>$12.00</del></small> </h6>
                        </div>
                    </div>
                    <div class="col-2 detalle-libro">
                        <div class="libro-portada">
                            <img class="img-libro" src="images/novia-gitana.jpg" alt="">
                        </div>
                        <div class="libro-descripcion text-center ">
                            <h5>Este libro no existe</h5>
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <h6><b>$ 10.00</b><small>  <del>$12.00</del></small> </h6>
                        </div>
                    </div>
                    <div class="col-2 detalle-libro">
                        <div class="libro-portada">
                            <img class="img-libro" src="images/reina-roja.jpg" alt="">
                        </div>
                        <div class="libro-descripcion text-center ">
                            <h5>Este libro no existe</h5>
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <h6><b>$ 10.00</b><small>  <del>$12.00</del></small> </h6>
                        </div>
                    </div>

                </div>
                <div class="ver-mas pt-3">
                    <a class="btn btn-danger" href="<?php echo RUTA_URL;?>/paginas/libros">VER MÁS</a>

                </div>


            </div>
        </section>
        <!-- OFERTAS -->
        <section class="contenido libro">
            <div class="row">
                <div class="col-6">

                    <h2>OFERTAS CON CORONAVIRUS</h2>
                    <h4>Aproveche las ofertas de libros con un 30% de descuento.</h4>

                    <a class="btn btn-danger" href="#">COMPRAR AHORA</a>
                </div>

            </div>
        </section>
        <!-- OFERTAS ESPECIALES -->
        <section class="contenido oferta">
            <div class="contenido-libro">
                <div class="titulo text-center">
                    <h3> LAS OFERTAS</h3>
                    <p>En esta seccion encontraremos los libros en oferta de nuestra biblioteca.</p>
                </div>
                <div class="row galeria-libro justify-content-around">
                    <div class="col-2 detalle-libro">
                        <div class="libro-portada">
                            <img class="img-libro" src="images/hermana.jpg" alt="">
                        </div>
                        <div class="libro-descripcion text-center ">
                            <h5>Este libro no existe</h5>
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <h6><b>$ 10.00</b><small>  <del>$12.00</del></small> </h6>
                        </div>
                    </div>
                    <div class="col-2 detalle-libro">
                        <div class="libro-portada">
                            <img class="img-libro" src="images/cicatriz.jpg" alt="">
                        </div>
                        <div class="libro-descripcion text-center ">
                            <h5>Este libro no existe</h5>
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <h6><b>$ 10.00</b><small>  <del>$12.00</del></small> </h6>
                        </div>
                    </div>
                    <div class="col-2 detalle-libro">
                        <div class="libro-portada">
                            <img class="img-libro" src="images/loba_negra.jpg" alt="">
                        </div>
                        <div class="libro-descripcion text-center ">
                            <h5>Este libro no existe</h5>
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <h6><b>$ 10.00</b><small>  <del>$12.00</del></small> </h6>
                        </div>
                    </div>
                    <div class="col-2 detalle-libro">
                        <div class="libro-portada">
                            <img class="img-libro" src="images/novia-gitana.jpg" alt="">
                        </div>
                        <div class="libro-descripcion text-center ">
                            <h5>Este libro no existe</h5>
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <h6><b>$ 10.00</b><small>  <del>$12.00</del></small> </h6>
                        </div>
                    </div>
                    <div class="col-2 detalle-libro">
                        <div class="libro-portada">
                            <img class="img-libro" src="images/reina-roja.jpg" alt="">
                        </div>
                        <div class="libro-descripcion text-center ">
                            <h5>Este libro no existe</h5>
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <h6><b>$ 10.00</b><small>  <del>$12.00</del></small> </h6>
                        </div>
                    </div>

                </div>
                <div class="row galeria-libro justify-content-around">
                    <div class="col-2 detalle-libro">
                        <div class="libro-portada">
                            <img class="img-libro" src="images/hermana.jpg" alt="">
                        </div>
                        <div class="libro-descripcion text-center ">
                            <h5>Este libro no existe</h5>
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <h6><b>$ 10.00</b><small>  <del>$12.00</del></small> </h6>
                        </div>
                    </div>
                    <div class="col-2 detalle-libro">
                        <div class="libro-portada">
                            <img class="img-libro" src="images/cicatriz.jpg" alt="">
                        </div>
                        <div class="libro-descripcion text-center ">
                            <h5>Este libro no existe</h5>
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <h6><b>$ 10.00</b><small>  <del>$12.00</del></small> </h6>
                        </div>
                    </div>
                    <div class="col-2 detalle-libro">
                        <div class="libro-portada">
                            <img class="img-libro" src="images/loba_negra.jpg" alt="">
                        </div>
                        <div class="libro-descripcion text-center ">
                            <h5>Este libro no existe</h5>
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <h6><b>$ 10.00</b><small>  <del>$12.00</del></small> </h6>
                        </div>
                    </div>
                    <div class="col-2 detalle-libro">
                        <div class="libro-portada">
                            <img class="img-libro" src="images/novia-gitana.jpg" alt="">
                        </div>
                        <div class="libro-descripcion text-center ">
                            <h5>Este libro no existe</h5>
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <h6><b>$ 10.00</b><small>  <del>$12.00</del></small> </h6>
                        </div>
                    </div>
                    <div class="col-2 detalle-libro">
                        <div class="libro-portada">
                            <img class="img-libro" src="images/reina-roja.jpg" alt="">
                        </div>
                        <div class="libro-descripcion text-center ">
                            <h5>Este libro no existe</h5>
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <h6><b>$ 10.00</b><small>  <del>$12.00</del></small> </h6>
                        </div>
                    </div>

                </div>
                <div class="ver-mas pt-3">
                    <a class="btn btn-danger" href="">VER MÁS</a>

                </div>


            </div>
        </section>
        <section class="contenido contact">
            <div class="detalle-contact">
                <h2>Contáctanos</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis sunt unde ratione, ipsum quas provident?</p>
                <a class="btn btn-danger" href="">Contactar</a>
            </div>

        </section>

    </main>


   

<?php require RUTA_APP .'/view/inc/footer.php';?>


