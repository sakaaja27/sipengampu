<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\Matkul;
use App\Models\Pengampu;
use App\Models\Prodi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    function index(){

        $datas = User::whereNotIn('status_pegawai', [1])->with('jabatan')->get();
        $dosen = User::whereNotIn('status_pegawai', [1])->count();
        $matakuliah = Matkul::count();
        $jabatan = Jabatan::all();
        $total_prodi = Prodi::count();
        $totalpengampu = Pengampu::whereHas('tahun',function($query) {
            $query->where('status', 1);
        })->count();
        $pengampu = Pengampu::whereHas('tahun',function($query) {
            $query->where('status', 1);
        })->get();
    
        // buat chart
        $charts = [];
        foreach ($jabatan as $jbtn) {
            $dosen_jabatan = $datas->where('jabatan', $jbtn->id)->first();
            if ($dosen_jabatan) {
                $nidn_dosen = $datas->where('jabatan', $jbtn->id)->pluck('nama')->toArray();
                $total_sks = Pengampu::whereHas('tahun',function($query) {
                    $query->where('status', 1);
                })->whereHas('dosen',function($query) use ($jbtn) {
                    $query->where('jabatan', $jbtn->id);
                })->with('matkul')->get()->map(function($pengampu) {
                    if ($pengampu->matkul) {
                        return $pengampu->matkul->tot_teori + $pengampu->matkul->tot_praktik;
                    } else {
                        return 0;
                    }
                })->toArray();
                // dd($total_sks);
               
                $charts[] = [
                    'id' => 'myChart'.$jbtn->nama,
                    'data' => [
                        'labels' => $nidn_dosen,
                        'datasets' => [
                            [
                                'label' => $jbtn->nama,
                                'data' => $total_sks, 
                                'backgroundColor' => [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(255, 159, 64, 0.2)',
                                    'rgba(255, 205, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(201, 203, 207, 0.2)'
                                  ],
                                  'borderColor' => [
                                    'rgb(255, 99, 132)',
                                    'rgb(255, 159, 64)',
                                    'rgb(255, 205, 86)',
                                    'rgb(75, 192, 192)',
                                    'rgb(54, 162, 235)',
                                    'rgb(153, 102, 255)',
                                    'rgb(201, 203, 207)'
                                  ],
                                'borderWidth' => 1
                            ]
                        ]
                    ],
                    'options' => [
                        'scales' => [
                            'y' => [
                                'beginAtZero' => true
                            ]
                        ]
                    ],
                    'nama' => $jbtn->nama
                ];
            }
        }
    
        return view('admin.dashboard',compact('datas','dosen','matakuliah','jabatan','total_prodi','totalpengampu','pengampu', 'charts'));
    }

    
}
