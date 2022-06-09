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
            <th>Jumlah Barang</th>
            <th>Tanggal Masuk</th>
            <th class="text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            @foreach ($barang as $item)
            <td>{{ $item->nama }}</td>
            <td>{{ $item->jenis }}</td>
            <td>{{ $item->jumlah }}</td>
            <td>{{ $item->tanggal }}</td>
            <td>
              <form action="/barang/{{ $item->id }}" class="text-center" method="POST">
              @csrf
              @method('delete')
              <a href="/barang/{{ $item->id }}/edit" class="btn btn-warning">Edit</a>
              <input type="submit" class="btn btn-danger btn-sm" value="Delete">
          </form>
        </td>
            @endforeach
            
          </tr>
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection