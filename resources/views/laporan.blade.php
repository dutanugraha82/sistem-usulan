@extends('master')
@section('content')
<div class="card">
    <div class="card-header">
    <h3>Data Barang</h3>
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
            <th>Jenis Barang</th>
            <th>Tanggal</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>183</td>
            <td>John Doe</td>
            <td>11-7-2014</td>
            <td><span class="tag tag-success">Approved</span></td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection