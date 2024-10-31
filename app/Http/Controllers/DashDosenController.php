<?php

namespace App\Http\Controllers;

use App\Models\CabangIlmu;
use App\Models\Dosen;
use App\Models\DosenRumpun;
use App\Models\Jabatan;
use App\Models\Pengampu;
use App\Models\PohonIlmu;
use App\Models\Rumpun;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashDosenController extends Controller
{

    public function index()
    {
        $datas = Dosen::with('pengampu', 'prodi', 'jabatan', 'pohonilmu.rumpunilmu', 'cabangilmu')
            ->where('id', Auth::user()->id)
            ->get();

        $pohonilmu = PohonIlmu::with('cabangilmu')->get();
      
        // $cabangilmu = CabangIlmu::with('pohonilmu')->get();
        $cabangilmu = CabangIlmu::all();
        $jabatan = Jabatan::all();
        $rumpun = Rumpun::all();
        // Return the view with the user object and additional data
        return view('dosen.dashboard', compact('datas', 'pohonilmu', 'cabangilmu', 'rumpun', 'jabatan'));
    }

    function update(Request $request)
    {
        //    hanya update id_pohon dan id_cabang
        $request->validate([
            'id_pohon' => 'required',
            'id_cabang' => 'required'
        ]);
        $dosen = Dosen::find(Auth::user()->id);
        $dosen->id_pohon = $request->input('id_pohon');
        $dosen->id_cabang = $request->input('id_cabang');
        $dosen->save();
        return redirect()->route('dashboard.dosen')->with('success', 'Data Berhasil di Update!');
    }

    // Metode untuk mengambil Pohon Ilmu berdasarkan Rumpun Ilmu
    public function getPohonIlmu($rumpunId)
    {
        return response()->json(PohonIlmu::where('id_rumpun', $rumpunId)->get());
    }

    // Metode untuk mengambil Cabang Ilmu berdasarkan Pohon Ilmu
    public function getCabangIlmu($pohonId)
    {
        return response()->json(CabangIlmu::where('id_pohon', $pohonId)->get());
    }
}
