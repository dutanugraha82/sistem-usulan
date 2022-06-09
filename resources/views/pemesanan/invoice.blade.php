<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Invoice</title>
  </head>
  <body class="bg-dark">
      <div class="container mt-4">
          <div class="card">
              <div class="card-header text-center">
                  <h4>Invoice</h4>
              </div>
              {{-- @foreach ($pesanan as $item) --}}
              <div class="card-body">
                <h5 class="mb-4">Nama Pemesan : {{ $pesanan->nama }} </h5>
                <hr style="height: 3px">
                <h5 class="mb-4">Alamat : {{ $pesanan->alamat }}</h5>
                <hr style="height: 3px">
                <h5 class="mb-4">Nama Barang : {{ $pesanan->barang }}</h5>
                <hr style="height: 3px">
                <h5 class="mb-4">Status Pemesanan : {{ $pesanan->status }}</h5>
                <hr style="height: 3px">
                <h5 class="mb-4">Jumlah Barang : {{ $pesanan->jumlah }}</h5>
                <hr style="height: 3px">
                <h5>Total Harga : Rp {{ $pesanan->total }}</h5>

              </div>
              <div class="card-footer">
                  Tanggal : {{ $pesanan->tanggal }}
              </div>
              {{-- @endforeach --}}
             
          </div>
      </div>
      <div class="container mt-4 text-center">
          <a href="/data-pesanan" class="btn btn-warning" style="width: 200px">Kembali</a>
      </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>