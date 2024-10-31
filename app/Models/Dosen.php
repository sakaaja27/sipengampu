<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $table = 'users'; // nama tabel

    protected $fillable = [
        'id_prodi',
        'nip',
        'nama',
        'nidn',
        'glr_depan',
        'glr_belakang',
        'bidang_studi',
        'perguruan_tinggi',
        'golongan',
        'jabatan',
        'status_pegawai',
        'password',
        // atribut lainnya
    ];

    public function pengampu(): HasMany
    {
        return $this->hasMany(Pengampu::class, 'id_dosen', 'id');
    }
    public function prodi()
    {
        return $this->belongsTo(Prodi::class, 'id_prodi');
    }

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'jabatan', 'id');
    }
    public function pohonilmu()
    {
        return $this->belongsTo(PohonIlmu::class, 'id_pohon', 'id');
    }

    public function cabangilmu()
    {
        return $this->belongsTo(CabangIlmu::class, 'id_cabang', 'id');
    }
}
