<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <style>
        .full-body{
          background: linear-gradient(to bottom, #ffe6c8, #e8dbd1, #ece2e0);
        }
        .form-card{
          border: 1px solid;
          padding: 30px;
          border-radius: 15px;
          background-color: #fff;
        }
      </style>
</head>
  <body>
    <div class="full-body">
      
   <div class="container d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">
    <div class="form-card">
        <form action="/update/{{$data->id}}" method="POST" style="width: 500px; height: auto;">
        @csrf
        <div class="mb-3 text-center">
            <h3>Edit Product</h3>
        </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nama Product</label>
                <input type="text" name="name" class="form-control" id="name" value="{{$data->name}}">
              </div>
            <div class="mb-3">
                <label for="jenis" class="form-label">Harga Product</label>
                <input type="text" name="price" class="form-control" id="jenis" value="{{$data->price}}" placeholder="Silahkan Masukan Harga Product">
            </div>
            <div class="mb-3">
              <label class="custom-file-label">Pilih Foto</label>
              <input type="file" class="form-control" name="image" id="" value="{{$data->image}}">
              <br>
              <img src="{{asset('assets/images/'. $data->image)}}" alt="" width="120px">
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary me-md-2 w-50" type="submit">Simpan</button>
            </div>
          </form>
    </div>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
</div>
</body>
</html>
