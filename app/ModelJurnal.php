<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelJurnal extends Model
{
    //
    protected $table = 'tb_jurnal';
    protected $fillable = ['No_Rekening','nominal_transaksi','keterangan'];
}
