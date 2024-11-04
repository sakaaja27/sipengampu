<?php

namespace App\Http\Controllers;

use App\Models\TahunAkademik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TahunAkademikController extends Controller
{
    function index()
    {
        $datas = TahunAkademik::all();
        return view('admin.menuTahunAkademik.tahunakademik', compact('datas'));
    }

    function store(Request $request)
    {
        $request->validate([
            'tahun_ajaran' => 'required|unique:tahun_akademik,tahun_ajaran',
            'keterangan' => 'required',
            'status' => 'required',

        ]);
        $data = TahunAkademik::create($request->all());
        $data->save();
        return redirect()->route('tahunakademik.index')->with('success', 'Data Berhasil di Input!');
    }

    function update(Request $request,$id)
    {
        $request->validate([
            'tahun_ajaran' => 'required|unique:tahun_akademik,tahun_ajaran,' . $id,
        ]);
        $data = TahunAkademik::where('id', $request->id)->first();
        $data->tahun_ajaran = $request->input('tahun_ajaran');
        $data->keterangan = $request->input('keterangan');
        $data->status = $request->input('status');
        $data->save();
        return redirect()->route('tahunakademik.index')->with('success', 'Data Berhasil di Update!');
    }

    function destroy($id)
    {
        $data = TahunAkademik::where('id', $id)->first();
        $data->delete();
        return redirect()->route('tahunakademik.index')->with('success', 'Data Berhasil di Delete!');
    }

    public function getData(Request $request)
    {
        $like = [];
        $filter = [];
        if ($request->has('term')) $like['keterangan'] = $request->input('term');
        if ($request->has('id')) $filter['id'] = $request->input('id');
        $data = TahunAkademik::where($filter)->whereLike($like)->get();
        return response()->json([
            'success' => true,
            'message' => '',
            'data' => $data
        ], 200);
    }
}
