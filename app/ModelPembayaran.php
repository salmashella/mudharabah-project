<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelPembayaran extends Model
{
    protected $table = 'tb_pembayaran';
    protected $fillable = ['id_pembayaran','Id_Pembiayaan','No_Rekening', 'penyetor', 'jenis_id_penyetor','no_id_penyetor','alamat_penyetor','no_telp_penyetor', 'angsuran_ke', 'nominal', 'sisa_pembayaran', 'status_pembayaran'];
}
