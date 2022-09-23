<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grafik Baru</title>
    <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<style>
        .highcharts-figure,
        .highcharts-data-table table {
        min-width: 310px;
        max-width: 800px;
        margin: 1em auto;
        }

        #container {
        height: 400px;
        }

        .highcharts-data-table table {
        font-family: Verdana, sans-serif;
        border-collapse: collapse;
        border: 1px solid #ebebeb;
        margin: 10px auto;
        text-align: center;
        width: 100%;
        max-width: 500px;
        }

        .highcharts-data-table caption {
        padding: 1em 0;
        font-size: 1.2em;
        color: #555;
        }

        .highcharts-data-table th {
        font-weight: 600;
        padding: 0.5em;
        }

        .highcharts-data-table td,
        .highcharts-data-table th,
        .highcharts-data-table caption {
        padding: 0.5em;
        }

        .highcharts-data-table thead tr,
        .highcharts-data-table tr:nth-child(even) {
        background: #f8f8f8;
        }

        .highcharts-data-table tr:hover {
        background: #f1f7ff;
        }
        .highcharts-description{
text-align: center;
        }
</style>
</head>
<body>
<figure class="highcharts-figure">
<form action="/DU/grafiktesting" method="get">

<select class="form-control form-control-sm" style="text-align: center; margin-left:50%; margin-right:50%;" placeholder="t" name="tahun" >
                                    @foreach($tahun as $pilihan)
                                    <option value="{{$pilihan}}">{{$pilihan}}</option>
                                    @endforeach
                                  </select><p></p>
                               <button style="text-align: center; margin-left:50%; margin-right:50%;" type="submit">Show</button>
                                  </form>
    <div id="container"></div>
    
    <p class="highcharts-description">
        Grafik Diatas merupakan grafik perbandingan target jual dan target kunjung.
    </p>
</figure>
</body>
<script>
Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Grafik Target'
    },
    subtitle: {
        text: 'Per Tahun'
    },
    xAxis: {
        categories: [
          {{$tahun_terpilih}}
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Nominal'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f}juta</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Target Jual',
        data: [
            <?php
                foreach($sum_thn as $row){
                    echo $row->total_target.',';
                }
                ?>
        ]

    }, {
        name: 'Target Kunjung',
        data: [
            <?php
                foreach($sum_kunjung as $row){
                    echo $row->total_kunjung.',';
                }
                ?>
        ]
    }]
});
</script>
</html>