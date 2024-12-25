<?php

namespace App\Http\Controllers;

use App\Models\GolonganMahasiswa;
use Illuminate\Http\Request;

class GolonganMahasiswaController extends Controller
{
    //
    public function index(){
        $datas = GolonganMahasiswa::all();
        return view('admin.golongan.golongan_mahasiswa',compact('datas'));
    }

    public function store(Request $request){
        $request->validate([
            'nama' => 'required|max:255|unique:golongan_kelas,nama',
        ]);

        $data = GolonganMahasiswa::create($request->all());
        $data->save();
        return redirect()->route('golongan_mahasiswa.index')->with('success', 'Data Berhasil di Input!');
    }
    public function update(Request $request,$id){
        $request->validate([
            'nama' => 'required|unique:golongan_kelas,nama,' . $id,
        ]);
    
        $data = GolonganMahasiswa::where('id', $id)->first();
        $data->nama = $request->input('nama');
        $data->save();
        return redirect()->route('golongan_mahasiswa.index')->with('success', 'Data Berhasil di Update!');

    }

    public function destroy($id){
        $data = GolonganMahasiswa::where('id', $id)->first();
        $data->delete();
        return redirect()->route('golongan_mahasiswa.index')->with('success', 'Data Berhasil di Delete!');;
    }
}
