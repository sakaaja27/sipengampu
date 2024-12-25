<?php

namespace App\Http\Controllers;

use App\Exports\RekapExport;
use App\Models\CabangIlmu;
use App\Models\Dosen;
use App\Models\Jabatan;
use App\Models\Matkul;
use App\Models\Pengampu;
use App\Models\PohonIlmu;
use App\Models\Prodi;
use App\Models\Rumpun;
use Illuminate\Support\Facades\DB;
use App\Models\TahunAkademik;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class RekapController extends Controller
{


    public function index(Request $request)
    {
        $tahun_id = $request->input('tahun_akademik');
        $prodi_id = $request->input('prodi');

        $query = Pengampu::with('matkul', 'prodi', 'dosen', 'tahun', 'pohonilmu', 'cabangilmu');

        // Filter Tahun Akademik
        if ($tahun_id) {
            $query->whereHas('tahun', function ($q) use ($tahun_id) {
                $q->where('id', $tahun_id);
            });
        }

        // Filter Prodi
        if ($prodi_id) {
            $query->whereHas('prodi', function ($q) use ($prodi_id) {
                $q->where('id', $prodi_id);
            });
        }

        $pengampu = $query->get();

        // $pengampu = Pengampu::with('matkul', 'prodi', 'dosen', 'tahun', 'pohonilmu', 'cabangilmu')
        //     ->whereHas('tahun', function ($query) use ($tahun_id) {
        //         $query->where('id', $tahun_id);
        //     })
        //     ->when($prodi_id, function ($query) use ($prodi_id) {
        //         return $query->whereHas('prodi', function ($subQuery) use ($prodi_id) {
        //             $subQuery->where('id', $prodi_id);
        //         });
        //     })
        //     ->get();

        $tahun = TahunAkademik::all();
        $datatahun = TahunAkademik::all();
        $munculprodi = Prodi::all();
        $jabatan = Jabatan::all();
        $datamatkul = Matkul::all();
        $datadosen = Dosen::all();
        // dd($tahun->toArray());
        $prodi = Prodi::all();
        $matkul = Matkul::all();
        $dosen = Dosen::all();
        $pohonilmu = PohonIlmu::all();
        $rumpun = Rumpun::all();
        $cabangilmu = CabangIlmu::all();

        // dd($pengampu);

        // retrieve dosen data with pengampu relationship

        // card bawah
        $total_mk = [];
        $hasil = DB::table('pengampu')
            ->join('users', 'pengampu.id_dosen', '=', 'users.id')
            ->join('matkul', 'pengampu.id_matkul', '=', 'matkul.id')
            ->join('prodi', 'matkul.prodi_id', '=', 'prodi.id')
            ->select('users.nip', 'prodi.nama as nama_prodi', DB::raw('COUNT(pengampu.id_matkul) as total_matkul'))
            ->groupBy('users.nip', 'prodi.nama')
            ->get();

        foreach ($hasil as $item) {
            if (!isset($total_mk[$item->nip])) {
                $total_mk[$item->nip] = [];
            }
            $total_mk[$item->nip][$item->nama_prodi] = $item->total_matkul;
        }

        $total_sks_teori = [];
        $hasil_teori = DB::table('pengampu')
            ->join('users', 'pengampu.id_dosen', '=', 'users.id')
            ->join('matkul', 'pengampu.id_matkul', '=', 'matkul.id')
            ->join('prodi', 'matkul.prodi_id', '=', 'prodi.id')
            ->select('users.nip', 'prodi.nama as nama_prodi', DB::raw('SUM(matkul.tot_teori) as total_sks_teori'))
            ->groupBy('users.nip', 'prodi.nama')
            ->get();

        foreach ($hasil_teori as $item) {
            if (!isset($total_sks_teori[$item->nip])) {
                $total_sks_teori[$item->nip] = [];
            }
            $total_sks_teori[$item->nip][$item->nama_prodi] = $item->total_sks_teori;
        }

        $total_sks_praktik = [];
        $hasil_praktik = DB::table('pengampu')
            ->join('users', 'pengampu.id_dosen', '=', 'users.id')
            ->join('matkul', 'pengampu.id_matkul', '=', 'matkul.id')
            ->join('prodi', 'matkul.prodi_id', '=', 'prodi.id')
            ->select('users.nip', 'prodi.nama as nama_prodi', DB::raw('SUM(matkul.tot_praktik) as total_sks_praktik'))
            ->groupBy('users.nip', 'prodi.nama')
            ->get();

        foreach ($hasil_praktik as $item) {
            if (!isset($total_sks_praktik[$item->nip])) {
                $total_sks_praktik[$item->nip] = [];
            }
            $total_sks_praktik[$item->nip][$item->nama_prodi] = $item->total_sks_praktik;
        }

        $total_sks_teori_praktik = [];
        foreach ($total_sks_teori as $nip => $prodi_sks_teori) {
            foreach ($prodi_sks_teori as $nama_prodi => $total_sks) {
                if (isset($total_sks_praktik[$nip][$nama_prodi])) {
                    $total_sks_teori_praktik[$nip][$nama_prodi] = $total_sks + $total_sks_praktik[$nip][$nama_prodi];
                } else {
                    $total_sks_teori_praktik[$nip][$nama_prodi] = $total_sks;
                }
            }
        }
        $tot_kjm_mk = [];
        foreach ($total_mk as $nip => $prodi_sks_teori) {
            foreach ($prodi_sks_teori as $nama_prodi => $total_sks) {
                $tot_kjm_mk[$nip][$nama_prodi] = $tot_kjm_mk[$nip][$nama_prodi] ?? 0 + $total_sks;
            }
        }

        $tot_kjm_teori = [];
        foreach ($total_sks_teori as $nip => $prodi_sks_teori) {
            foreach ($prodi_sks_teori as $nama_prodi => $total_sks) {
                $tot_kjm_teori[$nip][$nama_prodi] = $tot_kjm_teori[$nip][$nama_prodi] ?? 0 + $total_sks;
            }
        }



        $tot_kjm_praktik = [];
        foreach ($total_sks_praktik as $nip => $prodi_sks_teori) {
            foreach ($prodi_sks_teori as $nama_prodi => $total_sks) {
                $tot_kjm_praktik[$nip][$nama_prodi] = $tot_kjm_praktik[$nip][$nama_prodi] ?? 0 + $total_sks;
            }
        }

        $tot_kjm_teori_praktik = [];
        foreach ($total_sks_teori_praktik as $nip => $prodi_sks_teori) {
            foreach ($prodi_sks_teori as $nama_prodi => $total_sks) {
                $tot_kjm_teori_praktik[$nip][$nama_prodi] = $tot_kjm_teori_praktik[$nip][$nama_prodi] ?? 0 + $total_sks;
            }
        }


        $total_kjm_sks_teori = [];
        foreach ($total_sks_teori as $nip => $prodi_sks_teori) {
            foreach ($prodi_sks_teori as $nama_prodi => $total_sks) {
                $total_kjm_sks_teori[$nip][$nama_prodi] = ($total_sks <= 4 ? 0 : ($total_sks > 4 && $total_sks <= 8 ? $total_sks - 4 : 4));
            }
        }
        $total_kjm_sks_praktik = [];
        foreach ($total_sks_praktik as $nip => $prodi_sks_praktik) {
            foreach ($prodi_sks_praktik as $nama_prodi => $total_sks) {
                $total_kjm_sks_praktik[$nip][$nama_prodi] = ($total_sks <= 8 ? 0 : ($total_sks > 8 && $total_sks <= 12 ? $total_sks - 8 : 4));
            }
        }

        $total_uang_teori = [];
        foreach ($total_kjm_sks_teori as $nip => $nama_prodi_values) {
            foreach ($nama_prodi_values as $nama_prodi => $total_sks) {
                foreach ($jabatan as $jbtn) {
                    $total_uang_teori[$nip][$nama_prodi] = $total_sks * $jbtn->nominal * 12;
                }
            }
        }
        $total_uang = [];
        // dd($total_uang_teori);
        return view('admin.menuRekap.rekap', compact(
            'munculprodi',
            'matkul',
            'munculprodi',
            'tahun',
            'jabatan',
            'total_mk',
            'total_sks_teori',
            'total_sks_praktik',
            'total_sks_teori_praktik',
            'tot_kjm_mk',
            'tot_kjm_teori',
            'tot_kjm_praktik',
            'tot_kjm_teori_praktik',
            'pengampu',
            'total_kjm_sks_teori',
            'total_kjm_sks_praktik',
            'total_uang_teori',
            'pohonilmu',
            'cabangilmu',
            'rumpun'
        ));
        // return response()->json($pengampu);
    }

    // public function index(Request $request)
    // {
    //     $pengampu = Pengampu::with('matkul', 'prodi', 'dosen', 'tahun')->whereHas('tahun', function ($query) {
    //         $query->where('id', 1);
    //     })->get();

    //     // Return the updated pengampu data as a view or JSON response
    //     return view('admin.menuRekap.rekap-pengampu', compact('pengampu'));
    //     // return response()->json($pengampu);
    // }

    public function export(Request $request)
    {
        return Excel::download(
            new RekapExport($request->tahun_akademik, $request->prodi),
            'rekap_data' . date('Y-m-d') . '.xlsx'
        );
    }
}
