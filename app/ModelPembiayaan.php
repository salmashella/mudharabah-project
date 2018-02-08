<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelPembiayaan extends Model
{
    protected $table = 'tb_pembiayaan';
    protected $fillable = ['Id_Pembiayaan','No_Rekening', 'Id_Nasabah', 'tujuan_akad', 'Jangka_Waktu', 'Besar_Pembiayaan',  'Nisbah_Nasabah',
        'Nisbah_BMT', 'angsuran_perbulan', 'tanggal_pengajuan',  'Status','keterangan'];
}
