<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="/backend/js/chart.js"></script>
    <title>Grafik Target Penjualan</title>
</head>
<body>
<div class="row">
    <div class="col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title" align="center">Statistik User</h4>
                 <canvas id="mataChart" class="chartjs" width="undefined" height="undefined"></canvas>
            </div>
          </div>
        </div>                
    </div>
</div>
</body>
<script type="text/javascript">
    var ctx = document.getElementById("mataChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($label); ?>,
        datasets: [{
        label: 'Statistik User',
        backgroundColor: '#ADD8E6',
        borderColor: '#93C3D2',
        data: <?php echo json_encode($jumlah_user); ?>
        }],
        options: {
    animation: {
        onProgress: function(animation) {
            progress.value = animation.animationObject.currentStep / animation.animationObject.numSteps;
        }
      }
    }
   },
 });
</script>
</html>