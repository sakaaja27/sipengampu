<?php

namespace App\Http\Controllers;

use App\Models\CabangIlmu;
use App\Models\PohonIlmu;
use App\Models\Rumpun;
use Illuminate\Http\Request;

class RumpunController extends Controller
{
    //

    function index()
    {
        $datas = Rumpun::where('id', '!=', 6)->get();
        return view('admin.menuRumpun.rumpun', compact('datas'));
    }

    function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|unique:rumpun_ilmu,nama',
        ]);
        $data = Rumpun::create($request->all());
        $data->save();
        return redirect()->route('rumpunilmu.index')->with('success', 'Data Berhasil di Input!');
    }

    function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|unique:rumpun_ilmu,nama,' . $id,
        ]);
        $data = Rumpun::where('id', $id)->first();
        $data->nama = $request->input('nama');
        $data->save();
        return redirect()->route('rumpunilmu.index')->with('success', 'Data Berhasil di Update!');
    }

    function destroy($id)
    {
        $data = Rumpun::where('id', $id)->first();
        $data->delete();
        return redirect()->route('rumpunilmu.index')->with('success', 'Data Berhasil di Hapus!');
    }

    // Pohon Ilmu
    function indexpohon()
    {
        $datas = PohonIlmu::with('rumpunilmu')
            ->where('id_rumpun', '!=', 6) // Menambahkan kondisi untuk mengecualikan id_rumpun = 6
            ->get();
        $rumpun = Rumpun::all();
        return view('admin.menuRumpun.pohonilmu', compact('datas', 'rumpun'));
    }

    function storepohon(Request $request)
    {
        $request->validate([
            'id_rumpun' => 'required',
            'nama' => 'required'
        ]);
        $data = PohonIlmu::create($request->all());
        $data->save();
        return redirect()->route('pohonilmu.index')->with('success', 'Data Berhasil di Input!');
    }

    function updatepohon(Request $request, $id)
    {
        $request->validate([
            'id_rumpun' => 'required',
            'nama' => 'required'
        ]);
        $data = PohonIlmu::where('id', $id)->first();
        $data->id_rumpun = $request->input('id_rumpun');
        $data->nama = $request->input('nama');
        $data->save();
        return redirect()->route('pohonilmu.index')->with('success', 'Data Berhasil di Update!');
    }

    function destroypohon($id)
    {
        $data = PohonIlmu::where('id', $id)->first();
        $data->delete();
        return redirect()->route('pohonilmu.index')->with('success', 'Data Berhasil di Hapus!');
    }

    // Cabang Ilmu
    function indexcabang() {
        $datas = CabangIlmu::with('pohonilmu')
                   ->where('id_pohon', '!=', 10) // Menambahkan kondisi untuk mengecualikan id_pohon = 10
                   ->get();
        $pohon = PohonIlmu::all();
        $rumpun = Rumpun::all();
        return view('admin.menuRumpun.cabangilmu', compact('datas', 'pohon', 'rumpun'));
    }

    function storecabang(Request $request)
    {
        $request->validate([
            'id_pohon' => 'required',
            'nama' => 'required'
        ]);
        $data = CabangIlmu::create($request->all());
        $data->save();
        return redirect()->route('cabangilmu.index')->with('success', 'Data Berhasil di Input!');
    }

    function updatecabang(Request $request, $id)
    {
        $request->validate([
            'id_pohon' => 'required',
            'nama' => 'required'
        ]);
        $data = CabangIlmu::where('id', $id)->first();
        $data->id_pohon = $request->input('id_pohon');
        $data->nama = $request->input('nama');
        $data->save();
        return redirect()->route('cabangilmu.index')->with('success', 'Data Berhasil di Update!');
    }

    function destroycabang($id)
    {
        $data = CabangIlmu::where('id', $id)->first();
        $data->delete();
        return redirect()->route('cabangilmu.index')->with('success', 'Data Berhasil di Hapus!');
    }
}
