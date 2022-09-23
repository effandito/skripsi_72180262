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
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Data Karyawan</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/DUAbsen">Data Absen</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="DUKONSUMEN">Data Konsumen</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/DUTarget">Data Target Penjualan</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/DUSolstra.html">Data Solusi Strategi</a>
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
                        <h2>Tabel Data Penilaian</h2>
                    <div class="card-body py-1">
                        <div class="col-sm col-md-6">
                        <div id="dataTable_length" class="dataTables length">
                        <label>
                        Show
                        <select class="custom-select custom-select-sm form control form-control-sm"
                        name="dataTable_length" aria-controls="dataTable">
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                        </select>
                        entries
                        </label>
                        </div>
                        <br>
                        <div class="col-lg-3 col-md-6 mt-4 mt-md-0 justify-content-center">
                        <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                            <ul class="pagination">
                            <li class="paginate_button page-item previous disabled" id="dataTable_previous">
                            <a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="dataTable_next"><a href="#" aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div>
                        </div>
                        <br> 

                    <!-- DataTables Example -->
                        <div class="card-body py-6">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                Data Kriteria
                                    <thead>
                                        <tr>
                                            <th>Kode Kriteria</th>
                                            <th>Nama Kriteria</th>
                                            <th>Attribut</th>
                                            <th>Bobot</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <tr>
                                                <th>Kode Kriteria</th>
                                                <th>Nama Kriteria</th>
                                                <th>Attribut</th>
                                                <th>Bobot</th>
                                            </tr>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>C1</td>
                                            <td>ABSEN</td>
                                            <td>Benefit</td>
                                            <td>25</td>
                                        </tr>
                                        <tr>
                                            <td>C2</td>
                                            <td>Jumlah Kunjungan</td>
                                            <td>Benefit</td>
                                            <td>25</td>
                                        </tr>
                                        <tr>
                                            <td>C3</td>
                                            <td>Jumlah Income</td>
                                            <td>Cost</td>
                                            <td>30</td>
                                        </tr>
                                        <tr>
                                            <td>C4</td>
                                            <td>Sikap</td>
                                            <td>Benefit</td>
                                            <td>20</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-body py-6">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="4">
                                Data Alternatif
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>C1</th>
                                            <th>C2</th>
                                            <th>C3</th>
                                            <th>C4</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <tr>
                                            <th>Nama</th>
                                            <th>C1</th>
                                            <th>C2</th>
                                            <th>C3</th>
                                            <th>C4</th>
                                            </tr>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <!---
                                    <form action="/Dpmsrnnilai/tmbh" method="POST" enctype='multipart/form-data' >
                                     @php echo csrf_field() @endphp
                                        <tr>
                                            <td name="nama_kar" id="nama_kar">Tiger Nixon</td>
                                            <td class="col-md-1"><input class="form-control" type="text" name="C1" id="C1" placeholder="1-10"  /></td>
                                            <td class="col-md-1"><input class="form-control" type="text" name="C2" id="C2" placeholder="1-10"  /></td>
                                            <td class="col-md-1"><input class="form-control" type="text" name="C3" id="C3" placeholder="1-10"  /></td>
                                            <td class="col-md-1"><input class="form-control" type="text" name="C4" id="C4" placeholder="1-10"  /></td>
                                        </tr>
                                        <tr>
                                            <td name="nama_kar" id="nama_kar">Garrett Winters</td>
                                            <td class="col-md-1"><input class="form-control" type="text" name="C1" id="C1" placeholder="1-10"  /></td>
                                            <td class="col-md-1"><input class="form-control" type="text" name="C2" id="C2" placeholder="1-10"  /></td>
                                            <td class="col-md-1"><input class="form-control" type="text" name="C3" id="C3" placeholder="1-10"  /></td>
                                            <td class="col-md-1"><input class="form-control" type="text" name="C4" id="C4" placeholder="1-10"  /></td>
                                        </tr>
                                        <tr>
                                            <td name="nama_kar" id="nama_kar">Ashton Cox</td>
                                            <td class="col-md-1"><input class="form-control" type="text" name="C1" id="C1" placeholder="1-10"  /></td>
                                            <td class="col-md-1"><input class="form-control" type="text" name="C2" id="C2" placeholder="1-10"  /></td>
                                            <td class="col-md-1"><input class="form-control" type="text" name="C3" id="C3" placeholder="1-10"  /></td>
                                            <td class="col-md-1"><input class="form-control" type="text" name="C4" id="C4" placeholder="1-10"  /></td>
                                        </tr>
                                        <tr>
                                            <td name="nama_kar" id="nama_kar">Cedric Kelly</td>
                                            <td class="col-md-1"><input class="form-control" type="text" name="C1" id="C1" placeholder="1-10"  /></td>
                                            <td class="col-md-1"><input class="form-control" type="text" name="C2" id="C2" placeholder="1-10"  /></td>
                                            <td class="col-md-1"><input class="form-control" type="text" name="C3" id="C3" placeholder="1-10"  /></td>
                                            <td class="col-md-1"><input class="form-control" type="text" name="C4" id="C4" placeholder="1-10"  /></td>
                                        </tr>
                                        <tr>
                                            <td name="nama_kar" id="nama_kar">Airi Satou</td>
                                            <td class="col-md-1"><input class="form-control" type="text" name="C1" id="C1" placeholder="1-10" required/></td>
                                            <td class="col-md-1"><input class="form-control" type="text" name="C2" id="C2" placeholder="1-10" required/></td>
                                            <td class="col-md-1"><input class="form-control" type="text" name="C3" id="C3" placeholder="1-10" required/></td>
                                            <td class="col-md-1"><input class="form-control" type="text" name="C4" id="C4" placeholder="1-10" required/></td>
                                        </tr>
--->
                                    </tbody>
                                </table>
                                <a href="/Dpmsrnnilai/tmbh"><button type="submit" class="btn btn-primary">Masukkan</button></a>
                            </div>
                        </div>
                    </div>
                   
                <!-- /.container-fluid -->
            </div>
            <div class="container">
                        <div class="text-center">
                        <h2 >Form Penilaian </h2></div>
                        <div class="row items justify-content-center">
                            <div class="col-lg-6 ">
                            <form action="/Dpmsrnnilai/tmbh" method="POST" enctype='multipart/form-data' >
                            @php echo csrf_field() @endphp
                                <div class="row">
                                <div class="form-group">
                            <label for="exampleFormControlSelect1">Example select</label>
                            <input type="text" name="nama_kar" class="form-control" id="nama_kar" placeholder="Nama Karyawan" required>
                            <!-- <select class="form-control" id="exampleFormControlSelect1">
                            @foreach ( $option as $row )
                            <option value="{{$row->nama_kar}}">{{$row->nama_kar}}</option>
                            @endforeach
                            </select> -->
                            </div>
                                    <div class="form-group mt-3">
                                    <input type="number" name="C1" class="form-control" id="C1" placeholder="C1" required>
                                    </div><br/>
                                    <div class="form-group mt-3">
                                    <input type="number" class="form-control" name="C2" id="C2" placeholder="C2" required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <input type="number" class="form-control" name="C3" id="C3" placeholder="C3" required>
                                        </div>
                                    <div class="form-group mt-3">
                                    <input type="number" class="form-control" name="C4" id="C4" placeholder="C4" required>
                                    </div> 
                                    <br></br>
                                </div>
                                <br/>
                                    <div class="text-center"><a href=/Dpmsrnnilai/tmbh><button type="submit" class="btn btn-primary">Kirim</button></div>
                                </form>
                            </div>
                            <div class="card-body py-6">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="4">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>C1</th>
                                            <th>C2</th>
                                            <th>C3</th>
                                            <th>C4</th>
                                        </tr>
                                    </thead>
                                    @foreach($nilai as $n)
                                    <tbody>
                                        <tr>
                                            <td>{{ $n->nama_kar}}</td>
                                            <td>{{ $n->C1}}</td>
                                            <td>{{ $n->C2}}</td>
                                            <td>{{ $n->C3}}</td>
                                            <td>{{ $n->C4}}</td>
                                            <td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <tr>
                                            <th>Nama</th>
                                            <th>C1</th>
                                            <th>C2</th>
                                            <th>C3</th>
                                            <th>C4</th>
                                            </tr>
                                        </tr>
                                    </tfoot>
                            </div><br></br></table>
                            <div class="text-center"><a href="{{route('norm')}}"><button type="submit" class="btn btn-primary">Proses</button></div>
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
