<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelRekening extends Model
{
    //
    protected $table = 'tb_rekening';
    protected $fillable = ['No_Rekening', 'Id_Nasabah', 'Saldo', 'Status'];
}
