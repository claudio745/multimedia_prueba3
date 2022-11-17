<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container" style="background-color: #D3D3D3">
    <div class="container">
        <div class="row">
            _
        </div>
        <div class="row" style="height: 100px; background-color: #FFFFFF">
            <div class="col"><img src="img/imagen_2022-11-10_124712509-removebg-preview.png" width="250px" height="140px"></div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-2 mb-2" style="height: 100px; background-color: #BA181B">
            <div class="col-2 mt-4"></div>
            <div class="col-2 mt-4">
                <a href = ""><button type="button" class="btn btn-secondary">Inicio</button></a>
            </div>
            <div class="col-2 mt-4">
                <a href = ""><button type="button" class="btn btn-secondary">Iniciar sesión</button></a>
            </div>
            <div class="col-2 mt-4">
                <a href = ""><button type="button" class="btn btn-secondary">Servicios</button></a>
            </div>
            <div class="col-2 mt-4">
                <a href = ""><button type="button" class="btn btn-secondary">Estadisticas</button></a>
            </div>
            <div class="col-2 mt-4"></div>
        </div>
    </div>
    <div class="container">
        <div class="row" style="height: 350px; background-color: #F5F3F4">
            <div class="col mt-4 d-flex justify-content-center">
                <div class="Inicio">
                    <div class="row border rounded" style="height: 300px; background-color: #BA181B">
                        <div class="col-12 mt-2 d-flex justify-content-center"><FONT COLOR="#FFFFFF">Inicio sesión </FONT></div>
                        <div class="col mt-2 d-flex justify-content-center">
                            <form>
                                <label"><FONT COLOR="#FFFFFF"> Rut: </FONT></label>
                                <input type="text" class="form-control" name="Rut" id="Rut" placeholder="11111111-1"/>
                                <br><br>
                                <label for="Contraseña"><FONT COLOR="#FFFFFF"> Contraseña: </FONT></label>
                                <input type="text" class="form-control" name="Contraseña" id="Contraseña">
                                <a href = "login.php"><FONT COLOR="#FFFFFF"> Olvido su contraseña?</FONT></a>
                                <br>
                                <button type="button" class="btn btn-secondary">Iniciar sesión</button>
                                <button type="button" class="btn btn-secondary">Registrarse</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-2 mb-2" style="background-color: #BA181B">
            <div class="col mt-2 d-flex justify-content-center"></div>
        </div>
    </div>
</div>
</body>
</html>