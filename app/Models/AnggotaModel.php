<?php namespace App\Models;

use CodeIgniter\Model;

class AnggotaModel Extends Model 
{

    Protected $table = "anggota";
    protected $primaryKey       = 'id_anggota';

    protected $allowedFields = [
        'id_anggota',
        'nama',
        'jenis_kelamin',
        'tanggal_lahir',
        'alamat',
        'jabatan',
        'tugas',
        'status',
    ];
}