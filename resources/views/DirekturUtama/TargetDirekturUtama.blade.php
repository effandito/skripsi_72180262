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
        
        <!-- SweetAlert-->
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
        <style>
        h1{

        }
        </style>
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            
            <div class="border-end bg-blue" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-white">CV ANDI OFFSET</div>
                <div class="list-group list-group-flush" color="bg-blue">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/DUKARYAWAN">Data Karyawan</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/DUAbsen">Data Absen</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/DUTarget">Data Target Penjualan</a>
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
                        <button class="navbar-toggler" style="float: left;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
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
                    <h1>TABEL DATA Target</h1>
                    <div class="container">
                        <div class="col-sm col-md-6">
                        <div id="dataTable_length" class="dataTables length">
                        <label>
                        Show
                        <form action="/DU/Target" method="GET" enctype='multipart/form-data' >
                        <select class="custom-select custom-select-sm form control form-control-sm"
                        name="show" aria-controls="dataTable">
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                        
                        
                        </select>

                        entries
                        </label>
                        <!-- saat diganti untuk filter -->
                        <button type="submit" class="btn btn-primary">Show</button>
                        </form>
                        </div>
                    <!-- DataTales Example -->
                        <div class="card-body">
                            <div class="table">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>Id Target </th>
                                            <th>Tahun</th>
                                            <th>Target Kunjungan</th>
                                            <th>Target Penjualan</th>
                                            <th>Wilayah</th>
                                            <th>Nama</th>
                                        </tr>
                                    </thead>
                                    @foreach($target as $tar)
                                    <tbody>
                                        <tr>
                                            <td> {{ $tar->id_target}}</td>
                                            <td>{{ $tar->tahun}}</td>
                                            <td>{{ $tar->target_kunjung}}</td>
                                            <td> {{ $tar->target_jual}}</td>                                           
                                            <td> {{ $tar->wilayah}}</td>
                                            <td> {{ $tar->nama}}</td>
                                              <td>
                                            <a href="/DU/viewedittarget/{{ $tar->id_target }}"><button type="submit" class="btn btn-primary">Edit</button></a>
                                            <br> <br>
                                            <a href="/DU/deletetarget/{{ $tar->id_target }}"><button type="submit" class="btn btn-warning" bg-color="red">Delete</button></a>  </td>            
                                        </tr>
                                        @endforeach 
                                         </tbody>
                                     </table>
                             </div>
                             {{$target->withQueryString()->links()}}
                        </div>
                    </div>     
                <!-- /.container-fluid -->
            </div>
            <div class="container">
                        <div class="text-center">
                        <h2 >Form Input Target </h2></div>
                        <div class="row items justify-content-center">
                            <div class="col-lg-6 ">
                            <form action="/DU/InputTarget" method="POST" enctype='multipart/form-data' >
                            @php echo csrf_field() @endphp
                                <div class="row">
                                <div class="col-md-6  mt-md-3">
                                    <select class="form-control form-control-sm" placeholder="tahun" name="tahun" id="tahun" >
                                        <option selected="">Tahun</option>
                                        <option value='2000'>2000</option>
                                        <option value='2001'>2001</option>
                                        <option value='2002'>2002</option>
                                        <option value='2003'>2003</option>
                                  </select>
                                </div>   
                                <div class="col-md-6  mt-md-3">
                                    <select class="form-control form-control-sm" placeholder="wilayah" name="wilayah" id="wilayah" >
                                        <option selected="">Wilayah</option>
                                         <option value="Jawa">Jawa</option>
                                        <option value="Bali">Bali</option>
                                        <option value="Sumatra">Sumatra</option>
                                        <option value="Sulawesi">Sulawesi</option>
                                  </select>
                                </div>   
                                    <div class="col-md-6 form-group">
                                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama" required>
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-3">
                                    <input type="number" class="form-control" name="target_jual" id="target_jual" placeholder="Target Penjualan" required>
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-3">
                                    <input type="number" class="form-control" name="target_kunjung" id="target_kunjung" placeholder="Target Kunjungan" required>
                                    </div>
                                <p></p>   
                                <div class="text-center"><a href="/DU/InputTarget"><button type="submit" class="btn btn-primary">Kirim</button></div>
                                <button class="second">Title and Text</button>
                                </form><br/>
                            </div>
        
        
                            </div>
                                </div>
                                </li>
                        
                <!-- /.container-fluid -->
            </div>
        </div>
        <script>
        document.querySelector(".first").addEventListener('click', function(){
            Swal.fire("Our First Alert");
            });

        document.querySelector(".second").addEventListener('click', function(){
        Swal.fire("Our First Alert", "With some body text!");
        });
        </script>
        <!-- SweetAlert-->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Core theme JS-->
        <script src="../js/scripts.js"></script>
        <script src="js/demo/datatables-demo.js"></script>

        <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
    
    </body>
</html>
