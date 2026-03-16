<?php

namespace App\Http\Controllers;
use App\Models\Mtoko;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class Ctoko extends Controller
    {
    public function tampil()
    {
 $toko = Mtoko::all();
 return view('toko.tampil', compact('toko'));
   }
   public function tambah()
    {
 return view('toko.tambah');
    }

    public function simpan(Request $request)
    {
            $request->validate([
                'nama_toko' => 'required',
                'alamat' => 'required', // Pastikan alamat wajib diisi
                'nomor_telepon' => 'required'
            ]);

        $toko = new Mtoko();
        $toko ->nama_toko    =$request->nama_toko;
        $toko ->alamat  =$request->alamat;
        $toko ->nomor_telepon  =$request->nomor_telepon;
        $toko->save();

        return redirect()->route('toko.tampil')->with('status', ['judul' => 'Berhasil', 'pesan' => 'Data berhasil disimpan', 'icon' => 'success']);
    }
    public function edit (string $id)
    {
        $toko = Mtoko::where('id', $id)->first();
        return view ('toko.edit', compact('toko'));
    }

    public function simpan_edit(Request $request, string $id)
    {
    
        $toko = Mtoko::where('id', $id)->first();

        $toko->nama_toko     = $request->nama_toko;
        $toko->alamat   = $request->alamat;
        $toko->nomor_telepon   = $request->nomor_telepon;
        $toko->save();
    
        return redirect()->route('toko.tampil')->with('success', 'Data berhasil diperbarui');
    }
    public function hapus($id)
    {
        $toko = Mtoko::where('id', $id)->first();

        $toko->delete();
        return redirect()->route('toko.tampil')->with('success', 'Data Toko berhasil dihapus');
    }
};