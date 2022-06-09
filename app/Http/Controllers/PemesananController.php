<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PemesananController extends Controller
{
    public function index(){
        $pesanan = DB::table('pesanan')->get();
        return view('pemesanan.data-pesanan', compact('pesanan'));
    }

    public function invoice($id){
        $pesanan = DB::table('pesanan')->where('id',$id)->first();
        return view('pemesanan.invoice', compact('pesanan'));
    }

    public function input(){
        return view('pemesanan.input-pesanan');
    }

    public function store(Request $request){
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'barang' => 'required',
            'jumlah' => 'required',
            'tanggal' => 'required',
            'status' => 'required',
            'total' => 'required',
        ],[
            'nama' => 'Nama harus diisi',
            'alamat' => 'Alamat harus diisi',
            'barang' => 'Barang harus diisi',
            'jumlah' => 'Jumlah harus diisi',
            'tanggal' => 'Tanggal harus diisi',
            'status' => 'Status harus diisi',
            'total' => 'Total harus diisi',
        ]);
        DB::table('pesanan')->insert([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'barang' => $request->barang,
            'jumlah' => $request->jumlah,
            'tanggal' => $request->tanggal,
            'status' => $request->status,
            'total' => $request->total,
        ]);
        return redirect('/data-pesanan');
    }

    public function edit($id){
        $pesanan = DB::table('pesanan')->where('id', $id)->first();
        return view('pemesanan.edit-pesanan', compact('pesanan'));
    }

    public function update($id, Request $request){
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'barang' => 'required',
            'jumlah' => 'required',
            'tanggal' => 'required',
            'status' => 'required',
            'total' => 'required',
        ],[
            'nama' => 'Nama harus diisi',
            'alamat' => 'Alamat harus diisi',
            'barang' => 'Barang harus diisi',
            'jumlah' => 'Jumlah harus diisi',
            'tanggal' => 'Tanggal harus diisi',
            'status' => 'Status harus diisi',
            'total' => 'Total harus diisi',
        ]);
        

        DB::table('pesanan')->where('id', $id)->update([
            'nama'=>$request['nama'],
            'alamat'=>$request['alamat'],
            'barang'=>$request['barang'],
            'jumlah'=>$request['jumlah'],
            'tanggal'=>$request['tanggal'],
            'status'=>$request['status'],
            'total'=>$request['total'],
        ]);
        return redirect('/data-pesanan');
    }

    public function delete($id){
        DB::table('pesanan')->where('id', '=', $id)->delete();
        return redirect('/data-pesanan');
    }
}
