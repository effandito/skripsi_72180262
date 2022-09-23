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
                        <h2 >Form Input Penjualan</h2></div>
                        <br/>
                        <div class="row items justify-content-center">
                            <div class="col-lg-6 ">
                            <form action="/sales/tambahpenjualan" method="POST" enctype='multipart/form-data' >
                            @php echo csrf_field() @endphp
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                    <input type="text" name="nama_per" class="form-control" id="nama_per" placeholder="Nama Perusahaan" required>
                                    </div>       
                                    <div class="col-md-6 form-group">
                                    <input type="text" name="nama_kons" class="form-control" id="nama_kons" placeholder="Nama Konsumen" required>
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-3">
                                    <input type="text"  name="no_telp" class="form-control" id="no_telp" placeholder="No Telepon" required>
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-3">
                                    <input type="text"  name="judul" class="form-control" id="judul" placeholder="Judul Buku" required>
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-3">
                                    <input type="text"  name="jumlah" class="form-control" id="jumlah" placeholder="Jumlah" required>
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-3">
                                    <input type="text"  name="harga" class="form-control" id="harga" placeholder="Harga" required>
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-3">
                                    <input type="text"  name="diskon" class="form-control" id="diskon" placeholder="Diskon" required>
                                    </div>
                                    <div class="input-group mt-3">
                                    <b>File Gambar</b><br/>
						            <input type="file" name="foto_lok" id="foto_lok" accept="image/*">
                                </div>                
                                <div class="form-group mt-3">
                                    <textarea class="form-control" name="ttl_byr" id="ttl_byr" placeholder="Total Harga" required></textarea>
                                </div>
                                <p></p>   
                                <div class="text-center"><button type="submit" class="btn btn-primary">Kirim</button></div>
                                <p></p>   
                                </form>
                            </div>
                                </div>
                                </div>
                                </li>
                        
                <!-- /.container-fluid -->
            </div>


        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Core theme JS-->
        <script src="../js/scripts.js"></script>
        <script src="js/demo/datatables-demo.js"></script>

        <script src="vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
    
    </body>
</html>
