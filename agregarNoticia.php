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
                        <a class="nav-link" href="adminEstadistica.php"><FONT COLOR="#FFFFFF">Estadisticas</FONT></a>
                        <a class="nav-link" href="adminRegister.php"><FONT COLOR="#FFFFFF">Registrar personal</FONT></a>
                        <a class="nav-link" href="index.php"><FONT COLOR="#FFFFFF">Cerrar sesión</FONT></a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!--Fila Register-->
    <div class="row" style="height: 600px; background-color: #FFFFFF">
        <div class="col mt-4 d-flex justify-content-center">
            <div class="Inicio">
                <div class="row border rounded" style="height: 550px; background-color: #BA181B">
                    <div class="col-12 mt-2 d-flex justify-content-center"><FONT COLOR="#FFFFFF">Agregar noticia</FONT></div>
                    <div class="col mt-2 mb-2 d-flex justify-content-center">
                        <form action="agregarNoticiaCodigo.php" method="POST">
                            <label"><FONT COLOR="#FFFFFF"> Titulo: </FONT></label>
                            <input type="text" class="form-control" name="Titulo" id="Titulo"/>
                            <br><br>
                            <label"><FONT COLOR="#FFFFFF"> Cuerpo: </FONT></label>
                            <input type="text" class="form-control" name="Cuerpo" id="Cuerpo"/>
                            <br><br>
                            <label"><FONT COLOR="#FFFFFF"> Categoria: </FONT></label>
                            <select name="Categoria" class="form-control" id="Categoria">
                                <option value="Medicina">Medicina</option>
                                <option value="Salud">Salud</option>
                                <option value="Ambiental">Ambiental</option>
                            </select>                                <br><br>
                            <label><FONT COLOR="#FFFFFF"> Foto: </FONT></label>
                            <FONT COLOR="#FFFFFF"><input type = "file" REQUIRED name = "Img"></FONT>
                            <br><br>
                            <label"><FONT COLOR="#FFFFFF"> Autor: </FONT></label>
                            <input type="text" class="form-control" name="Autor" id="Autor"/>
                            <button type="submit" class="btn btn-secondary">Agregar</button>
                            <a href = "adminIndex.php"><button type="button" class="btn btn-secondary">Volver</button></a>
                        </form>
                    </div>
                </div>
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