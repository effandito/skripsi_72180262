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
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/DUKARYAWAN">Data Karyawan</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/DUAbsen">Data Absen</a>
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
                   
                    <!-- DataTales Example -->
                    <div class="container">
                        <div class="text-center">
                        <h2 >Form Edit Konsumen </h2></div>
                        <div class="row items justify-content-center">
                            <div class="col-lg-6 ">
                            <form action="/sales/updatedkons" method="POST" enctype='multipart/form-data' >
                            @csrf
                                <div class="row">
                                <input type="hidden" name="id_kons" class="form-control" id="id_kons" value ="{{$konsumen->id_kons}}">
                                    <div class="col-md-6 form-group">
                                    <input type="text" name="prshn" class="form-control" id="prshn" placeholder="Nama Perusahaan" value="{{$konsumen->prshn}}" required>
                                    </div>       
                                    <div class="col-md-6 form-group">
                                    <input type="text" name="npwp" class="form-control" id="npwp" placeholder="NPWP" value="{{$konsumen->npwp}}" required>
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-3">
                                    <input type="text" class="form-control" name="telp" id="telp" placeholder="No Telepon Kantor" value="{{$konsumen->telp}}" required>
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-3">
                                        <input type="text" class="form-control" name="nama_cp" id="nama_cp" placeholder="Nama Kontak Person"  value="{{$konsumen->nama_cp}}" required>
                                        </div>
                                    <div class="form-group mt-3">
                                    <input type="number" class="form-control" name="no_hp" id="no_hp" placeholder="No Handphone" value="{{$konsumen->no_hp}}" required>
                                    </div>  
                                    <div class="form-group mt-3">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email Perusahaan/Email Contact Person"  value="{{$konsumen->email}}"  required>
                                    </div>  
                                </div>
                                <div class="form-group mt-3">
                                    <textarea class="form-control" name="pesan" id="pesan" rows="5"placeholder="Pesanan"  required>{{$konsumen->pesan}}</textarea>
                                </div>
                                <div class="form-group mt-3">
                                    <textarea class="form-control" name="alamat" id="alamat" rows="5"placeholder="Alamat Perusahaan" required>{{$konsumen->alamat}}</textarea>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="ttl_hrg" id="ttl_hrg" placeholder="Total Harga"  value="{{$konsumen->ttl_hrg}}" required>
                                </div>    
                                <p></p>   
                                <div class="text-center"><a href=/sales/updatedkons><button type="submit" class="btn btn-primary">Kirim</button></div>
                                </form>
                            </div>     
                            </div>
                                </div>
                                </li>
                        
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
