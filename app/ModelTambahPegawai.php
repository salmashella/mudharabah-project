<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelTambahPegawai extends Model
{
    //
    protected $table = 'tb_pegawai';
    protected $fillable = ['Id_Pegawai','Nama_Pegawai', 'Alamat', 'Jabatan', 'Jenkel', 'No_Telp','Agama',
        'Tempat_Lahir','Tanggal_Lahir','Status', 'Username', 'Password'];
}
