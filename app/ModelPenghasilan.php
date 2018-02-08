<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelPenghasilan extends Model
{
    //
    protected $table = 'tb_datapenghasilan';
    protected $fillable = ['Id_Nasabah', 'Penghasilan_Istri', 'Penghasilan_Suami', 'Penghasilan_lain', 'Pengeluaran_Pendidikan',
    'Pengeluaran_Rumahtangga', 'Pengeluaran_CicilanBank', 'Pengeluaran_Pribadi', 'Pengeluaran_lain'];

}
