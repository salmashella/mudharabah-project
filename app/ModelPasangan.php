<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelPasangan extends Model
{
    //
    protected $table = 'tb_datapasangan';
    protected $fillable = ['Id_Nasabah', 'Nama_Pasangan','jenis_id_pasangan','no_id_pasangan','no_telp_pasangan', 'Pekerjaan_Pasangan', 'Jenkel_Pasangan', 'Keterangan'];

}

