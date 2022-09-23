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
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            
            <div class="border-end bg-blue" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-white">CV ANDI OFFSET</div>
                <div class="list-group list-group-flush" color="bg-blue">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Data Karyawan</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="DUdataabsen.html">Data Absen</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="DUdatakonsumen.html">Data Konsumen</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="DUdatatarget.html">Data Target Penjualan</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="DUdatasolstra.html">Data Solusi Strategi</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="GrafikPenilaianDU.html">Grafik Penilaian Karyawan</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="CRUDKARYAWAN.html">MENGELOLA KARYAWAN</a>
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
               
                <div class="card-body-md-6">
                    <div class="container">
                        
                        <h2 >Form Input Data Karyawan</h2>
                        <div class="row items justify-content-center">
                            <div class="col-lg-6 ">
                            <form action="/HRD/updatekaryawan" method="POST" enctype='multipart/form-data' >
                            @csrf
                            <input type="hidden" value="{{$karyawan->id_karyawan}}" name="id">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                    <input type="text" name="no_ktp" class="form-control" id="no_ktp" placeholder="Nomor KTP" value="{{$karyawan->no_ktp}}" required>
                                    </div>       
                                    <div class="col-md-6 form-group">
                                    <!-- <input type="radio" name="jenis_klmn" id="jenis_klmn" value="Pria"@if($karyawan->jenis_klmn=="Pria") echo 'checked' @endif>Pria</option>
                                        <input type="radio" name="jenis_klmn" id="jenis_klmn" value="Wanita" @if($karyawan->jenis_klmn=="Wanita") echo 'checked' @endif>Wanita</option>-->
                                     <input type="radio" name="jenis_klmn" id="jenis_klmn" value="Pria" @php if(($karyawan->jenis_klmn)=='Pria'){ echo "checked=Pria";}  @endphp enable>Pria
                                    <input type="radio" name="jenis_klmn" id="jenis_klmn" value="Wanita" @php if(($karyawan->jenis_klmn)=='Wanita'){ echo "checked=Wanita";}  @endphp enable>Wanita</input> 
                                    <!-- <input type="radio" name="jenis_klmn" id="jenis_klmn" value="Pria" @php if (($karyawan->jenis_kelamin)=='Pria') echo 'checked' @endphp enable>Pria
                                    <input type="radio" name="jenis_klmn" id="jenis_klmn" value="Wanita" @php if (($karyawan->jenis_kelamin)=='Wanita') echo 'checked' @endphp enable>Wanita</input> --> 
                                    </input>
                                   </select> 
                                    
                                    </div>
                                    <div class="form-group mt-3">
                                    <select class="form-control form-control-sm" placeholder="Tempat Lahir" name="tempat_lhr" id="tempat_lhr" value="{{$karyawan->tempat_lhr}}" required>
                                                <option>Yogyakarta</option>
                                            <option>Jakarta</option>
                                            <option>Bandung</option>
                                            <option>Merauke</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6  mt-md-3">
                                    <label> Tanggal lahir</label>
                                    <input type="date" id="tgl_lahir" name="tgl_lahir" placeholder="tanggal lahir" value="{{$karyawan->tgl_lahir}}" required></div>
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="Nomor Handphone" value="{{$karyawan->no_hp}}" required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control" name="no_bpjs" id="no_bpjs" placeholder="No Bpjs" value="{{$karyawan->no_bpjs}}" required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control" name="nama_kar" id="nama_kar" placeholder="Nama Lengkap" value="{{$karyawan->nama_kar}}" required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="Jabatan" value="{{$karyawan->jabatan}}" required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <select class="form-control form-control-sm" placeholder="agama" name="agama" id="agama" value="{{$karyawan->agama}}" required>
                                             <option>Islam</option>
                                            <option>Katolik</option>
                                            <option>Kristen</option>
                                            <option>Hindu</option>
                                            <option>Budha</option>
                                            <option>Kong Hu Chu</option>
                                        </select>
                                    </div>
                                    <div class="form-group mt-3">
                                    <select class="form-control form-control-sm" placeholder="pendidikan" name="pendidikan" id="pendidikan" value="{{$karyawan->pendidikan}}" required >
                                            <option>SD</option>
                                            <option>SMP</option>
                                            <option>SMA</option>
                                            <option>S1</option>
                                            <option>S2</option>
                                            <option>S3</option>
                                        </select>
                                    </div>  
                                    </div>
                                    <div class="form-group mt-3 md-8">
                                        <select class="form-control form-control-sm" placeholder="golongan darah" name="goldar" id="goldar" value="{{$karyawan->goldar}}"required>
                                            <option>O</option>
                                            <option>A</option>
                                            <option>B</option>
                                            <option>AB</option>
                                        </select>
                                    </div>
                                    <div class="form-group mt-3">
                                    <input type="radio" name="status" id="status" value="Aktif" @php if(($karyawan->status)=='Aktif'){ echo "checked=Aktif";}  @endphp enable>Aktif
                                    <input type="radio" name="status" id="status" value="Pensiun" @php if(($karyawan->status)=='Pensiun'){ echo "checked=Pensiun";}  @endphp enable>Pensiun</input> 
                                    </div>
                                    </div>
                                    <div class="form-group mt-3">
                                    <select class="form-control form-control-sm" placeholder="Jumlah Anak" name="jml_ank" id="jml_ank" value="{{$karyawan->jml_ank}}" required>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" value="{{$karyawan->alamat}}" required>
                                    </div>
                                    <div class="form-group mt-3">
                                    <label>Tanggal masuk awal</label>
                                    <input type="date" id="tgmsk_awal" name="tgmsk_awal" placeholder="tanggal masukk awal" value="{{$karyawan->tgmsk_awal}}" ></div>
                                    </div> 
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control" name="nm_ats" id="nm_ats" placeholder="Nama Atasan" value="{{$karyawan->nm_ats}}" required>
                                     </div>         
                                    </div>
                              
                                <p></p>   
                                <div class="text-center"><a href="/HRD/updatekaryawan"><button type="submit" class="btn btn-primary">Kirim</button></div>
                                </br>
                                </form>
                                </div>
                    </div>
                                </div>
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
