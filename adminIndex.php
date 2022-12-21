<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--Consultas-->
    <?php 
        require_once('conexionCodigo.php');
        
        //Cantidad de noticias
        $consultaNoticias = "SELECT count(id) AS cantidad FROM noticia";
        $consultaNoticias = $conexion->query($consultaNoticias);
        $fila = mysqli_fetch_assoc($consultaNoticias);

    ?>

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
                        <a class="nav-link" href="adminEstadistica.php"><FONT COLOR="#FFFFFF">Estadisticas</FONT></a>
                        <a class="nav-link" href="adminRegister.php"><FONT COLOR="#FFFFFF">Registrar personal</FONT></a>
                        <a class="nav-link" href="adminEliminarPersonal.php"><FONT COLOR="#FFFFFF">Eliminar personal</FONT></a>
                        <a class="nav-link" href="cerrarSession.php"><FONT COLOR="#FFFFFF">Cerrar sesión</FONT></a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!--Herramientas noticia-->
    <div class="row" style="height: 300px; background-color: #FFFFFF">
        <div class="col-2 mt-2"> 
                <a href = "agregarNoticia.php">
                    <button type="button" class="btn btn-secondary">Agregar noticia</button>
                </a>
                <a href = "modificarNoticia.php">
                    <button type="button" class="btn btn-secondary">Modificar noticia</button>
                </a>
        </div>

        <div class="col-2 mt-2">
            <form action="eliminarNoticiaCodigo.php" method="POST">
                <label"><FONT COLOR="#BA181">Escriba id para eliminar noticia: </FONT></label>
                <input type="number" class="form-control" name="Eliminar" id="Eliminar"/>
                <br>
                <button type="submit" class="btn btn-secondary">Eliminar noticia</button>
            </form>
        </div>
        <div class="col-6 mt-2"><H3>Cantidad de noticias almacenadas: <?php echo $fila['cantidad'] ?></H3></div>
    </div>
    <!--Fila Noticias-->
    <div class="row" style="background-color: #FFFFFF">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="col">
                    <?php
                        //Conexion con bd
                        require_once('conexionCodigo.php');
                    
                        ?>   
                        <table class="table table-bordered">
                            <?php
                            //Seleciono todo de la tabla noticia
                            $sql="SELECT * FROM noticia";
                            $result=mysqli_query($conexion, $sql);

                            //ordeno imprimir
                            while($mostrar=mysqli_fetch_array($result)){
                            ?>

                            <div class="row">
                                <div class="col-2 mt-2">
                                    <img width="250px" height="250px" src="data:foto/jpg;base64,<?php echo base64_encode($mostrar['img']);?>"/>
                                </div>
                                <div class="col-10 mt-4">
                                    <h1><?php echo $mostrar['id']?></h1>
                                    <h2><?php echo $mostrar['titulo']?></h2>
                                    <h5><?php echo $mostrar['cuerpo']?></h5>
                                    <h6><?php echo $mostrar['categoria']?></h6>
                                    <h6><?php echo $mostrar['autor']?></h6>
                                </div>
                                <hr>
                            </div>
                            <?php
                            }
                            ?>
                        </table>
                    </div>
                </div>
                <div class="col-11"></div>
            </div>
        </div>
    </div>
    <!--Fila del Footer-->
    <div class="row mt-2" style="background-color: #BA181B">
        <div class="col mb-2"><img src="img/Logo White.png" width="250px" height="140px"></div>
        <div class="col-1"><img src="img/18764668.png" width="50px" height="50px" class="rounded-circle"></div>
        <div class="col-1"><img src="img/18764668.png" width="50px" height="50px" class="rounded-circle"></div>
        <div class="col-1"><img src="img/18764668.png" width="50px" height="50px" class="rounded-circle"></div>
        <div class="col-1"><img src="img/18764668.png" width="50px" height="50px" class="rounded-circle"></div>
    </div>
</div>
</body>
</html>