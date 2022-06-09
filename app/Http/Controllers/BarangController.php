<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    public function index(){
        $barang = DB::table('barang')->get();

        return view('barang.data-barang', compact('barang'));
    }

    public function input(){
        return view('barang.input-barang');
    }

    public function store(Request $request){
        $request->validate([
            'nama' => 'required',
            'jenis' => 'required',
            'jumlah' => 'required',
            'tanggal' => 'required',
        ],[
            'nama.required' => 'Nama harus diisi',
            'jenis.required' => 'Jenis harus diisi',
            'jumlah.required' => 'Jumlah harus diisi',
            'tanggal.required' => 'Tanggal harus diisi',
        ]);

        DB::table('barang')->insert([
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'jumlah' => $request->jumlah,
            'tanggal' => $request->tanggal,
        ]);
        return redirect('/');
    }

    public function edit($id){
        $barang = DB::table('barang')->where('id', $id)->first();
        return view('barang.edit-barang', compact('barang'));
    }

    public function update($id, Request $request){
        $request->validate([
            'nama' => 'required',
            'jenis' => 'required',
            'jumlah' => 'required',
            'tanggal' => 'required',
        ]);
        DB::table('barang')->where('id',$id)->update([
            'nama' => $request['nama'],
            'jenis' => $request['jenis'],
            'jumlah' => $request['jumlah'],
            'tanggal' => $request['tanggal'],
        ]);
        return redirect('/');
    }

    public function delete($id){
        DB::table('barang')->where('id', '=', $id)->delete();
        return redirect('/');
    }
}
