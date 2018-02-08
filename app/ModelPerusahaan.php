<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelPerusahaan extends Model
{
    //
    protected $table = 'tb_perusahaan';
    protected $fillable = ['Id_Nasabah', 'Nama_Perusahaan','no_siup', 'No_Telp_Perusahaan', 'Alamat_Perusahaan', 'Bidang_Usaha', 'Berdiri_Sejak' , 'Status'];

}
