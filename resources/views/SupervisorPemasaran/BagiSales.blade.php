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
        <link href="../../css/styles.css" rel="stylesheet" />
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
                             <div class="container">
                        <div class="text-center">
                        <h2 >Form Bagi Sales</h2></div>
                        <div class="row items justify-content-center">
                            <div class="col-lg-6 ">
                            <form action="/spv/InputTarget" method="POST" enctype='multipart/form-data' >
                            @csrf
                            <input type="hidden" value="{{$target->id_target}}" name="id_target">
                               <div class="row">
                               <div class="col-md-6  mt-md-3">
                               <select class="form-control form-control-sm" placeholder="tahun" name="tahun" id="tahun" readonly="readonly">
                                           <option value="2000" @if($target->tahun=="2000") selected @endif>2000</option>
                                        <option value="2001"@if($target->tahun=="2001") selected @endif>2001</option>
                                        <option value="2002"@if($target->tahun=="2002") selected @endif>2002</option>
                                        <option value="2003"@if($target->tahun=="2003") selected @endif>2003</option>
                                  </select>                                </div>   
                                
                                <div class="col-md-6  mt-md-3">
                                <select class="form-control form-control-sm" placeholder="wilayah" name="wilayah" id="wilayah" readonly="readonly">
                                           <option value="Jawa" @if($target->wilayah=="Jawa") selected @endif>Jawa</option>
                                        <option value="Bali"@if($target->wilayah=="Bali") selected @endif>Bali</option>
                                        <option value="Sumatra"@if($target->wilayah=="Sumatra") selected @endif>Sumatra</option>
                                        <option value="Sulawesi"@if($target->wilayah=="Sulawesi") selected @endif>Sulawesi</option>
                                  </select>
                                  </select>
                                </div>   
                                    <div class="col-md-6 form-group mt-3 mt-md-3">
                                    <input type="number" class="form-control" name="target_jual" id="target_jual" placeholder="Target Penjualan" value="{{$target->target_jual}}"readonly>
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-3">
                                    <input type="number" class="form-control" name="target_kunjung" id="target_kunjung" placeholder="Target Kunjungan" value="{{$target->target_kunjung}}" readonly>
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-3">
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Sales" required>
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-3">
                                    <input type="text" class="form-control" name="pmbr_kuasa" id="pmbr_kuasa" placeholder="Pemberi Kuasa"  required>
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-3">
                                    <input type="number" class="form-control" name="target_jual" id="target_jual" placeholder="Target Penjualan "  required>
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-3">
                                    <input type="number" class="form-control" name="target_kunjung" id="target_kunjung" placeholder="Target Kunjungan "  required>
                                    </div>
                                <p></p>   
                                <div class="text-center"><button type="submit" class="btn btn-primary">Kirim</button></div>
                                </form><br/>
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
