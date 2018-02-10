<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelAdmin extends Model
{
    //
    protected $table = 'tb_admin';
    protected $fillable = ['id_admin','Id_Pegawai'];

}
