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
        <link href="/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            
            <div class="border-end bg-blue" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-white">CV ANDI OFFSET</div>
                <div class="list-group list-group-flush" color="bg-blue">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="DUdatakaryawan.html">Data Karyawan</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="DUdataabsen.html">Data Absen</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Data Konsumen</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="DUdatatarget.html">Data Target Penjualan</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="DUdatasolstra.html">Data Solusi Strategi</a>
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
                   
                    <!-- DataTales Example -->
                   
                          <div class="container">
                        <div class="text-center">
                        <h2 >Form Solusi Strategi </h2></div>
                        <div class="row items justify-content-center">
                            <div class="col-lg-6 ">
                            <form action="sales/updatedsolstra" method="POST" enctype='multipart/form-data'>
                            @csrf
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="nama_sales" id="nama_sales" placeholder="Nama Sales" value="{{$solstra->nama_sales}}" required>
                                    </div>  
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control" name="nama_spv" id="nama_spv" placeholder="Nama Supervisor" value="{{$solstra->nama_spv}}" required>
                                        </div><br> 
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                    <input type="time" name="waktu_msl" class="form-control" id="waktu_msl" placeholder="Waktu Masalah"value="{{$solstra->waktu_msl}}" required>
                                    </div>       

                                    <div class="col-md-6 form-group">
                                    <input type="date" name="tanggal_msl" class="form-control" id="tanggal_msl" placeholder="Tanggal Masalah" value="{{$solstra->tanggal_msl}}" required>
                                    </div>
                                    <div class="form-group mt-3">
                                    <textarea class="form-control" name="masalah" id="masalah" rows="5"placeholder="Masalah" required>{{$solstra->masalah}}</textarea>
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-3">
                                    <input type="time" class="form-control" name="waktu_sol" id="waktu_sol" placeholder="Waktu Solusi" value="{{$solstra->waktu_sol}}" required>
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-3">
                                        <input type="date" class="form-control" name="tanggal_sol" id="tanggal_sol" placeholder="Tanggal Solusi" value="{{$solstra->tanggal_sol}}"  required>
                                        </div>
                                        <div class="form-group mt-3">
                                    <textarea class="form-control" name="solusi" name="solusi"rows="5"placeholder="Solusi" required>{{$solstra->solusi}}</textarea>
                                </div>  
                                <div class="form-group mt-3">
                                    <select class="form-control form-control-sm" placeholder="Status" name="status" id="status" value="{{$solstra->status}}" required>
                                            <option selected="">Pilih Status</option>
                                            <option value="Terselesaikan">Terselesaikan</option>
                                            <option value="Belum Direspon">Belum Direspon</option>
                                        </select>
                                    </div>
                                </div> 
                                <p></p>   
                                <div class="text-center"><a href="/sales/updatedsolstra"><button type="submit" class="btn btn-primary">Kirim</button></div>
                                </form>
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

        <script src="vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
    
    </body>
</html>
