<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengampu extends Model
{
    use HasFactory;

    protected $table = 'pengampu';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_tahun_akademik', 'id_prodi', 'id_matkul', 'id_dosen', 'status_dosen'];

    public function tahun()
    {
        return $this->belongsTo(TahunAkademik::class, 'id_tahun_akademik', 'id');
    }

    public function prodi()
    {
        return $this->belongsTo(Prodi::class, 'id_prodi', 'id');
    }

    public function matkul()
    {
        return $this->belongsTo(Matkul::class, 'id_matkul', 'id');
    }

    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'id_dosen', 'id');
    }

    public function pohonilmu()
    {
        return $this->belongsTo(PohonIlmu::class, 'id_pohon', 'id');
    }
    public function cabangilmu()
    {
        return $this->belongsTo(CabangIlmu::class, 'id_cabang', 'id');
    }

    public function golonganmahasiswa(){
        return $this->belongsTo(GolonganMahasiswa::class, 'id_golongan', 'id');
    }

    public function teknisi(){
        return $this->belongsTo(Teknisi::class, 'id_teknisi', 'id');
    }

  
}
