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
            <form>
              <div class="card-body">
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" id="nama" required placeholder="Nama Pemesan" autofocus>
                </div>
                <div class="form-group">
                  <label for="jenis">Alamat</label>
                  <input type="text" class="form-control" id="jenis" placeholder="Alamat Pemesan" required>
                </div>
                <div class="form-group">
                    <label for="nama">Barang</label>
                    <input type="text" class="form-control" id="nama" placeholder="Barang yang dipesan" required>
                  </div>
                  <div class="form-group">
                    <label for="jumlah">Jumlah Barang</label>
                    <input type="text" class="form-control" id="jumlah" placeholder="Jumlah barang yang dipesan" required>
                  </div>
                  <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" placeholder="Tanggal Pesanan" required>
                  </div>

                  <div class="form-group">
                    <label for="status">Status</label>
                   <select name="status" class="custom-select" id="status">
                   <option value="preorder">Pre Order</option>
                   <option value="cash">Cash</option>
                  </select>
                  </div>

                  <div class="form-group">
                    <label for="total">Total</label>
                    <input type="text" class="form-control" id="total" placeholder="Total Harga" required>
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