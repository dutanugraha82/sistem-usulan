@extends('master')
@section('content')
<div class="card">
    <div class="card-header">
    <h3>Laporan Barang Keluar</h3>
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
            <th>Jumlah Keluar</th>
            <th>Tanggal Keluar</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($barangKeluar as $item)
          <tr>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->jumlah }}</td>
            <td>{{ $item->tanggal }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection