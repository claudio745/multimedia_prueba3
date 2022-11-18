<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container" style="background-color: #D3D3D3">
    <div class="container">
        <div class="row">
            <div class="col-12" style="height: 10px; background-color: #D3D3D3"></div>
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
        <div class="row" style="height: 1000px; background-color: #F5F3F4">
            <div class="col mt-4 d-flex justify-content-center">
                <div class="Inicio">
                    <div class="row border rounded" style="height: 950px; background-color: #BA181B">
                        <div class="col-12 mt-2 d-flex justify-content-center"><FONT COLOR="#FFFFFF">Registrarse </FONT></div>
                        <div class="col mt-2 mb-2 d-flex justify-content-center">
                            <form>
                                <label"><FONT COLOR="#FFFFFF"> Nombres: </FONT></label>
                                <input type="text" class="form-control" name="Rut" id="Rut"/>
                                <br><br>
                                <label"><FONT COLOR="#FFFFFF"> Apellido Paterno: </FONT></label>
                                <input type="text" class="form-control" name="Rut" id="Rut"/>
                                <br><br>
                                <label"><FONT COLOR="#FFFFFF"> Apellido Materno: </FONT></label>
                                <input type="text" class="form-control" name="Rut" id="Rut"/>
                                <br><br>
                                <label"><FONT COLOR="#FFFFFF"> Genero: </FONT></label>
                                <select name="genero" class="form-control" id="genero">
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino</option>
                                    <option value="Otro">Otro</option>
                                </select>
                                <br><br>
                                <label"><FONT COLOR="#FFFFFF"> Fecha de nacimiento: </FONT></label>
                                <input type="date" class="form-control" name="fecha" id="fecha" value="2022-11-04" min="1900-01-01" max="2004-01-01"> 
                                <br><br>
                                <label"><FONT COLOR="#FFFFFF"> Ciudad de residencia: </FONT></label>
                                <input type="text" class="form-control" name="Rut" id="Rut"/>
                                <br><br>
                                <label"><FONT COLOR="#FFFFFF"> Rut: </FONT></label>
                                <input type="text" class="form-control" name="Rut" id="Rut" placeholder="11111111-1"/>
                                <br><br>
                                <label for="Contraseña"><FONT COLOR="#FFFFFF"> Contraseña: </FONT></label>
                                <input type="text" class="form-control" name="Contraseña" id="Contraseña">
                                <br>
                                <button type="button" class="btn btn-secondary">Registrarse</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-2" style="background-color: #BA181B">
            <div class="col-12 mt-2 d-flex justify-content-center"></div>
            <div class="col-1"></div>
            <div class="col-1"></div>
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