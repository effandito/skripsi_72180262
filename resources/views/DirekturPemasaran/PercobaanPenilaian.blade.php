<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Penilaian</title>
</head>
<body>

                         
                        <div class="card-body py-6">
                        <form action="/Dpmsrnnilai/tmbh" method="POST" enctype='multipart/form-data' >
                            @php echo csrf_field() @endphp
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
                                    
                                    <tbody>
                                    <form action="/Dpmsrnnilai/tmbh" method="POST" enctype='multipart/form-data' >
                                     @foreach($karyawan as $kary)
                                        <tr>
                                            <td><input class="form-control" name="nama_kar" id="nama_kar" value="{{$kary->nama_kar}}" readonly/></td>
                                            <td class="col-md-1"><input class="form-control" type="text" name="C1" id="C1" placeholder="1-10" required /></td>
                                            <td class="col-md-1"><input class="form-control" type="text" name="C2" id="C2" placeholder="1-10" required /></td>
                                            <td class="col-md-1"><input class="form-control" type="text" name="C3" id="C3" placeholder="1-10"  required/></td>
                                            <td class="col-md-1"><input class="form-control" type="text" name="C4" id="C4" placeholder="1-10"  required/></td>
                                        </tr>
                                      @endforeach
                                    </tbody>
                                    <div class="text-center"><a href=/Dpmsrnnilai/tmbh><button type="submit" class="btn btn-primary">Kirim</button></div>
                                </form>
</body>
</html>