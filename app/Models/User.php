<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Exports\UsersExport;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Maatwebsite\Excel\Facades\Excel;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_prodi',
        'nip',
        'nama',
        'nidn',
        'glr_depan',
        'glr_belakang',
        'golongan',
        'jabatan',
        'status_pegawai',
        'password',
        // atribut lainnya
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'jabatan', 'id');
    }

    public function export(){
        return Excel::download(new UsersExport,'user.xlsx');
    }
}
