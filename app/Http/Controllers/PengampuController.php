<?php

namespace App\Http\Controllers;

use App\Models\CabangIlmu;
use App\Models\Dosen;
use App\Models\Matkul;
use App\Models\Pengampu;
use App\Models\PohonIlmu;
use App\Models\Prodi;
use App\Models\TahunAkademik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengampuController extends Controller
{
    function index()
    {
        $datas = Pengampu:: whereHas('tahun', function ($query) {
            $query->where('status', 1);
        })->get();
        
        
        // $datas = DB::table('view_pengampu_')->where('status_ajaran','=', 1)->get(); 
        $tahun = TahunAkademik::all();
        // $pohon = PohonIlmu::all();
        // $cabangilmu = CabangIlmu::all();
        $datatahun = TahunAkademik::all();
        $dataprodi = Prodi::all();
        $datamatkul = Matkul::all();
        $datadosen = Dosen::all();
        // dd($tahun->toArray());
        $prodi = Prodi::all();
        $matkul = Matkul::all();
        $dosen = Dosen::all();

        return view('admin.menuPengampu.pengampu', compact('datas', 'tahun', 'prodi', 'matkul', 'dosen','datatahun','dataprodi','datamatkul','datadosen'));
    }

    function store(Request $request)
    {
        $request->validate([
            'id_tahun_akademik' => 'required',
            'id_prodi' => 'required',
            'kode_matkul' => 'required',
            'nip_dosen' => 'required',
            'status_dosen' => 'required',
        ]);

        $pengampu = new Pengampu();
        $pengampu->id_tahun_akademik = $request->id_tahun_akademik;
        $pengampu->id_prodi = $request->id_prodi;
        $pengampu->id_matkul = $request->kode_matkul;
        $pengampu->id_dosen = $request->nip_dosen;
        $pengampu->status_dosen = $request->status_dosen;
        $pengampu->save();

        return redirect()->route('pengampu.index')->with('success', 'Data Berhasil di Input!');
    }

    public function update(Request $request, $id)
    {
        // return $request->all();
        $data = Pengampu::where('id', $request->id)->first();
        $data->id_tahun_akademik = $request->input('id_tahun_akademik');
        $data->id_prodi = $request->input('id_prodi');
        $data->id_matkul = $request->input('id_matkul');
        $data->id_dosen = $request->input('id_dosen');
        $data->status_dosen = $request->input('status_dosen');
        $data->save();
        return redirect()->route('pengampu.index')->with('success', 'Data Berhasil di Update!');
    }

    // function update(Request $request){
    //     $data = Pengampu::where('id', $request->id)->first();
    //     $data->id_tahun_akademik = $request->input('id_tahun_akademik');
    //     $data->id_prodi = $request->input('id_prodi');
    //     $data->id_matkul = $request->input('id_matkul');
    //     $data->id_dosen = $request->input('id_dosen');
    //     $data->status_dosen = $request->input('status_dosen');
    //     $data->save();
    //     return redirect()->route('pengampu.index')->with('success', 'Data Berhasil di Update!');
    // }

    function destroy(Request $request, $id)
    {
        $data = Pengampu::where('id', $request->id)->first();
        $data->delete();
        return redirect()->route('pengampu.index')->with('success', 'Data Berhasil di Hapus!');
    }
}
