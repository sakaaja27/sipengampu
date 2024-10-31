<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CabangIlmu extends Model
{
    use HasFactory;

    protected $table = 'cabang_ilmu';
    protected $guarded = ['id'];

    public function pohonilmu()
    {
        return $this->belongsTo(PohonIlmu::class, 'id_pohon');
    }
}
