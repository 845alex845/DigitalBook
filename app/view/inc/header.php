<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DigitalBook</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Titillium+Web&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= RUTA_URL ?>/public/css/style.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Comic Neue' rel='stylesheet' type='text/css'>

    

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,900" rel="stylesheet" type="text/css" media="all">


</head>

<body>
    <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-principal">
        <div class="container">

            <a class="navbar-brand" href="index.html"><img class=" img-fluid logo" src="<?= RUTA_URL ?>/public/images/digitalbook.png" alt=""></a>

            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
            </button>





            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto align-items-center justify-content-between">
                    <li class="nav-item ">
                        <a class="nav-link" href="<?=RUTA_URL?>">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=RUTA_URL?>/CollectionController">Colección</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ofertas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=RUTA_URL?>/Store/admin">Contacto</a>
                    </li>
                    <li style="min-width: 56px;" class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i><sup>1</sup></a>
                    </li>
                    <li style="min-width: 56px;" class="nav-item">
                        <a class="nav-link" href="#"><i class="far fa-bell"></i><sup>5</sup></a>
                    </li>
                    <li class="nav-item dropdown d-none d-md-block">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="avatar" src="<?= RUTA_URL ?>/public/images/userm.png" alt="">
                        </a>


                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <div class="row   px-4">
                                <div class="col-3">
                                    <img class="avatar" src="<?= RUTA_URL ?>/public/images/userm.png" alt="">
                                </div>
                                <div class="col-9">
                                    <a class="dropdown-item " href="#">Usuario 1</a>
                                    <small>covid@gmail.com</small>
                                </div>
                            </div>

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?=RUTA_URL?>/UserController/login">Iniciar sesión</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?=RUTA_URL?>/UserController/create">Registrar</a>
                            
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <!-- acaba HEADER -->