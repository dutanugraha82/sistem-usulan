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
          @foreach ($pesanan as $item)
          <tr>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->alamat }}</td>
            <td>{{ $item->tanggal }}</td>
            <td>{{ $item->status }}</td>
            <td>
              <form action="/pesanan/{{ $item->id }}" method="POST">
                @csrf
                @method('delete')
                <a href="/pesanan/{{ $item->id }}/edit" class="btn btn-warning">Edit</a>
                <input type="submit" class="btn btn-danger" value="Delete">
              </form>
            </td>
            <td>
                <a href="/invoice/{{ $item->id }}" class="btn btn-primary">Invoice</a>
            </td>
          </tr>
          @endforeach
          
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection