<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Jabatan;
use App\Models\Prodi;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index()
    {
        // $datas = DB::table('v_dosen')->whereNotIn('status_pegawai', [5])->get();
        $datas = Dosen::with('prodi')
            ->whereNotIn('status_pegawai', [5])
            ->orderBy('id', 'desc') // Descending berdasarkan ID
            ->get();
        $prodi = Prodi::all();
        $jabatan = Jabatan::all();
        // dd($datas);
        return view('admin.menuAdmin.admin', compact('datas', 'prodi', 'jabatan'));
    }

    function store(Request $request)
    {
        $request->validate([
            'id_prodi' => 'required',
            'nip' => 'required|max:50|unique:users,nip',
            'nidn' => 'required|unique:users,nidn',
            'glr_depan' => 'max:20',
            'nama' => 'required|max:255',
            'glr_belakang' => 'max:20',
            'bidang_studi' => 'required',
            'perguruan_tinggi' => 'required',
            'jabatan' => 'required',
            'golongan' => 'max:255',
            'status_pegawai' => 'required',
            'password' => 'required'
        ]);

        $data = Dosen::create($request->all());
        $data['password'] = md5($data['password']);
        $data->save();

        return redirect()->route('admin.index')->with('success', 'Data Berhasil di Input!');
    }

    function edit(Request $request, $id)
    {
        $data = Dosen::where('id', $id)->first();
        $prodi = Prodi::all();
        $jabatan = Jabatan::all();
        return view('admin.MenuAdmin.edit', compact('data', 'prodi', 'jabatan'));
    }

    function update(Request $request, $id)
    {
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
        return redirect()->route('admin.index')->with('success', 'Data Berhasil di Update!');
    }

    function destroy($id)
    {

        $data = Dosen::where('id', $id)->first();
        $data->delete();
        return redirect()->route('admin.index')->with('success', 'Data Berhasil di Delete!');
    }
}
