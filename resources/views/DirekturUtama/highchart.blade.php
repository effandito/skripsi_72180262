<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Highcharts Example - Tutsmake.com</title>
</head>
    
<body>
<h1>Laravel 8 Highcharts Example - Tutsmake.com</h1>
<div id="container"></div>
</body>
   
<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
    var Konsumen =  <?php echo json_encode($konsumen) ?>;
    
    Highcharts.chart('container', {
        title: {
            text: 'Grafik Konsumen, 2020'
        },
        subtitle: {
            
        },
         xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
            title: {
                text: 'Number of New Users'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'New Users',
            data: prshn,
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
});
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
</script>
</html>
