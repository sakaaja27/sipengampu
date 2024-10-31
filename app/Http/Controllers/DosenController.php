<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Jabatan;
use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DosenController extends Controller
{
    function index()  {
        $datas = Dosen::with('prodi','jabatan')->where('status_pegawai', '!=', 1)->get();
        // $datas = DB::table('users')->with('prodi')->where('status_pegawai','!=',1)->get();
        $prodi = Prodi::all();
        $jabatan = Jabatan::all();
        return view('admin.menuDosen.dosen',compact('datas','prodi','jabatan'));
    }

    function store(Request $request){
        $request->validate([
            'id_prodi' => 'required',
            'nip' => 'required|max:50|unique:users,nip',
            'nidn' => 'required|unique:users,nidn',
            'glr_depan'=> 'max:20',
            'nama' => 'required|max:255',
            'glr_belakang' => 'max:20',
            'jabatan' => 'required',
            'bidang_studi' => 'required|max:255',
            'id_pohon' => 'max:20',
            'id_cabang' => 'max:20',
            'perguruan_tinggi' => 'required|max:255',
            'golongan' => 'max:255',
            'status_pegawai' => 'required',
            'password' => 'required'
        ]);
    
        $data = Dosen::create($request->all());
        $data['password'] = md5($data['password']);
        $data->save();
    
        return redirect()->route('dosen.index')->with('success', 'Data Berhasil di Input!');
    }
    

    function update(Request $request, $id) {
        $request->validate([
            'nidn' => 'required|unique:users,nidn,' . $id,
            'nip' => 'required|unique:users,nip,' . $id,
        ]);
    
        $data = Dosen::where('id', $id)->first();
        $data->nidn = $request->input('nidn');
        $data->id_prodi = $request->input('id_prodi');
        $data->nip = $request->input('nip');
        $data->glr_depan = $request->input('glr_depan');
        $data->nama = $request->input('nama');
        $data->glr_belakang = $request->input('glr_belakang');
        $data->bidang_studi = $request->input('bidang_studi');
        $data->perguruan_tinggi = $request->input('perguruan_tinggi');
        $data->golongan = $request->input('golongan');
        $data->jabatan = $request->input('jabatan');
        $data->status_pegawai = $request->input('status_pegawai');
        $data->password = md5($request->input('password'));
        $data->save();
        return redirect()->route('dosen.index')->with('success', 'Data Berhasil di Update!');
    }

    function destroy($id){

        $data = Dosen::where('id', $id)->first();
        $data->delete();
        return redirect()->route('dosen.index')->with('success', 'Data Berhasil di Delete!');
    }
}
