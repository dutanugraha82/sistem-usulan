@extends('master')
@section('content')
<div class="card">
    <div class="card-header">
    <h3>Data Penjualan</h3>
      <div class="card-tools">
        <div class="input-group input-group-sm" style="width: 150px;">
        </div>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0" style="height: 300px;">
      <table class="table table-head-fixed text-nowrap">
        <thead>
          <tr>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Tanggal Penjualan</th>
            <th>Nominal</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($penjualan as $item)
            <tr>
                <td>{{ $item->barang }}</td>
                <td>{{ $item->jumlah }}</td>
                <td>{{ $item->tanggal }}</td>
                <td>Rp {{ $item->total }}</td>
              </tr>
            @endforeach
          
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection