<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelJaminan extends Model
{
    //
    protected $table = 'tb_jaminan';
    protected $fillable = ['Id_Pembiayaan','jenis_jaminan', 'no_id_jaminan', 'atas_nama','status_jaminan'];
}
