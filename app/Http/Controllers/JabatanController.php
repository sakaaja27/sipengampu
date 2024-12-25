<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class JabatanController extends Controller
{
    function index(){
        $datas = Jabatan::all();
        return view('admin.menuJabatan.jabatan',compact('datas'));
    }

    
    function store(Request $request){
        $request->validate([
            'nama' => 'required|max:255|unique:jabatan,nama',
            'nominal' => 'required'
        ]);

        $data = Jabatan::create($request->all());
        $data->save();
        return redirect()->route('jabatan.index')->with('success', 'Data Berhasil di Input!');
    }

    function update(Request $request, $id){
        $request->validate([
            'nama' => 'required|unique:jabatan,nama,' . $id,
        ]);
    
        $data = Jabatan::where('id', $id)->first();
        $data->nama = $request->input('nama');
        $data->nominal = $request->input('nominal');
        $data->save();
        return redirect()->route('jabatan.index')->with('success', 'Data Berhasil di Update!');
    }

    function destroy ($id){

        $data = Jabatan::where('id', $id)->first();
        $data->delete();
        return redirect()->route('jabatan.index')->with('success', 'Data Berhasil di Delete!');;
    }
}
