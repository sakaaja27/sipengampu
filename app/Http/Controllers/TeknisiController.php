<?php

namespace App\Http\Controllers;

use App\Models\Teknisi;
use Illuminate\Http\Request;

class TeknisiController extends Controller
{
    public function index()
    {
        $datas = Teknisi::all();
        return view('admin.teknisi.teknisi', compact('datas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required|max:255|unique:teknisi,nip',
            'nama' => 'required|max:255',
            'gelar' => 'required',
            'ruangan' => 'required',
        ]);

        $data = Teknisi::create($request->all());
        $data->save();
        return redirect()->route('teknisi.index')->with('success', 'Data Berhasil di Input!');
    }

    public function update(Request $request, $id) {
        $request->validate([
            'nip' => 'required|unique:teknisi,nip,' . $id,
        ]);
        $data = Teknisi::where('id', $id)->first();
        $data->nip = $request->input('nip');
        $data->nama = $request->input('nama');
        $data->gelar = $request->input('gelar');
        $data->ruangan = $request->input('ruangan');
        $data->save();
        return redirect()->route('teknisi.index')->with('success', 'Data Berhasil di Update!');
    }

    public function destroy($id) {
        $data = Teknisi::where('id', $id)->first();
        $data->delete();
        return redirect()->route('teknisi.index')->with('success', 'Data Berhasil di Delete!');
    }
}
