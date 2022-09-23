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
       
             <style>
            #myInput {
            border-radius: 10px;
            background-image: url('/css/searchicon.png'); /* Add a search icon to input */
            background-position: 10px 12px; /* Position the search icon */
            background-repeat: no-repeat; /* Do not repeat the icon image */
            width: 100%; /* Full-width */
            font-size: 16px; /* Increase font-size */
            padding: 12px 20px 12px 40px; /* Add some padding */
            border: 1px solid #ddd; /* Add a grey border */
            margin-bottom: 12px; /* Add some space below the input */
            }

            #myTable {
            border-collapse: collapse; /* Collapse borders */
            width: 100%; /* Full-width */
            border: 1px solid #ddd; /* Add a grey border */
            font-size: 18px; /* Increase font-size */
            }

            #myTable th, #myTable td {
            text-align: left; /* Left-align text */
            padding: 12px; /* Add padding */
            }

            #myTable tr {
            /* Add a bottom border to all table rows */
            border-bottom: 1px solid #ddd;
            }

            #myTable tr.header, #myTable tr:hover {
            /* Add a grey background color to the table header and on hover */
            background-color: #f1f1f1;
            }
      </style>
            
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            
            <div class="border-end bg-blue" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-white">CV ANDI OFFSET</div>
                <div class="list-group list-group-flush" color="bg-blue">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/salesAbsen">Data Absen</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/salesTarget">Data Target Penjualan</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/salesSolstra">Data Solusi Strategi</a>
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
                    <h1>TABEL DATA Konsumen</h1>
                    <div class="container">
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
                    <!-- DataTales Example -->
                    <div class="card-body">
                            <div class="table" style="justify-content: center;">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                        <tr>
                                            <th>Perusahaan</th>
                                            <th>Alamat</th>
                                            <th>NPWP</th>
                                            <th>No Telpon</th>
                                            <th>Email</th>
                                            <th>Nama Kontak</th>
                                            <th>Nomor Handphone</th>
                                            <th>Pesanan</th>
                                            <th>Total Harga</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Perusahaan</th>
                                            <th>Alamat</th>
                                            <th>NPWP</th>
                                            <th>No Telpon</th>
                                            <th>Email</th>
                                            <th>Nama Kontak</th>
                                            <th>Nomor Handphone</th>
                                            <th>Pesanan</th>
                                            <th>Total Harga</th>   
                                            <th>Aksi</th> 
                                        </tr>
                                    </tfoot>
                                    @foreach($konsumen as $kons)
                                    <tbody>
                                        <tr>
                                            <td>{{ $kons->prshn}}</td>
                                            <td>{{ $kons->alamat}}</td>
                                            <td>{{ $kons->npwp}}</td>
                                            <td>{{ $kons->telp}}</td>
                                            <td>{{ $kons->email}}</td>
                                            <td>{{ $kons->nama_cp}}</td>
                                            <td>{{ $kons->no_hp}}</td>
                                            <td>{{ $kons->pesan}}</td>
                                            <td>{{ $kons->ttl_hrg}}</td>
                                            <td>
                                            <a href="/sales/veditkons/{{ $kons->id_kons }}"><button type="submit" class="btn btn-primary">Edit</button></a>
                                            <br> <br>
                                            <a href="/sales/deletekons/{{ $kons->id_kons }}"><button type="submit" class="btn btn-warning" bg-color="red">Delete</button></a>    
                                           </td></tbody>
                                        </tr>
                                        @endforeach       
                                </table>
                                
                                {{$konsumen->withQueryString()->links()}}
                            </div>
                        </div>
                    </div>
                   
                <!-- /.container-fluid -->
            </div>
            
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
