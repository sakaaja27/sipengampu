<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdiController extends Controller
{
    function index(){
        $datas = Prodi::all();
        return view('admin.menuProdi.prodi',compact('datas'));

    }

    function store(Request $request){
        $request->validate([
            'nama' => 'required|max:255|unique:prodi,nama',
        ]);
        $data = Prodi::create($request->all());
        $data->save();
        return redirect()->route('prodi.index')->with('success', 'Data Berhasil di Input!');
    }

    function update(Request $request){
        $request->validate([
            'nama' => 'required|unique:prodi,nama,' . $request->id,
        ]);
    
        $data = Prodi::where('id', $request->id)->first();
        $data->nama = $request->input('nama');
        $data->save();
        return redirect()->route('prodi.index')->with('success', 'Data Berhasil di Update!');
    }

    function destroy($id){
        $data = Prodi::where('id', $id)->first();
        $data->delete();
        return redirect()->route('prodi.index')->with('success', 'Data Berhasil di Delete!');
    }
}
