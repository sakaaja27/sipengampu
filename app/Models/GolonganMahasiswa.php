<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GolonganMahasiswa extends Model
{
    use HasFactory;

    protected $table = 'golongan_kelas'; 
    
    protected $guarded = ['id'];
}
