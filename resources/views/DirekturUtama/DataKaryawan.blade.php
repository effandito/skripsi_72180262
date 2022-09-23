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
        </style>

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
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Data Karyawan</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/DUAbsen">Data Absen</a>
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
                        <h1>Tabel Data Karyawan</h1>
                        </nav>
                    <div class="card-body py-1">
                        <div class="col-sm col-md-6">
                        <div id="dataTable_length" class="dataTables length">
                        <label>
                        Show
                        <form action="/DUKaryawan" method="GET" enctype='multipart/form-data' >
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
                        <br>
                        <br> 
                    <!-- DataTables Example -->
                        <div class="card-body py-6">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Nomor KTP</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Agama</th>
                                            <th>Nomor Handphone</th>
                                            <th>Pendidikan</th>
                                            <th>Golongan Darah</th>
                                            <th>Nomor BPJS</th>
                                            <th>Jumlah Anak</th>
                                            <th>Jabatan</th>
                                            <th>Nama Atasan</th>
                                            <th>Status Karyawan</th>
                                            <th>Tanggal Awal Masuk</th>
                                        </tr>
                                    </thead>
                                    
                                    @foreach($karyawan as $kary)
                                    <tbody> 
                                        <tr>
                                        <td>{{ $kary->nama_kar }}</td>
                                            <td>{{ $kary->no_ktp}}</td>
                                            <td>{{ $kary->jenis_klmn}}</td>
                                            <td>{{ $kary->alamat}}</td>
                                            <td>{{ $kary->tempat_lhr}}</td>
                                            <td>{{ $kary->tgl_lahir}}</td>
                                            <td>{{ $kary->agama}}</td>
                                            <td>{{ $kary->no_hp}}</td>
                                            <td>{{ $kary->pendidikan}}</td>
                                            <td>{{ $kary->goldar}}</td>
                                            <td>{{ $kary->no_bpjs}}</td>
                                            <td>{{ $kary->jml_ank}}</td>
                                            <td>{{ $kary->jabatan}}</td>
                                            <td>{{ $kary->nm_ats}}</td>
                                            <td>{{ $kary->status}}</td>
                                            <td>{{ $kary->tgmsk_awal}}</td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                                <br/>              
                            </div>
                            {{$karyawan->withQueryString()->links()}}
                        </div>
                    </div>
                   
            
        </div>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="js/demo/datatables-demo.js"></script>

        <script src="vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
    
    </body>
</html>
