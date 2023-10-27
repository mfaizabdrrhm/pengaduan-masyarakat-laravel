<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href={{asset("bs/css/bootstrap.min.css")}}>
</head>

  <style>
    body{
      background-color: gray;
    }
    
  </style>
<body>

  <nav class="navbar bg-dark border-body"data-bs-theme="dark">
    <div class="container-fluid">
        <span class="navbar-brand" href="#">laporan pengaduan</a>
        <button class="btn btn-outline-succes" type="submit"></butrton>
        <input class="form-control me-2" type="cari" placeholder="cari" aria-label="cari">
      <button class="btn btn-outline-success" type="submit">cari</button>
      <button class="btn btn-outline-success" type="submit">logout</button>
        </button>
     </nav>
     <a class="buat" href="{{url('isi_laporan')}}">Buat</a> 
<div class = "container">
  <br>
<table class="table table-dark table-striped">
  
  <thead>
    <tr>
      <th scope="col">No</th><br>
      
      <th scope="col">Pengaduan</th><br>
      <th scope="col">Tanggal</th><br>
      <th scope="col">Foto</th><br>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($pengaduan as $pengaduan)
    <tr>
      <td>{{$pengaduan->id_pengaduan}}</td>
      <td>{{$pengaduan->isi_laporan}}</td>
      <td>{{$pengaduan->tgl_pengaduan}}</td>
      <td><img src='{{asset("storage/image/".$pengaduan->foto)}}'width'="100px"/></td>
      <td><a href="proses_update/<?=$pengaduan->id_pengaduan;?>"class="btn btn-outline-danger">update</a>
      <a href="proses_hapus/<?=$pengaduan->id_pengaduan;?>"class="btn btn-outline-warning">X</a>
      <a href="proses_detail/<?=$pengaduan->id_pengaduan;?>"class="btn btn-outline-danger">detail</td>
      </tr>
    @endforeach
  
  </tbody>
</table>
</body>
</html>