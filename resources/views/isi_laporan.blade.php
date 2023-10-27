<!DOCTYPE html>
<html>
<head>
    <title>isi laporan</title>
<link rel="stylesheet" href="bs/css/bootstrap.min.css">
</head>
<body>
    <div class="form-floating">
    <div class="container">
     <form action="isi_laporan"method="post" enctype="multipart/form-data">
      @method('POST')
      @csrf
    <label for="floatingtextarea">isi laporan</label>
    <textarea class="form-control" placeholder="isi laporan" id="exampleFormControlTextarea" rows="3" name="isi"></textarea>
    </div>
    <label for="exampleFormControlTextarea" class="from-tabel"></label>
    <div class="inpu-group mb-3">
      <Input type="file" class="form-control" id="inputgroupfile02" name="foto">
    </div>
      <button type="submit" class="btn btn-dark">kirim</button>
    </div>
</body>
</html>