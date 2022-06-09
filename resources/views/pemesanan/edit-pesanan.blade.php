@extends('master')
@section('content')
<section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Input Pesanan</h3>
      </div>
      <div class="card-body">
        <div class="card card-primary">
            <!-- /.card-header -->
            <!-- form start -->
            <form action="/pesanan/{{ $pesanan->id }}" method="POST">
                @csrf
                @method('put')
              <div class="card-body">
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" required placeholder="Nama Pemesan" autofocus value="{{ $pesanan->nama }}">
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Pemesan" required value="{{ $pesanan->alamat }}">
                </div>
                <div class="form-group">
                    <label for="nama">Barang</label>
                    <input type="text" class="form-control" id="nama" name="barang" placeholder="Barang yang dipesan" required value="{{ $pesanan->barang }}">
                  </div>
                  <div class="form-group">
                    <label for="jumlah">Jumlah Barang</label>
                    <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah barang yang dipesan" required value="{{ $pesanan->jumlah }}">
                  </div>
                  <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal Pesanan" required value="{{ $pesanan->tanggal }}">
                  </div>

                  <div class="form-group">
                    <label for="status">Status</label>
                   <select name="status" class="custom-select" id="status">
                    <option value="{{ $pesanan->status }}">{{ $pesanan->status }}</option>
                   <option value="preorder">Pre Order</option>
                   <option value="cash">Cash</option>
                  </select>
                  </div>

                  <div class="form-group">
                    <label for="total">Total</label>
                    <input type="text" class="form-control" id="total" name="total" placeholder="Total Harga" required value="{{ $pesanan->total }}">
                  </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
@endsection