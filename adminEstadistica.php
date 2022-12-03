<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estadisticas</title>

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Nacionalidad', 'Usuarios'],
          ['Chileno',     11],
          ['Canadiense',      2],
          ['Uruguaya',  2],
        ]);

        var options = {
          title: 'Estadistica Usuarios'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

    <script type="text/javascript">

    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ['Vida', 'Edad', { role: 'style' }],
        ['Joven', 16, 'red'],            
        ['Adulto', 45, 'blue'],            
        ['Adulto mayor', 80, 'green'],
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
            <div class="col-8 d-flex justify-content-center" style="height: 300px; background-color: #FFFFFF">
                <div id="chart_div"></div>
            </div>
            <div class="col-4" style="height: 300px">
                <div id="piechart" style="width: 400px; height: 300px;"></div>
            </div>
            <div class="col-8" style="height: 10px; background-color: #D3D3D3"></div>
            <div class="col-8" style="height: 300px; background-color: #FFFFFF"></div>
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