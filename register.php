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
                <a class="navbar-brand" href="index.php"><FONT COLOR="#FFFFFF">INICIO</FONT></a>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="login.php"><FONT COLOR="#FFFFFF">Iniciar sesión</FONT></a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!--Fila Register-->
    <div class="row" style="height: 1150px; background-color: #FFFFFF">
        <div class="col mt-4 d-flex justify-content-center">
            <div class="Inicio">
                <div class="row border rounded" style="height: 1100px; background-color: #BA181B">
                    <div class="col-12 mt-2 d-flex justify-content-center"><FONT COLOR="#FFFFFF">Registrarse </FONT></div>
                    <div class="col mt-2 mb-2 d-flex justify-content-center">
                        <form action="registrarCodigo.php" method="POST">
                            <label"><FONT COLOR="#FFFFFF"> Nombres: </FONT></label>
                            <input type="text" class="form-control" name="Nombres" id="Nombres" required/>
                            <br><br>
                            <label"><FONT COLOR="#FFFFFF"> Apellido Paterno: </FONT></label>
                            <input type="text" class="form-control" name="Apellido1" id="Apellido1" required/>
                            <br><br>
                            <label"><FONT COLOR="#FFFFFF"> Apellido Materno: </FONT></label>
                            <input type="text" class="form-control" name="Apellido2" id="Apellido2" required/>
                            <br><br>
                            <label"><FONT COLOR="#FFFFFF"> Genero: </FONT></label>
                            <select name="Genero" class="form-control" id="Genero">
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                                <option value="Otro">Otro</option>
                            </select>                                <br><br>
                            <label"><FONT COLOR="#FFFFFF"> Fecha de nacimiento: </FONT></label>
                            <input type="date" class="form-control" name="Fecha" id="Fecha" min="1900-01-01" max="2016-01-01" required> 
                            <br><br>
                            <label"><FONT COLOR="#FFFFFF"> Ciudad de residencia: </FONT></label>
                            <input type="text" class="form-control" name="Ciudad" id="Ciudad" required/>
                            <br><br>
                            <label"><FONT COLOR="#FFFFFF"> Correo </FONT></label>
                            <input type="email" class="form-control" name="Correo" id="Correo" required/>
                            <br><br>
                            <label"><FONT COLOR="#FFFFFF"> Rut: </FONT></label>
                            <input type="text" class="form-control" maxlength="11" name="Rut" id="Rut" placeholder="12345678-k" pattern="[0-9]+[-][0-9-k]" required/>
                            <br><br>
                            <label for="Contraseña"><FONT COLOR="#FFFFFF"> Contraseña: </FONT></label>
                            <input type="password" class="form-control" name="Contraseña" id="Contraseña" required>
                            <br>
                            <button type="submit" class="btn btn-secondary">Registrarse</button>
                            <a href = "login.php"><button type="button" class="btn btn-secondary">Volver</button></a>
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