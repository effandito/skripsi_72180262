<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Human Resource Information System</title>
  
        <!-- Favicon-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.11.0/sweetalert2.css" />
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/DUKARYAWAN">Data Karyawan</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/DUAbsen">Data Absen</a>
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
                    <h1>TABEL DATA Konsumen</h1>
                    <div class="container">
                        <!-- <div class="col-sm col-md-6"> -->
                       <div class="mr-5">
                        <div id="dataTable_length" class="dataTables length">
                          <label>
                        Tampilkan
                        <form action="/DUKONSUMEN" method="GET" enctype='multipart/form-data' >
                        <select class="custom-select custom-select-sm form control form-control-sm"
                        name="show" aria-controls="dataTable">
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                        </select>
                        entries
                        </label>                      
                        </div>
                        
                        <input type="text" class="mr 5" name="carikons" style="float: right;" placeholder="Search for names.. " >
                        <button type="submit" class="btn btn-primary"  style="float: right; display: table;">Cari</button>
                        </form><br/>
                    <!-- DataTales Example -->
                        <div class="card-body">
                            <div class="table" style=" justify-content: center;">
                                <table class="table table-bordered  table-hover" id="dataTable" width="100%" cellspacing="0">
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
                                  
                                    @foreach($konsumen as $kons)
                                    <tbody>
                                        <tr>
                                            <td> {{ $kons->prshn}}</td>
                                            <td>{{ $kons->alamat}}</td>
                                            <td>{{ $kons->npwp}}</td>
                                            <td> {{ $kons->telp}}</td>
                                            <td> {{ $kons->email}}</td>
                                            <td> {{ $kons->nama_cp}}</td>
                                            <td> {{ $kons->no_hp}}</td>
                                            <td> {{ $kons->pesan}}</td>
                                            <td> {{ $kons->ttl_hrg}}</td>
                                            <td>
                                            <a href=#><button type="submit" class="btn btn-primary">Edit</button></a>
                                            <br> <br>
                                            <a href=#><button type="submit" class="btn btn-warning" onclick="return confirm('Yakin Ingin Menghapus Data Ini?');">Delete</button></a>
                                          
                                            <br> <br>
                                            <a href=#><button type="submit" class="w3-button w3-red">Test</button></a>
                                          
                                          <br> <br>
                                            <!-- <a href=#><button type="submit" class="btn btn-warning" bg-color="red" onclick="warning()">Test Sweet Alert</button></a>                 
                                            <br> <br>
                                            <a href=/sales/deletekons/{id_kons}><button type="submit" class="btn btn-warning" bg-color="red" onsubmit="return confirm('YAKIN INGIN DIHAPUS?')">Test Sweet Alert</button></a>                  -->
                                        </tr>
                                         </tbody>
                                         @endforeach 
                                </table>
                                {{$konsumen->withQueryString()->links()}}
                                </div>
                            </div>
                        </div>
                    </div>     
                <!-- /.container-fluid -->
            </div>
            
        </div>
        <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="sweetalert2.all.min.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <script src="../js/scripts.js"></script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
      
        <!-- Core theme JS-->
       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script> -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script> -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script>
document.querySelector(".TEST").addEventListener('click', function(){
        Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
}
})
</script>
        <!-- Percobaan sweet alert <script type="text/javascript">
    function deleted(){
        Swal.fire({
          title: 'Apakah Anda Yakin ?',
          text: "Data Anda Tidak Dapat di Kembalikan ..",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ya, Hapus Data ini!',
          cancelButtonText: 'Tidak..',
        }).then((result) => {
          if (result.isConfirmed) {
            Swal.fire(
              'Deleted!',
              'Berhasil Dihapus.',
              'success'
            )
          }else{
            Swal.fire(
              'Warning..!',
              'Gagal Dihapus.',
              'warning'
            )             
          }
        })      
    }
</script> -->
<!-- <script type="text/javascript">



function deleteConfirmation(id) {
swal({
title: "Delete?",
text: "Please ensure and then confirm!",
type: "warning",
showCancelButton: !0,
confirmButtonText: "Yes, delete it!",
cancelButtonText: "No, cancel!",
reverseButtons: !0
}).then(function (e) {
if (e.value === true) {
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$.ajax({
type: 'POST',
url: "{{url('/delete')}}/" + id,
data: {_token: CSRF_TOKEN},
dataType: 'JSON',
success: function (results) {
if (results.success === true) {
swal("Done!", results.message, "success");
} else {
swal("Error!", results.message, "error");
}
}
});
} else {
e.dismiss;
}
}, function (dismiss) {
return false;
})
}
</script> -->
    </body>
</html>
