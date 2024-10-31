<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PohonIlmu extends Model
{
    use HasFactory;

    protected $table = 'pohon_ilmu';
    protected $guarded = ['id'];

    public function rumpunilmu()
    {
        return $this->belongsTo(Rumpun::class, 'id_rumpun');
    }

    public function cabangilmu()
    {
        return $this->belongsTo(CabangIlmu::class, 'id_cabang');
    }
}
