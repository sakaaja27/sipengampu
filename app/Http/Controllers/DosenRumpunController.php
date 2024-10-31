<?php

namespace App\Http\Controllers;

use App\Models\CabangIlmu;
use App\Models\DosenRumpun;
use App\Models\Jabatan;
use App\Models\PohonIlmu;
use Illuminate\Http\Request;

class DosenRumpunController extends Controller
{
    function index(){
        $datas = DosenRumpun::with('dosen','pohonilmu','cabangilmu')->get();
        $jabatan = Jabatan::all();
        $pohon = PohonIlmu::all();
        $cabang = CabangIlmu::all();
        return view('admin.menuDosenRumpun.dosenrumpun',compact('datas','pohon','cabang','jabatan'));
    }
}
