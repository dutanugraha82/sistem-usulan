@extends('master')
@section('content')
<div class="card">
    <div class="card-header">
    <h3>Data Pesanan</h3>
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
            <th>Nama</th>
            <th>Alamat</th>
            <th>Tanggal</th>
            <th>Status</th>
            <th>Aksi</th>
            <th>Invoice</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>183</td>
            <td>John Doe</td>
            <td>11-7-2014</td>
            <td><span class="tag tag-success">Preorder</span></td>
            <td>
              <form action="#">
                @csrf
                <a href="#" class="btn btn-warning">Edit</a>
                <input type="submit" class="btn btn-danger" value="Delete">
              </form>
            </td>
            <td>
                <a href="/invoice" class="btn btn-primary">Invoice</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection