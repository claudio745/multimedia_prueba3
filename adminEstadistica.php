<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <!--Consultas-->
    <?php 
        require_once('conexionCodigo.php');
        
        //Cantidad usuarios
        $consultaUsuarios = "SELECT count(rut) AS cantidad FROM usuario";
        $consultaUsuarios = $conexion->query($consultaUsuarios);
        $fila = mysqli_fetch_assoc($consultaUsuarios);
        //Grafico de torta
        $consultaPersonal = "SELECT cargo, count(rut) AS cantidad FROM personal GROUP BY cargo";
        $consultaPersonal= mysqli_query($conexion, $consultaPersonal);

        //Grafico de barras
        $jovenUsuarios = "SELECT count(rut) AS cantidad FROM usuario WHERE fechaNacim > '01/01/2005'";
        $jovenUsuarios = $conexion->query($jovenUsuarios);
        $fila1 = mysqli_fetch_assoc($jovenUsuarios);
        $adultoUsuarios = "SELECT count(rut) AS cantidad FROM usuario WHERE fechaNacim < '01/01/2005' AND fechaNacim > '01/01/1961'";
        $adultoUsuarios = $conexion->query($adultoUsuarios);
        $fila2 = mysqli_fetch_assoc($adultoUsuarios);
        $adultoMayorUsuarios = "SELECT count(rut) AS cantidad FROM usuario WHERE fechaNacim < '01/01/1961'";
        $adultoMayorUsuarios = $conexion->query($adultoMayorUsuarios);
        $fila3 = mysqli_fetch_assoc($adultoMayorUsuarios);
    ?>
    
    <!--Grafico de Torta-->
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['cargo', 'cantidad'],
            <?php
                while ($row = mysqli_fetch_array($consultaPersonal)) {
                    echo "['" . $row["cargo"] . "', " . $row["cantidad"] . "],";
                }
            ?>
        ]);

        var options = {
          title: 'Cantidades de roles otorgados'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
        }
    </script>

    <!--Grafico de Tabla-->
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Vida', 'Cantidad', { role: 'style' }],
            ['Joven', <?php echo $fila1['cantidad'] ?>, 'red'],            
            ['Adulto', <?php echo $fila2['cantidad'] ?>, 'blue'],            
            ['Adulto mayor', <?php echo $fila3['cantidad'] ?>, 'green'],
        ]);

        var options = {'title':'Edad usuarios',
            'width':600,
            'height':300};
        var chart = new google.visualization.ColumnChart(document.getElementById("chart_div"));
        chart.draw(data, options);
        }
    </script>
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
                <a class="navbar-brand" href="adminIndex.php"><FONT COLOR="#FFFFFF">INICIO</FONT></a>
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
    <!--Fila de los Graficos-->
    <div class="row" style="height: 400px; background-color: #FFFFFF">
        <div class="col-12">Cantidad de Usuarios registrados: <?php echo $fila['cantidad'] ?></div>
        <div class="col-8 d-flex justify-content-center" style="height: 300px; background-color: #FFFFFF">
            <div id="chart_div"></div>
        </div>
        <div class="col-4" style="height: 300px">
            <div id="piechart" style="width: 400px; height: 300px;"></div>
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