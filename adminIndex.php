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

<div class="container" style="background-color: #D3D3D3">
    <div class="container">
        <div class="row">
            <div class="col-12" style="height: 10px; background-color: #D3D3D3"></div>
        </div>
        <div class="row" style="height: 160px; background-color: #FFFFFF">
            <div class="col-4 mb-2 mt-2"><img src="img/FrikiLuko.png" width="250px" height="140px"></div>
            <div class="col-4 mt-2 d-flex justify-content-center"><H1>Hospital</H1></div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-2 mb-2" style="height: 100px; background-color: #BA181B">
            <div class="col-2 mt-4"></div>
            <div class="col-2 mt-4">
                <a href = "adminIndex.php"><button type="button" class="btn btn-secondary">Inicio</button></a>
            </div>
            <div class="col-2 mt-4">
                <a href = "adminEstadistica.php"><button type="button" class="btn btn-secondary">Estadisticas</button></a>
            </div>
            <div class="col-2 mt-4">
                <a href = "index.php"><button type="button" class="btn btn-secondary">Cerrar Sesión</button></a>
            </div>
            <div class="col-2 mt-4"></div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-2">
            <div class="col-8" style="height: 300px; background-color: #FFFFFF">
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
            <div class="col-4" style="height: 300px">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3345.343839676881!2d-71.64372688484877!3d-33.021070682989496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9689e791a85771c9%3A0x7a2bafc4dd3ed810!2sFacultad%20de%20Ingenier%C3%ADa%20-Universidad%20de%20Playa%20Ancha!5e0!3m2!1ses!2scl!4v1668826154531!5m2!1ses!2scl" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-8" style="height: 10px; background-color: #D3D3D3"></div>
            <div class="col-8" style="height: 300px; background-color: #FFFFFF">
            <a><button type="button" class="btn btn-secondary">Modificar</button></a>
            <a><button type="button" class="btn btn-secondary">Eliminar</button></a>
        
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-2" style="background-color: #BA181B">    
            <div class="col-12 mt-2 d-flex justify-content-center"></div>
            <div class="col mb-2"><img src="img/Logo White.png" width="250px" height="140px"></div>
            <div class="col-1"></div>
            <div class="col-1"></div>
            <div class="col-1"></div>
            <div class="col-1"></div>
            <div class="col-1"></div>
            <div class="col-1"><img src="img/18764668.png" width="50px" height="50px" class="rounded-circle"></div>
            <div class="col-1"><img src="img/18764668.png" width="50px" height="50px" class="rounded-circle"></div>
            <div class="col-1"><img src="img/18764668.png" width="50px" height="50px" class="rounded-circle"></div>
            <div class="col-1"><img src="img/18764668.png" width="50px" height="50px" class="rounded-circle"></div>
            <div class="col-1"></div>
        </div>
        <div class="row">
            <div class="col-12" style="height: 10px; background-color: #D3D3D3"></div>
        </div>
    </div>
</div>
</body>
</html>