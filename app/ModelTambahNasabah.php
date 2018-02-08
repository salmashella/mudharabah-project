<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelTambahNasabah extends Model
{
    protected $table = 'tb_nasabah';
    protected $fillable = ['Nama', 'Jenkel', 'Alamat', 'Agama', 'No_Telp', 'Jenis_Identitas', 'No_Identitas', 'Pekerjaan',
        'Tempat_Lahir','Tanggal_Lahir', 'Nama_Ahliwaris', 'jenis_id_ahliwaris','no_id_ahliwaris', 'no_telp_ahliwaris','Alamat_Ahliwaris', 'Hubungankeluarga_Ahliwaris'];
}
