@extends('master')
@section('content')
<section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Edit Barang</h3>
      </div>
      <div class="card-body">
        <div class="card card-primary">
            <!-- /.card-header -->
            <!-- form start -->
            <form action="/barang/{{ $barang->id }}" method="POST">
              @csrf
              @method('put')
              <div class="card-body">
                <div class="form-group">
                  <label for="nama">Nama Barang</label>
                  <input type="text" class="form-control" id="nama" name="nama" required value="{{ $barang->nama }}">
                </div>
                <div class="form-group">
                  <label for="jenis">Jenis Barang</label>
                  <input type="text" class="form-control" id="jenis" name="jenis" required value="{{ $barang->jenis }}">
                </div>
                <div class="form-group">
                    <label for="jumlah">Jumlah Barang</label>
                    <input type="text" class="form-control" id="jumlah" name="jumlah" required value="{{ $barang->jumlah }}">
                  </div>
                  <div class="form-group">
                    <label for="tanggal">Tanggal Masuk</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" required value="{{ $barang->tanggal }}">
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