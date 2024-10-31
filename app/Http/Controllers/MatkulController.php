<?php

namespace App\Http\Controllers;

use App\Models\Matkul;
use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MatkulController extends Controller
{
    function index(){
        $datas = Matkul::with('prodi')->get();
        // $datas = DB::table('view_matakuliah')->get();
        $prodi = Prodi::all();
        
        
        return view('admin.menuMatkul.matkul',compact('datas','prodi'));
    }

    function store(Request $request){
        $request->validate([
            'kode' => 'unique:matkul,kode|max:20',
            'nama' => 'required|max:255',
            'id_prodi' => 'required',
            'semester' => 'required',
            'status' => 'required',
            'tot_teori' => 'required',
            'tot_praktik' => 'required',
        ]);
        $data = Matkul::create($request->all());
        $data->save();
        return redirect()->route('matakuliah.index')->with('success', 'Data Berhasil di Input!');
    }

    function update(Request $request) {
        $request->validate([
            'kode' => 'required|unique:matkul,kode,' . $request->id,
        ]);
    
        $data = Matkul::where('id', $request->id)->first();
        $data->kode = $request->input('kode');
        $data->nama = $request->input('nama');
        $data->prodi_id = $request->input('prodi_id');
        $data->semester = $request->input('semester');
        $data->status = $request->input('status');
        $data->tot_teori = $request->input('tot_teori');
        $data->tot_praktik = $request->input('tot_praktik');
        $data->save();
        return redirect()->route('matakuliah.index')->with('success', 'Data Berhasil di Update!');
    }

    function destroy($id){
        $data = Matkul::where('id', $id)->first();
        $data->delete();
        return redirect()->route('matakuliah.index')->with('success', 'Data Berhasil di Delete!');;
    }
}
