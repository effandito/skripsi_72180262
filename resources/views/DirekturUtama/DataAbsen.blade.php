<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Human Resource Information System</title>
        
        <style>
            .container{
            display: flex;
            justify-content: center;
            align-items: center;
            }
                table {
            counter-reset: row-num;
            }
                .nomer tr {
            counter-increment: row-num;
            }
            .nomer tr td:first-child::before {
            content: counter(row-num) ". ";
            }
        </style>

        <!-- Favicon-->
        <!-- <link href="assets/img/favicon.png" rel="icon"> -->
        <!-- <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet"> -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            
            <div class="border-end bg-blue" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-white">CV ANDI OFFSET</div>
                <div class="list-group list-group-flush" color="bg-blue">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/DUKARYAWAN">Data Karyawan</i></x>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/DUKONSUMEN">Data Konsumen</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/DU/Target">Data Target Penjualan</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/DUSolstra">Data Solusi Strategi</a>
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
                    
        <div class="section-title">
                    <h1>TABEL DATA Absen</h1>
                    <div class="container">
                        <div class="col-sm col-md-6">
                        <div id="dataTable_length" class="dataTables length">
                        <label>
                        Show
                        <form action="/DUAbsen" method="GET" enctype='multipart/form-data' >
                        <select class="custom-select custom-select-sm form control form-control-sm"
                        name="show" aria-controls="dataTable">
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                        </select>
                        entries
                        </label>
                        
                        <select class="custom-select custom-select-sm form control form-control-sm"
                        name="order" aria-controls="dataTable">
                        <option value="asc">Terbaru</option>
                        <option value="desc">Terlama</option>
                        </select>
                        entries
                      
                        </label>
                        <button type="submit" class="btn btn-primary">Cari</button>
                        <div class="card mb-4">
                        <div class="card-body">
                        <!-- <a class="btn btn-info" href=/adminlayout>All</a>
                        <a class="btn btn-info" href=/adminlayout/1>Masuk</a>
                        <a class="btn btn-info" href=/adminlayout/2>Izin</a>
                        <a class="btn btn-info" href=/adminlayout/3>Izin Masuk</a>
                        <a class="btn btn-info" href=/adminlayout/4>Izin Pulang</a> 
                        <a class="btn btn-info" href=/adminlayout/4>Izin Pulang</a>  -->
                        </form>
                        <!-- <div class="card-body py-6"> -->
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>No</th>
                                            <th>Id Absen</th>
                                            <th>Id Karyawan</th>
                                            <th>Keterangan</th>
                                            <th>Waktu</th>
                                          </tr>
                                    </thead>
                                   
                                    @foreach($absen as $abs)
                                    <tbody>
                                        <tr>
                                        <td><div class="nomer"></div></td>
                                        <td> {{ $abs->id_absen}}</td>
                                            <td>{{ $abs->id_kary}}</td>
                                            <td>{{ $abs->keterangan}}</td>
                                            <td> {{ $abs->waktu}}</td>
                                            </tbody>
                                        </tr>
                                        @endforeach      
                                        </table> 
                                        <div class="pagination justify-content-end">
                                        {{$absen->withQueryString()->links()}}
                                        </div>
                            </div>
                        </div>
                    </div>
                    </div>   
                    </div>
                <!-- /.container-fluid -->
            </div>
            </div>
        </div>
        
        <!-- Bootstrap core JS-->
        <script src="../js/scripts.js"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script> -->

        <!-- Core theme JS -->
        <!-- <script src="js/scripts.js"></script>
        <script src="js/demo/datatables-demo.js"></script>

        <script src="vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
     -->
    </body>
</html>
