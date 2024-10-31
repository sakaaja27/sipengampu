<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DosenRumpun extends Model
{
    use HasFactory;
    protected $table = 'dosen_rumpun';
    protected $guarded = ['id'];

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
}
