<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jam Digital</title>
    <link href="../css/styles.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <style>
    body,html{
        margin-left: auto;
        margin-right: auto;
    }
        .button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 25px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .button2 {background-color: #008CBA;} /* Blue */
        .button3 {background-color: #f44336;} /* Red */ 
        .button4 {background-color: #e7e7e7; color: black;} /* Gray */ 
        .button5 {background-color: #555555;} /* Black */
        .button6 {background-color: #555555;} /* Black */

        .grid-container {
            display: grid;
            grid-template-columns: auto auto auto auto;
            gap: 10px;
            
            padding: 10px;
        }

        .grid-item {
            background-color: rgba(255, 255, 255, 0.8);
       
            text-align: center;
            font-size: 20px;
        }
        .txt{
            font-size:80px;
        }
        .space {
            width: 4px;
            height: auto;
            display: inline-block;
        }

</style>
</head>
<body onload="startTime()">
<div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            
            <div class="border-end bg-blue" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-white">CV ANDI OFFSET</div>
                <div class="list-group list-group-flush" color="bg-blue">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/DUKARYAWAN">Data Karyawan</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/DUKONSUMEN">Data Konsumen</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/DUTarget">Data Target Penjualan</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/DUSolstra">Data Solusi Strategi</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="GrafikPenilaianDU.html">Grafik Penilaian Karyawan</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle">=</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item active"><a class="nav-link" href="#!">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="#!">Link</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#!">Action</a>
                                        <a class="dropdown-item" href="#!">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#!">Profile</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
          

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Presensi</h1>
                    <div class="container">
                        <div class="col-sm col-md-6">
                        <div id="dataTable_length" class="dataTables length">
                       
                        <p>
                        </div>
                        <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
                        <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate" >
                           
                        </div>
                        <div id="txt"></div>
                        <inp>
                        <!-- <div class="grid-container"> -->
                        <div class="btn-group">
                        <div class="grid-item">
                        <a href="/sales/inputabsen/1"><button class="btn btn-success" value="Masuk">Masuk</button>
                        </div>
                        <div class="space"></div>
                        <div class="grid-item">
                        <a href="/sales/pulang"><button class="btn btn-danger" value="Pulang">Pulang</button>
                        </div>
                        <div class="space"></div>
                        <div class="grid-item">
                        <a href="/sales/izinmsk"><button class="btn btn-success" value="ijinmasuk">Ijin Masuk</button>
                         </div>
                        <div class="space"></div>
                        <div class="grid-item">
                        <a href="/sales/izink"><button class="btn btn-danger" value="ijinkeluar">Ijin Keluar</button>
                        </div>
                        <div class="space"></div>
                        <div class="grid-item">
                        <a href="/sales/lemmsk"><button class="btn btn-success" value="lemburmasuk">Lembur Masuk</button>
                        </div>
                        <div class="space"></div>
                        <a href="/sales/lemk"><button class="btn btn-danger" style="float: right;" value="lemburpulang">Lembur Pulang</button>
                        </div>
                       
                        </div> 
                <script>
                
                    function startTime() {
                    const today = new Date();
                    let h = today.getHours();
                    let m = today.getMinutes();
                    let s = today.getSeconds();
                    m = checkTime(m);
                    s = checkTime(s);
                    document.getElementById('txt').innerHTML =  h + ":" + m + ":" + s;
                    setTimeout(startTime, 1000);
                    }

                    function checkTime(i) {
                    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
                    return i;
                    }
                </script> 
                  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>

<!-- Core theme JS-->
<script src="../js/scripts.js"></script>
<script src="js/demo/datatables-demo.js"></script>

<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
</body>
</html>