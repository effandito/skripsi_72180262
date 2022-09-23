<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Human Resource Information System</title>
  
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            
            <div class="border-end bg-blue" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-white">CV ANDI OFFSET</div>
                <div class="list-group list-group-flush" color="bg-blue">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/DUKARYAWAN">Data Karyawan</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/DUAbsen">Data Absen</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/DUKONSUMEN">Data Konsumen</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/DU/Target">Data Target Penjualan</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/DU/grafikbaru">Grafik Target Penjualan</a>
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
                    <h1>TABEL DATA Solusi Strategi</h1>
                    <div class="container">
                        <div class="col-sm col-md-6">
                        <div id="dataTable_length" class="dataTables length">
                        <label>
                        Show
                        <form action="/DUSolstra" method="GET" enctype='multipart/form-data' >
                        <select class="custom-select custom-select-sm form control form-control-sm"
                        name="show" aria-controls="dataTable">
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                        </select>
                        entries
                        </label>
                        <button type="submit" class="btn btn-primary">Show</button>
                        </div>
                        <P></P>
                        
                    <!-- DataTales Example -->
                        <div class="card-body">
                            <div class="table">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama Sales</th>
                                            <th>Nama Supervisor</th>
                                            <th>Masalah yang dihadapi</th>
                                            <th>Waktu Masalah</th>
                                            <th>Tanggal Masalah</th>
                                            <th>Solusi</th>
                                            <th>Waktu Solusi</th>
                                            <th>Tanggal Solusi</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                  
                                    @foreach( $solstra as $sol)
                                    <tbody>
                                        <tr>
                                            <td>{{$sol->nama_sales}}</td>
                                            <td>{{$sol->nama_spv}}</td>
                                            <td>{{$sol->masalah}}</td>
                                            <td>{{$sol->waktu_msl}}</td>
                                            <td>{{$sol->tanggal_msl}}</td>
                                            <td>{{$sol->solusi}}</td>
                                            <td>{{$sol->waktu_sol}}</td>
                                            <td>{{$sol->tanggal_sol}}</td>
                                            <td>{{$sol->status}}</td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                                {{$solstra->withQueryString()->links()}}
                            </div>
                        </div>
                    </div>
                   
                <!-- /.container-fluid -->
            </div>
            
        </div>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="js/demo/datatables-demo.js"></script>

        <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
    
    </body>
</html>
