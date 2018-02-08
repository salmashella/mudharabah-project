<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelNeraca extends Model
{
    protected $table = 'tb_neraca';
    protected $fillable = ['No_Rekening', 'Id_Pegawai', 'debit','kredit','keterangan'];
}
