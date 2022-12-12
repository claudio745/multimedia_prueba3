<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<div class="container-fluid" style="background-color: #D3D3D3">
    <!--Fila del Header-->
    <div class="row mt-2" style="background-color: #FFFFFF">
        <div class="col-6 mb-2"><img src="img/FrikiLuko.png" width="250px" height="140px"></div>
        <div class="col-6 mb-2"><h1>Hospital</h1></div>
    </div>
    <!--Fila del Main-->
    <div class="row" style="background-color: #BA181B">
        <nav class="navbar navbar-expand-lg" style="background-color: #BA181B">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="img/LogorecortedWhite.png" alt="" width="50" height="35">
                </a>
                <a class="navbar-brand" href="#"><FONT COLOR="#FFFFFF">INICIO</FONT></a>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="login.php"><FONT COLOR="#FFFFFF">Iniciar sesión</FONT></a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!--Fila del Carrusel-->
    <div class="row">
        <div class="col-8 mb-2 mt-2" style="height: 300px">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="img/meme.jpg" class="d-block w-100" height="300px">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="img/meme.jpg" class="d-block w-100" height="300px">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="img/meme.jpg" class="d-block w-100" height="300px">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <!--Fila Noticias-->
    <div class="row" style="background-color: #FFFFFF">
        <div class="container">
            <div class="row">
                <div class="col-12" style="height:300px">
                    <div class="col">
                    <?php
                        //Conexion con bd
                        require_once('conexionCodigo.php');
                    
                        ?>   
                        <table class="table table-bordered">
                            <?php
                            $nro = 1;
                            //Seleciono todo de la tabla noticia
                            $sql="SELECT * FROM noticia WHERE id = $nro";
                            $result=mysqli_query($conexion, $sql);

                            //ordeno imprimir
                            while($mostrar=mysqli_fetch_array($result)){
                            ?>

                            <div class="row">
                                <div class="col-2 mt-2">
                                    <img width="250px" height="250px" src="data:foto/jpg;base64,<?php echo base64_encode($mostrar['img']);?>"/>
                                </div>
                                <div class="col-10 mt-4">
                                    <h2><?php echo $mostrar['titulo']?></h2>
                                    <h5><?php echo $mostrar['cuerpo']?></h5>
                                    <h6><?php echo $mostrar['categoria']?></h6>
                                    <h6><?php echo $mostrar['autor']?></h6>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                        </table>
                    </div>
                </div>
                <div class="col-11"></div>
                <div class="col-1 mb-2">
                    <div class="btn-group me-2" role="group" aria-label="Second group">
                        <button onclick="funcionRestar()" type="button" class="btn btn-secondary"><-</button>
                        <button onclick="funcionSumar()" type="button" class="btn btn-secondary">-></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Fila del Footer-->
    <div class="row mt-2" style="background-color: #BA181B">
        <div class="col mb-2"><img src="img/Logo White.png" width="250px" height="140px"></div>
        <div class="col-1"><img src="img/contacto1.png" width="80px" height="50px" class="rounded-circle"></div>
        <div class="col-1"><img src="img/contacto2.png" width="120px" height="50px" class="rounded-circle"></div>
        <div class="col-1"><img src="img/18764668.png" width="50px" height="50px" class="rounded-circle"></div>
        <div class="col-1"><img src="img/18764668.png" width="50px" height="50px" class="rounded-circle"></div>
    </div>
</div>
</body>
</html>